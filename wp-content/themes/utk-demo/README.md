# UTK Demo WordPress Theme

A WordPress theme inspired by the University of Tennessee, Knoxville Homepage Layout Option One design system.

## Features

- **UTK Brand Colors**: Orange (#ff8200), River Blue (#1a73c5), Smokey Gray (#4b4b4b)
- **Typography**: Montserrat (body text) and Sofia Sans Extra Condensed (headlines)
- **Responsive Design**: Mobile-first approach with breakpoints
- **Modular Sections**:
  - Hero section with overlay and CTA
  - Billboard full-width section
  - Media & Text alternating layouts
  - Points of Pride statistics display
- **Three Navigation Menus**: Utility, Primary, and Footer
- **Custom Logo Support**
- **Widget-ready Footer**

## Installation

1. Upload the `utk-demo` folder to `/wp-content/themes/`
2. Activate the theme in WordPress Admin (Appearance > Themes)
3. Configure menus (Appearance > Menus)
4. Upload custom logo (Appearance > Customize > Site Identity)

## Setup Instructions

### 1. Create Navigation Menus

Go to **Appearance > Menus** and create three menus:

**Utility Navigation** (Request Info, Visit, Apply, Give)
- Assign to "Utility Navigation" location

**Primary Menu** (About, Academics, Admissions, etc.)
- Assign to "Primary Menu" location

**Footer Menu** (ADA, Privacy, Safety, Title IX, etc.)
- Assign to "Footer Menu" location

### 2. Upload Your Logo

Go to **Appearance > Customize > Site Identity**
- Upload your main logo (works on white background)
- This same logo will be used in the footer (inverted to white)

### 3. Customize Homepage Content

The homepage uses the WordPress Customizer for easy content management:

Go to **Appearance > Customize** to edit:

**Hero Section**:
- Superheading (optional)
- Main title
- Subtitle (optional)
- Description text
- CTA button text and link
- Background image (upload via Media Library)

**Billboard Section**:
- Title
- Description
- CTA button text and link

**Media & Text Sections**:
- Section 1 (Image Left): Title, description, CTA
- Section 2 (Image Right): Title, description, CTA

**Points of Pride**:
- Statistics and descriptions (currently hardcoded, see below for customization)

### 4. Add Images

Upload images to `/wp-content/themes/utk-demo/images/`:
- `hero-placeholder.jpg` (1700x700px)
- `section-1.jpg` (800x600px)
- `section-2.jpg` (800x600px)
- `logo.svg` or `logo.png`
- `logo-white.svg` or `logo-white.png`

See `images/README.md` for details.

## Customization

### Colors

Edit `style.css` CSS variables (lines 18-24):
```css
:root {
    --color-orange: #ff8200;
    --color-river-blue: #1a73c5;
    --color-smokey-gray: #4b4b4b;
    --color-light-bg: #f6f6f6;
}
```

### Typography

Fonts are loaded from Google Fonts in `functions.php`.
To change fonts, update the Google Fonts URL and CSS variables.

### Points of Pride Data

Currently hardcoded in `front-page.php` (lines 138-163).
For dynamic content, consider:
- Adding Custom Fields (ACF plugin)
- Creating a Custom Post Type for "Stats"
- Using the Customizer API to add controls

### Footer Contact Info

Edit in **Appearance > Customize > Footer Settings** (requires adding Customizer controls)
Or directly in `footer.php` (line 17-18)

## File Structure

```
utk-demo/
├── style.css           # Main stylesheet with all styles
├── functions.php       # Theme setup and functionality
├── header.php          # Header template
├── footer.php          # Footer template
├── front-page.php      # Homepage template
├── index.php           # Fallback template
├── js/
│   └── main.js        # JavaScript functionality
├── images/
│   └── README.md      # Image requirements
└── README.md          # This file
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Android)

## Future Enhancements

Potential additions:
- WordPress Customizer controls for all content
- Advanced Custom Fields (ACF) integration
- Additional page templates
- WooCommerce support
- Custom Gutenberg blocks
- Accessibility improvements (ARIA labels, keyboard navigation)
- Mobile menu toggle
- Search functionality

## Credits

- Inspired by University of Tennessee, Knoxville Design System
- Fonts: Google Fonts (Montserrat, Sofia Sans Extra Condensed)

## License

GPL v2 or later

## Support

For issues or questions, please refer to WordPress theme development documentation.
