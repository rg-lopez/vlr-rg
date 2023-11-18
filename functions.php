<?php 

// Load stylesheets
function load_css() {
    wp_enqueue_style('vlr-stylesheet', get_template_directory_uri() . '/dist/main.css', [], 1,'all');
    wp_enqueue_script('splide-stylesheet', get_template_directory_uri() . '/node_modules/@splidejs/splide/dist/css/splide.min.css', array(), 1);
}
add_action( 'wp_enqueue_scripts', 'load_css');

// Load scripts
function load_js() {
    wp_enqueue_script('vlr-script', get_template_directory_uri() . '/dist/main.js', [], 1,'all');

    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/7cfabbd96c.js', array(), 1);
    // wp_enqueue_script('tiny-sliderjs-script', get_template_directory_uri() . '/node_modules/tiny-slider/dist/tiny-slider.js', array(), 1);
    wp_enqueue_script('splide-script', get_template_directory_uri() . '/node_modules/@splidejs/splide/dist/js/splide.min.js', array(), 1);
}
add_action( 'wp_enqueue_scripts', 'load_js');

