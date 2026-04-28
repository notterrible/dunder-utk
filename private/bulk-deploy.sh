#!/bin/bash

# Usage:
# ./bulk-deploy.sh              - Apply upstream updates to all sites
# ./bulk-deploy.sh --status     - Check update status for all sites (dry run)

# Upstream UUID
UPSTREAM_ID="4bc11282-c068-47d4-b55b-ea8ece0102f6"
ORG_ID="88334e81-9c52-4e06-a1a9-164c313a034d"

# Check for status flag
STATUS_MODE=false
if [[ "$1" == "--status" || "$1" == "-s" ]]; then
  STATUS_MODE=true
  echo "Running in STATUS mode - no updates will be applied"
  echo ""
fi

# Track results
declare -a SUCCESSFUL_SITES
declare -a SUCCESSFUL_STATUSES
declare -a FAILED_SITES
TOTAL_START=$SECONDS

# Get list of sites
echo "Fetching site list from Terminus..."
SITE_LIST=$(terminus org:site:list --fields=name --upstream=$UPSTREAM_ID $ORG_ID --format=csv)

# Convert to array, skip header (compatible with older bash)
SITES=()
while IFS= read -r line; do
  # Skip header and empty lines
  [[ "$line" == "Name" ]] && continue
  [[ -z "$line" ]] && continue
  SITES+=("$line")
done <<< "$SITE_LIST"

SITE_COUNT=${#SITES[@]}

echo "Found $SITE_COUNT sites to process"
echo ""

# Process each site
CURRENT=0
for SITE in "${SITES[@]}"; do
  ((CURRENT++))
  DEV="${SITE}.dev"
  SITE_START=$SECONDS

  echo "========================================="
  echo "[$CURRENT/$SITE_COUNT] Processing: $SITE"
  echo "========================================="

  # Wrap in error handling
  SUBSHELL_OUTPUT=$(
    set -e  # Exit on error within subshell

    # Clear upstream cache first (before status check or apply)
    echo "Clearing upstream cache for ${SITE}..."
    terminus site:upstream:clear-cache $SITE -q

    if [ "$STATUS_MODE" = true ]; then
      # Status mode - just check for updates
      echo "Checking update status for ${SITE}..."
      STATUS_OUTPUT=$(terminus upstream:updates:status $DEV)
      echo "$STATUS_OUTPUT"

      # Store status for summary (remove any whitespace)
      STATUS_RESULT=$(echo "$STATUS_OUTPUT" | xargs)

    else
      # Apply mode - do the full deployment
      echo "Applying updates to ${SITE}..."
      terminus upstream:updates:apply $DEV --updatedb --accept-upstream -q

      echo "${SITE} - Code deployment finished. Clearing environment cache..."
      terminus env:clear-cache $DEV

      STATUS_RESULT="applied"
    fi

    # Calculate site duration
    SITE_DURATION=$(( SECONDS - SITE_START ))
    SITE_TIME=$(bc <<< "scale=2; $SITE_DURATION / 60")
    SITE_MIN=$(printf "%.2f" $SITE_TIME)

    SITE_LINK="https://dev-${SITE}.pantheonsite.io"
    echo "✓ Completed ${SITE} in ${SITE_MIN} minutes"
    echo "  ${SITE_LINK}"
    echo ""

    # Output status as last line for parsing
    echo "STATUS:${STATUS_RESULT}"
  ) && {
    # Success - extract status from output
    echo "$SUBSHELL_OUTPUT" | grep -v "^STATUS:"
    SITE_STATUS=$(echo "$SUBSHELL_OUTPUT" | grep "^STATUS:" | cut -d: -f2)
    SUCCESSFUL_SITES+=("$SITE")
    SUCCESSFUL_STATUSES+=("$SITE_STATUS")
  } || {
    # Failure
    echo "$SUBSHELL_OUTPUT" | grep -v "^STATUS:" 2>/dev/null || true
    echo "✗ ERROR: Failed to process ${SITE}"
    echo ""
    FAILED_SITES+=("$SITE")
  }
done

# Summary
echo "========================================="
echo "SUMMARY"
echo "========================================="

TOTAL_DURATION=$(( SECONDS - TOTAL_START ))
TOTAL_TIME=$(bc <<< "scale=2; $TOTAL_DURATION / 60")
TOTAL_MIN=$(printf "%.2f" $TOTAL_TIME)

echo "Total sites processed: $SITE_COUNT"
echo "Successful: ${#SUCCESSFUL_SITES[@]}"
echo "Failed: ${#FAILED_SITES[@]}"
echo "Total time: ${TOTAL_MIN} minutes"
echo ""

if [ ${#SUCCESSFUL_SITES[@]} -gt 0 ]; then
  echo "Successful sites:"
  for i in "${!SUCCESSFUL_SITES[@]}"; do
    site="${SUCCESSFUL_SITES[$i]}"
    status="${SUCCESSFUL_STATUSES[$i]}"
    echo "  ✓ $site ($status)"
  done
  echo ""
fi

if [ ${#FAILED_SITES[@]} -gt 0 ]; then
  echo "Failed sites:"
  for site in "${FAILED_SITES[@]}"; do
    echo "  ✗ $site"
  done
  echo ""
  exit 1
fi

echo "All sites processed successfully!"
