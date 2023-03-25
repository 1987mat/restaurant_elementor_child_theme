<?php

// Inherit theme parent style
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css');
}


/* Enqueues the external CSS & JS*/
add_action( 'wp_enqueue_scripts', 'custom_styles' );

function custom_styles() {
    wp_register_style( 'custom-css', get_stylesheet_directory_uri().'/css/custom.css' );
    wp_enqueue_style( 'custom-css' );

    wp_register_script( 'custom-js', get_stylesheet_directory_uri().'/js/custom.js' ,array(), false, true);
    wp_enqueue_script( 'custom-js' );
}