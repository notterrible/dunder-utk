<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="header-top">
            <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                        <h1><?php bloginfo('name'); ?></h1>
                    </a>
                <?php endif; ?>
            </div>

            <nav class="utility-navigation" aria-label="Utility Navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'utility',
                    'container'      => false,
                    'menu_class'     => 'utility-nav',
                    'fallback_cb'    => function() {
                        echo '<ul class="utility-nav">';
                        echo '<li><a href="#">Request Info</a></li>';
                        echo '<li><a href="#">Visit</a></li>';
                        echo '<li><a href="#">Apply</a></li>';
                        echo '<li><a href="#">Give</a></li>';
                        echo '</ul>';
                    },
                ));
                ?>
                <button class="search-toggle" aria-label="Toggle search">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                </button>
            </nav>
        </div>
    </div>

    <nav class="main-navigation" aria-label="Primary Navigation">
        <div class="container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => function() {
                    echo '<ul>';
                    echo '<li><a href="#">About</a></li>';
                    echo '<li><a href="#">Academics</a></li>';
                    echo '<li><a href="#">Admissions</a></li>';
                    echo '<li><a href="#">Student Life</a></li>';
                    echo '<li><a href="#">Research</a></li>';
                    echo '</ul>';
                },
            ));
            ?>
        </div>
    </nav>
</header>

<main id="main-content" class="site-main">
