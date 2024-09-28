<?php

/* Add logo, title and thumbnails */ 
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
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'mobile-size', 765, 345, true );
    }

    add_action( 'after_setup_theme', 'onpoint_setup' );
}

/* Enqueue scripts and styles */
function onpoint_scripts() {
    wp_enqueue_style( 'main', get_stylesheet_uri () );
    wp_enqueue_style( 'onpoint-style', get_template_directory_uri() . '/assets/css/front-page.css', array('main') );
    wp_enqueue_script( 'onpoint-scripts', get_template_directory_uri() . '/assets/js/front-page.js', array(), false, true );
    wp_enqueue_script( 'home-scripts', get_template_directory_uri() . '/assets/js/home.js', array(), false, true );
    wp_enqueue_script( 'header-scripts', get_template_directory_uri() . '/assets/js/header.js', array(), false, true );
    wp_enqueue_script( 'footer-scripts', get_template_directory_uri() . '/assets/js/footer.js', array(), false, true );
    wp_enqueue_style(  'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap', [], null );


    if( locate_template( 'template-parts/one-latest-post-card.php' ) ) {
        wp_enqueue_style( 'one-latest-post-card-style', get_template_directory_uri() . '/assets/css/template-parts-styles/one-latest-post-card.css', array(), null );
    };

    if( locate_template( 'template-parts/one-popular-post-card.php' ) ) {
        wp_enqueue_style( 'one-popular-post-card-style', get_template_directory_uri() . '/assets/css/template-parts-styles/one-popular-post-card.css', array(), null );
    };
}

add_action( 'wp_enqueue_scripts', 'onpoint_scripts' );

/* Enqueue customizer */
require_once( get_template_directory () . '/incs/customizer.php' );

/* Register menus */
function onpoint_menus() {
    $locations = array(
        'header' => __( 'Header Menu', 'onpoint' ),
        'footer' => __( 'Footer Menu', 'onpoint' ),
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'onpoint_menus' );

/* Limit content in popular posts to 100 characters and add 'Read more' */
function limit_popular_post_content( $content ) {

    if( is_home() ) {

        $char_limit = 100;
        $post_link = get_permalink();

        if( strlen($content) > $char_limit ) {

            $content = substr( $content, 0, $char_limit ) . '...';
            $content .= '<a href="' . $post_link . '">Read more</a>';

        }
    }
    return $content;
}

add_filter( 'the_content', 'limit_popular_post_content' );
