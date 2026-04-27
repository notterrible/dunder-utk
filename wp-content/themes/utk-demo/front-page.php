<?php
/**
 * Template for Homepage
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/images/hero-placeholder.jpg'); ?>');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <?php
        $hero_superheading = get_theme_mod('hero_superheading', 'Welcome to');
        $hero_title = get_theme_mod('hero_title', 'University Excellence');
        $hero_subtitle = get_theme_mod('hero_subtitle', 'Building Tomorrow\'s Leaders');
        $hero_description = get_theme_mod('hero_description', 'Discover a world of opportunities and academic excellence.');
        $hero_cta_text = get_theme_mod('hero_cta_text', 'Explore Programs');
        $hero_cta_link = get_theme_mod('hero_cta_link', '#');
        ?>

        <?php if ($hero_superheading) : ?>
            <p class="hero-superheading"><?php echo esc_html($hero_superheading); ?></p>
        <?php endif; ?>

        <h1 class="hero-title"><?php echo esc_html($hero_title); ?></h1>

        <?php if ($hero_subtitle) : ?>
            <p class="hero-subtitle"><?php echo esc_html($hero_subtitle); ?></p>
        <?php endif; ?>

        <?php if ($hero_description) : ?>
            <p class="hero-description"><?php echo esc_html($hero_description); ?></p>
        <?php endif; ?>

        <?php if ($hero_cta_text) : ?>
            <a href="<?php echo esc_url($hero_cta_link); ?>" class="btn"><?php echo esc_html($hero_cta_text); ?></a>
        <?php endif; ?>
    </div>
</section>

<!-- Billboard Section -->
<section class="billboard-section">
    <div class="container">
        <?php
        $billboard_title = get_theme_mod('billboard_title', 'Empowering Innovation and Discovery');
        $billboard_description = get_theme_mod('billboard_description', 'Join a community dedicated to excellence in education, research, and service.');
        $billboard_cta_text = get_theme_mod('billboard_cta_text', 'Learn More');
        $billboard_cta_link = get_theme_mod('billboard_cta_link', '#');
        ?>

        <h2><?php echo esc_html($billboard_title); ?></h2>
        <p><?php echo esc_html($billboard_description); ?></p>

        <?php if ($billboard_cta_text) : ?>
            <a href="<?php echo esc_url($billboard_cta_link); ?>" class="btn btn-secondary"><?php echo esc_html($billboard_cta_text); ?></a>
        <?php endif; ?>
    </div>
</section>

<!-- Media & Text Section (Image Left) -->
<section class="media-text-section">
    <div class="container">
        <div class="media-text-content">
            <div class="media-text-image">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/section-1.jpg'); ?>" alt="Campus Life">
            </div>
            <div class="media-text-text">
                <?php
                $section1_title = get_theme_mod('section1_title', 'Experience Campus Life');
                $section1_description = get_theme_mod('section1_description', 'Immerse yourself in a vibrant community with endless opportunities for growth, learning, and connection.');
                $section1_cta_text = get_theme_mod('section1_cta_text', 'Visit Campus');
                $section1_cta_link = get_theme_mod('section1_cta_link', '#');
                ?>

                <h2><?php echo esc_html($section1_title); ?></h2>
                <p><?php echo esc_html($section1_description); ?></p>
                <a href="<?php echo esc_url($section1_cta_link); ?>" class="btn"><?php echo esc_html($section1_cta_text); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Text & Media Section (Image Right) -->
<section class="media-text-section">
    <div class="container">
        <div class="media-text-content reverse">
            <div class="media-text-text">
                <?php
                $section2_title = get_theme_mod('section2_title', 'World-Class Research');
                $section2_description = get_theme_mod('section2_description', 'Our faculty and students are pushing the boundaries of knowledge across disciplines, making discoveries that change the world.');
                $section2_cta_text = get_theme_mod('section2_cta_text', 'Explore Research');
                $section2_cta_link = get_theme_mod('section2_cta_link', '#');
                ?>

                <h2><?php echo esc_html($section2_title); ?></h2>
                <p><?php echo esc_html($section2_description); ?></p>
                <a href="<?php echo esc_url($section2_cta_link); ?>" class="btn"><?php echo esc_html($section2_cta_text); ?></a>
            </div>
            <div class="media-text-image">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/section-2.jpg'); ?>" alt="Research">
            </div>
        </div>
    </div>
</section>

<!-- Points of Pride Section -->
<section class="points-of-pride">
    <div class="container">
        <h2><?php echo esc_html(get_theme_mod('pride_title', 'Our Impact')); ?></h2>

        <div class="pride-grid">
            <?php
            // Default pride points
            $pride_points = array(
                array(
                    'number' => '30,000+',
                    'description' => 'Students',
                    'context' => 'From all 50 states and 100+ countries'
                ),
                array(
                    'number' => '900+',
                    'description' => 'Degree Programs',
                    'context' => 'Undergraduate and graduate offerings'
                ),
                array(
                    'number' => '#1',
                    'description' => 'Public University',
                    'context' => 'In Tennessee for research'
                ),
                array(
                    'number' => '$500M+',
                    'description' => 'Research Funding',
                    'context' => 'Annual research expenditures'
                ),
            );

            foreach ($pride_points as $point) :
            ?>
                <div class="pride-item">
                    <div class="pride-number"><?php echo esc_html($point['number']); ?></div>
                    <div class="pride-description"><?php echo esc_html($point['description']); ?></div>
                    <div class="pride-context"><?php echo esc_html($point['context']); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
get_footer();
