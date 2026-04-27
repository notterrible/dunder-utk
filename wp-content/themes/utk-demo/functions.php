<?php
/**
 * UTK Demo Theme Functions
 */

// Theme setup
function utk_demo_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'utk-demo'),
        'utility' => __('Utility Navigation', 'utk-demo'),
        'footer' => __('Footer Menu', 'utk-demo'),
    ));
}
add_action('after_setup_theme', 'utk_demo_setup');

// Enqueue styles and scripts
function utk_demo_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'utk-demo-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Sofia+Sans+Extra+Condensed:wght@700;800;900&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style('utk-demo-style', get_stylesheet_uri(), array(), '1.0');

    // Main script
    wp_enqueue_script('utk-demo-script', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'utk_demo_scripts');

// Register widget areas
function utk_demo_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'utk-demo'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'utk-demo'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'utk_demo_widgets_init');

// Custom template tags and functions

/**
 * Display navigation menu
 */
function utk_demo_nav_menu($location) {
    if (has_nav_menu($location)) {
        wp_nav_menu(array(
            'theme_location' => $location,
            'container'      => false,
            'depth'          => 2,
        ));
    }
}

/**
 * Get ACF field with fallback
 */
function utk_get_field($field_name, $default = '') {
    if (function_exists('get_field')) {
        $value = get_field($field_name);
        return $value ? $value : $default;
    }
    return $default;
}

// Load customizer settings
require get_template_directory() . '/inc/customizer.php';
