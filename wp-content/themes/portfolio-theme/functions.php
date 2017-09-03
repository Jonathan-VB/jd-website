<?php

/**
 * Theme support.
 */
add_theme_support( 'menus' );

/**
 * Enqueue styles.
 */
function jd_theme_styles() {
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/assets/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'jd_theme_styles' );


/**
 * Enqueue scripts.
 */
function jd_theme_js() {
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'jd_theme_js' );
