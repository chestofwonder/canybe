<?php

function canybe_scripts() {
  wp_enqueue_style( 'canybe-style', get_stylesheet_uri() );
  wp_enqueue_style( 'bs-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
}

add_action( 'wp_enqueue_scripts', 'canybe_scripts' );

function custom_theme_setup() {
  add_theme_support( 'post_thumbnails' );
}

add_action( 'after_setup_theme', 'custom_theme_setup' );


