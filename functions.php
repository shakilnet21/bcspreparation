<?php 
/**
 * My Theme Founction
 */

 //Theme Title
 add_theme_support('title-tag');
// Theme css and jQuery file calling
function shakil_css_js_file_calling(){
    //stylesheet enqueue
    wp_enqueue_style( 'shakil-style', get_stylesheet_uri());
    //bootstrap css file register
    wp_register_style('bootstrap', get_template_directory_uri().'/resources/css/bootstrap.min.css', array(), '5.0.2', 'all');
    //custom css file register
    wp_register_style('custom', get_template_directory_uri().'/resources/css/custom.css', array(), '1.0.0', 'all');
    //bootstrap css enqueue
    wp_enqueue_style( 'bootstrap');
    //custom css enqueue
    wp_enqueue_style( 'custom');

    //jQuery enqueue
    wp_enqueue_script('jquery');
    //bootstrap js file enqueue
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/resources/js/bootstrap.min.js', array(), '5.0.2', 'true');
     //main js file enqueue
     wp_enqueue_script('main', get_template_directory_uri().'/resources/js/main.js', array(), '1.0.0', 'true');
}
add_action( 'wp_enqueue_scripts', 'shakil_css_js_file_calling' );



