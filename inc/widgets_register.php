<?php

//Sidebar Register Function
function shakil_widgets_register(){
    register_sidebar(array(
        'name' => __('Main Widget Area', 'shakilahmed'),
        'class' => '.sidebar-1',
        'description' => __('Apperas in the sidebar in blog page and other page', 'sidebar'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}
add_action('widgets_init', 'shakil_widgets_register');