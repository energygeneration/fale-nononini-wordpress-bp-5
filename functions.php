<?php
function add_css()
{
    wp_register_style('first', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', false, '1.1', 'all');
    wp_enqueue_style('first');

    wp_register_style('deux', get_template_directory_uri() . '/assets/css/fontawesome.css', false, '1.1', 'all');
    wp_enqueue_style('deux');

    wp_register_style('trois', get_template_directory_uri() . '/assets/css/templatemo-sixteen.css', false, '1.1', 'all');
    wp_enqueue_style('trois');

    wp_register_style('quatre', get_template_directory_uri() . '/assets/css/owl.css', false, '1.1', 'all');
    wp_enqueue_style('quatre');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
    wp_register_script('js-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), 1.1, true);
    wp_enqueue_script('js-script');

    wp_register_script('change', get_template_directory_uri() . '/assets/js/owl.js', array('jquery'), 1.1, true);
    wp_enqueue_script('change');

    wp_register_script('popup', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), 1.1, true);
    wp_enqueue_script('popup');

    wp_register_script('carousel', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'), 1.1, true);
    wp_enqueue_script('carousel');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/accordions.js', array('jquery'), 1.1, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );
