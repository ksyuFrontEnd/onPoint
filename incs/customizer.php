<?php

// Add options for social media links and email address in customizer
add_action( 'customize_register', 'myfooter_customize_register' );

function myfooter_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'onpoint_footer_options', array(
        'title' => __( 'Footer options', 'onpoint' ),
        'priority' => 150,
    ) );

    // facebook
    $wp_customize->add_setting( 'onpoint-facebook' );
    $wp_customize->add_control( 'onpoint-facebook', array(
        'label' => __( 'Facebook link', 'onpoint' ),
        'section' => ( 'onpoint_footer_options' ),
    ) );

    // instagram
    $wp_customize->add_setting( 'onpoint-instagram' );
    $wp_customize->add_control( 'onpoint-instagram', array(
        'label' => __( 'Instagram link', 'onpoint' ),
        'section' => ( 'onpoint_footer_options' ),
    ) );

    // email
    $wp_customize->add_setting( 'onpoint-email' );
    $wp_customize->add_control( 'onpoint-email', array(
        'label' => __( 'Email address', 'onpoint' ),
        'section' => ( 'onpoint_footer_options' ),
    ) );

}

// Return social media and email settings from customizer
function onpoint_footer_options() {
    return array(
        'facebook' => get_theme_mod( 'onpoint-facebook' ),
        'instagram' => get_theme_mod( 'onpoint-instagram' ),
        'email' => get_theme_mod( 'onpoint-email' ),
    );
}
