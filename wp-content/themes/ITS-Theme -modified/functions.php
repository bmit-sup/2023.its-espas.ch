<?php

    /*function that adds css from the assets*/
    function stylesheets() {
        wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/assets/css/stylesheet.css' );
        wp_enqueue_style( 'accordion', get_template_directory_uri() . '/assets/css/accordion.css' );
        wp_enqueue_style( 'bars', get_template_directory_uri() . '/assets/css/bars.css' );
    }
    add_action( 'wp_enqueue_scripts', 'stylesheets' );

    /*function to add scripts*/
    function scripts() {
        wp_enqueue_script( 'examples', get_template_directory_uri() . '/assets/js/examples.js', array( 'jquery' ), '4.3.1', true );
        wp_enqueue_script( 'accordion_script', get_template_directory_uri() . '/assets/js/accordion_script.js', array( 'jquery' ), '4.3.1', true );
    }
    add_action( 'wp_enqueue_scripts', 'scripts' );

?>