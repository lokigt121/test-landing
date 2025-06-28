<?php
if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

function my_theme_supports() {
    add_theme_support('editor-styles');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'my_theme_supports');

/**
 * Enqueue scripts and styles.
 */
function test_landing_scripts()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('swiper',  get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true);

    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');

    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/custom.css');
}

add_action('wp_enqueue_scripts', 'test_landing_scripts');

add_theme_support('post-thumbnails');

add_action('init', 'true_jquery_register');

function true_jquery_register()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', ('https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'), false, null, true);
        wp_enqueue_script('jquery');
    }
}