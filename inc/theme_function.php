<?php
//register logo section for dynamic logo upload
function shakil_customize_register ($wp_customize){
    $wp_customize->add_section('shakil_header_area', array(
        'title' =>__('Header Area', 'shakilahmed'),       
    ));
    $wp_customize-> add_setting('shakil_logo', array(
        'default' => get_bloginfo('template_directory') . '/resources/img/logo.png', 
    ));
    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'shakil_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you update your logo, you can do it here.',
        'setting' => 'shakil_logo',
        'section' => 'shakil_header_area',
    )));

//register Fotter Area section for dynamic text
    $wp_customize->add_section('shakil_footer_area', array(
        'title' =>__('Footer Area', 'shakilahmed'),    
        'description' => 'If you update your copyright text, you can do it here.',   
    ));
    $wp_customize-> add_setting('shakil_copyright', array(
        'default' => 'Copyright &copy; 2023 Shakil Ahmed. All Rights Reserved', 
    ));
    $wp_customize-> add_control('shakil_copyright', array(
        'label' => 'Copyright Text',
        'description' => 'If you update your copyright text, you can do it here.',
        'setting' => 'shakil_copyright',
        'section' => 'shakil_footer_area',
    ));

}
add_action('customize_register', 'shakil_customize_register');