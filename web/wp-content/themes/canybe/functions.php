<?php

function theme_scripts() {
  wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function custom_theme_setup() {
  add_theme_support( 'post_thumbnails' );
}

add_action( 'after_setup_theme', 'custom_theme_setup' );


