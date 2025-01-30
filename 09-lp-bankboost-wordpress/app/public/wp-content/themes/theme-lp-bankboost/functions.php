<?php
function enqueue_custom_styles() {
    wp_enqueue_style(
        'main-style',
        get_stylesheet_directory_uri() . '/css/main.css', // Arquivo CSS compilado
        array(), 
        null
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
