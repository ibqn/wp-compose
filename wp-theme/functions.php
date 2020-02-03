<?php

class WP_Theme_Includes {

    function __constructor() {
        add_action('wp_enqueue_scripts', array( $this, 'add_theme_styles' ) );
    }

    function add_theme_styles() {
        // wp_register_style( 'style', get_template_directory_uri() . 'style.css');
        // wp_enqueue_style( 'style');
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
}

new WP_Theme_Includes();

