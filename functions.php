<?php 

// Load stylesheets
function load_css() {
    wp_enqueue_style('vlr-stylesheet', get_template_directory_uri() . '/dist/main.css', [], 1,'all');
}
add_action( 'wp_enqueue_scripts', 'load_css');

// Load scripts
function load_js() {
    wp_enqueue_script('vlr-script', get_template_directory_uri() . '/dist/main.js', ['jquery'], 1, true);
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/7cfabbd96c.js', array(), 1);
}
add_action( 'wp_enqueue_scripts', 'load_js');

