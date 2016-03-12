<?php

function theme_scripts() {
  wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
  wp_enqueue_style( 'layout', get_bloginfo('template_directory') . "/css/layout.css" );
  wp_enqueue_style( 'modules', get_bloginfo('template_directory') . "/css/modules.css" );
  wp_enqueue_style( 'theme', get_bloginfo('template_directory') . "/css/theme.css" );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function custom_theme_setup() {
  add_theme_support( 'post_thumbnails' );
  
  register_nav_menus( array(
	'main_menu' => 'Main Navigation Menu',
	'footer_menu' => 'Footer Navigation Menu',
  'footer_legal_menu' => 'Footer Legal Menu'
) );
}

add_action( 'after_setup_theme', 'custom_theme_setup' );

function add_widgets() {

	register_sidebar( array(
		'name'          => 'Contact Form',
		'id'            => 'contact_form',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );

}
add_action( 'widgets_init', 'add_widgets' );

function widget($atts) {
    
    global $wp_widget_factory;
    
    extract(shortcode_atts(array(
        'widget_name' => FALSE
    ), $atts));
    
    $widget_name = wp_specialchars($widget_name);
    
    if (!is_a($wp_widget_factory->widgets[$widget_name], 'WP_Widget')):
        $wp_class = 'WP_Widget_'.ucwords(strtolower($class));
        
        if (!is_a($wp_widget_factory->widgets[$wp_class], 'WP_Widget')):
            return '<p>'.sprintf(__("%s: Widget class not found. Make sure this widget exists and the class name is correct"),'<strong>'.$class.'</strong>').'</p>';
        else:
            $class = $wp_class;
        endif;
    endif;
    
    ob_start();
    the_widget($widget_name, $instance, array('widget_id'=>'arbitrary-instance-'.$id,
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
    
}
add_shortcode('widget','widget'); 

