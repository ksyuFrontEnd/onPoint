<?php

/* Add logo and title*/ 
if( !function_exists( 'onpoint_setup' )) {
    function onpoint_setup()
    {
        add_theme_support( 'custom-logo',
            array(
                'height' => 50,
                'width' => 50,
                'flex-width' => true,
                'flex-height' => true,
            )
        );

        add_theme_support( 'title-tag' );
    }

    add_action( 'after_setup_theme', 'onpoint_setup' );
}

/* Enqueue scripts and styles */
function onpoint_scripts() {
    wp_enqueue_style( 'main', get_stylesheet_uri () );
    wp_enqueue_style( 'onpoint-style', get_template_directory_uri() . '/assets/css/front-page.css', array('main') );
    wp_enqueue_script( 'onpoint-scripts', get_template_directory_uri() . '/assets/js/front-page.js', array(), false, true );
    wp_enqueue_script( 'header-scripts', get_template_directory_uri() . '/assets/js/header.js', array(), false, true );
    wp_enqueue_script( 'footer-scripts', get_template_directory_uri() . '/assets/js/footer.js', array(), false, true );
    wp_enqueue_style(  'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap', [], null );
}

add_action( 'wp_enqueue_scripts', 'onpoint_scripts' );

/* Register menus */
function onpoint_menus() {
    $locations = array(
        'header' => __( 'Header Menu', 'onpoint' ),
        'footer' => __( 'Footer Menu', 'onpoint' ),
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'onpoint_menus' );

/* Enqueue customizer */
require_once( get_template_directory () . '/incs/customizer.php' );
