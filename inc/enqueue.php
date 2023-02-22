<?php 
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

// Google fonts cdn calling
function shakil_add_google_fonts(){
    wp_enqueue_style('shakil_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet', false);
    wp_enqueue_style('shakil_bangla_fonts', 'https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet', false);
}
add_action( 'wp_enqueue_scripts', 'shakil_add_google_fonts' );

