<?php
/**
 * Theme Customizer Settings
 */

function utk_demo_customize_register($wp_customize) {

    // ===== HERO SECTION =====
    $wp_customize->add_section('utk_hero_section', array(
        'title'    => __('Hero Section', 'utk-demo'),
        'priority' => 30,
    ));

    // Hero Superheading
    $wp_customize->add_setting('hero_superheading', array(
        'default'           => 'Welcome to',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_superheading', array(
        'label'   => __('Superheading', 'utk-demo'),
        'section' => 'utk_hero_section',
        'type'    => 'text',
    ));

    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'University Excellence',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Main Title', 'utk-demo'),
        'section' => 'utk_hero_section',
        'type'    => 'text',
    ));

    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Building Tomorrow\'s Leaders',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Subtitle', 'utk-demo'),
        'section' => 'utk_hero_section',
        'type'    => 'text',
    ));

    // Hero Description
    $wp_customize->add_setting('hero_description', array(
        'default'           => 'Discover a world of opportunities and academic excellence.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('hero_description', array(
        'label'   => __('Description', 'utk-demo'),
        'section' => 'utk_hero_section',
        'type'    => 'textarea',
    ));

    // Hero CTA Text
    $wp_customize->add_setting('hero_cta_text', array(
        'default'           => 'Explore Programs',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_cta_text', array(
        'label'   => __('Button Text', 'utk-demo'),
        'section' => 'utk_hero_section',
        'type'    => 'text',
    ));

    // Hero CTA Link
    $wp_customize->add_setting('hero_cta_link', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('hero_cta_link', array(
        'label'   => __('Button Link', 'utk-demo'),
        'section' => 'utk_hero_section',
        'type'    => 'url',
    ));

    // ===== BILLBOARD SECTION =====
    $wp_customize->add_section('utk_billboard_section', array(
        'title'    => __('Billboard Section', 'utk-demo'),
        'priority' => 31,
    ));

    $wp_customize->add_setting('billboard_title', array(
        'default'           => 'Empowering Innovation and Discovery',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('billboard_title', array(
        'label'   => __('Title', 'utk-demo'),
        'section' => 'utk_billboard_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('billboard_description', array(
        'default'           => 'Join a community dedicated to excellence in education, research, and service.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('billboard_description', array(
        'label'   => __('Description', 'utk-demo'),
        'section' => 'utk_billboard_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('billboard_cta_text', array(
        'default'           => 'Learn More',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('billboard_cta_text', array(
        'label'   => __('Button Text', 'utk-demo'),
        'section' => 'utk_billboard_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('billboard_cta_link', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('billboard_cta_link', array(
        'label'   => __('Button Link', 'utk-demo'),
        'section' => 'utk_billboard_section',
        'type'    => 'url',
    ));

    // ===== SECTION 1 (Media & Text) =====
    $wp_customize->add_section('utk_section1', array(
        'title'    => __('Section 1 - Media & Text', 'utk-demo'),
        'priority' => 32,
    ));

    $wp_customize->add_setting('section1_title', array(
        'default'           => 'Experience Campus Life',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('section1_title', array(
        'label'   => __('Title', 'utk-demo'),
        'section' => 'utk_section1',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('section1_description', array(
        'default'           => 'Immerse yourself in a vibrant community with endless opportunities for growth, learning, and connection.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('section1_description', array(
        'label'   => __('Description', 'utk-demo'),
        'section' => 'utk_section1',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('section1_cta_text', array(
        'default'           => 'Visit Campus',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('section1_cta_text', array(
        'label'   => __('Button Text', 'utk-demo'),
        'section' => 'utk_section1',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('section1_cta_link', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('section1_cta_link', array(
        'label'   => __('Button Link', 'utk-demo'),
        'section' => 'utk_section1',
        'type'    => 'url',
    ));

    // ===== SECTION 2 (Text & Media) =====
    $wp_customize->add_section('utk_section2', array(
        'title'    => __('Section 2 - Text & Media', 'utk-demo'),
        'priority' => 33,
    ));

    $wp_customize->add_setting('section2_title', array(
        'default'           => 'World-Class Research',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('section2_title', array(
        'label'   => __('Title', 'utk-demo'),
        'section' => 'utk_section2',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('section2_description', array(
        'default'           => 'Our faculty and students are pushing the boundaries of knowledge across disciplines, making discoveries that change the world.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('section2_description', array(
        'label'   => __('Description', 'utk-demo'),
        'section' => 'utk_section2',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('section2_cta_text', array(
        'default'           => 'Explore Research',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('section2_cta_text', array(
        'label'   => __('Button Text', 'utk-demo'),
        'section' => 'utk_section2',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('section2_cta_link', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('section2_cta_link', array(
        'label'   => __('Button Link', 'utk-demo'),
        'section' => 'utk_section2',
        'type'    => 'url',
    ));

    // ===== POINTS OF PRIDE =====
    $wp_customize->add_section('utk_pride_section', array(
        'title'    => __('Points of Pride Section', 'utk-demo'),
        'priority' => 34,
    ));

    $wp_customize->add_setting('pride_title', array(
        'default'           => 'Our Impact',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('pride_title', array(
        'label'   => __('Section Title', 'utk-demo'),
        'section' => 'utk_pride_section',
        'type'    => 'text',
    ));

    // ===== FOOTER =====
    $wp_customize->add_section('utk_footer_section', array(
        'title'    => __('Footer Settings', 'utk-demo'),
        'priority' => 35,
    ));

    $wp_customize->add_setting('utk_footer_address', array(
        'default'           => 'Knoxville, Tennessee 37996',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('utk_footer_address', array(
        'label'   => __('Address', 'utk-demo'),
        'section' => 'utk_footer_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('utk_footer_phone', array(
        'default'           => '(865) 974-1000',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('utk_footer_phone', array(
        'label'   => __('Phone Number', 'utk-demo'),
        'section' => 'utk_footer_section',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'utk_demo_customize_register');
