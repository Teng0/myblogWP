
<?php

function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'themename', get_template_directory_uri() . '/style.css' );
    
}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

add_theme_support('post-thumbnails');