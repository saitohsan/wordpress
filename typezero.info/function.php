<?php
    function themebs_enqueue_styles() {
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css' );
        wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
    }

    add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');


    function themebs_enqueue_scripts() {
      wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ) );
    }
    add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');
 ?>
