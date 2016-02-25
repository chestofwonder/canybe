<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo get_bloginfo( "name" ) . " - ";
echo the_title(); ?></title>

<?php wp_head(); ?>
  </head>
  <body>
	<div id="wrapper">
	  <?php
	  $args = array(
		  'menu'			 => "Main Menu",
		  'container'		 => "nav",
		  'container_id'	 => "main_menu"
	  );

	  wp_nav_menu( $args );
	  ?>
	  <div clas="clearfix"></div>

	  <?php
	  if ( is_active_sidebar( 'contact_form' ) ) {
		dynamic_sidebar( 'contact_form' );
	  }
