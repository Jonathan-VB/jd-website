<?php

/**
 * Theme support.
 */
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );


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
  if( is_front_page() ) {
    wp_enqueue_script( 'home_js', get_template_directory_uri() . '/assets/js/home.js', array('jquery'), '', true );
  }

  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets-prod/js/app.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'jd_theme_js' );


/**
 * Add theme menus.
 */
function register_theme_menus() {
  register_nav_menus (
    array (
      'main-left' 	=> __( 'Main Left', 'portfolio-theme' ),
      'main-right' 	=> __( 'Main Right', 'portfolio-theme' )
    )
  );
}
add_action( 'init', 'register_theme_menus' );


/**
 * Remove content editor from 'pages' in the WordPress dashboard.
 */
function remove_content_area() {
  remove_post_type_support( 'page', 'editor' );
}
add_action( 'admin_init', 'remove_content_area' );


/**
 * Creating a custom post type for portfolios.
 */
function create_posttype_portfolio() {

  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'Portfolio' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'portfolio'),
    )
  );
}
add_action( 'init', 'create_posttype_portfolio' );


/**
 * Enable ACF options page with sub pages.
 */
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
  acf_add_options_sub_page( 'Contact Settings' );
}
