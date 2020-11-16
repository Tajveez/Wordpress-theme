<?php

function twentytwentyone_script_enqueue() {
    wp_enqueue_style('customstyle',get_template_directory_uri().'/css/twentytwentyone.css', 
        array(), 
        '1.0.0', 
        'all'
    );
    wp_enqueue_script(
        'customjs', 
        get_template_directory_uri().'/js/twentytwentyone.js', 
        array(), 
        '1.0.0', 
        true
    );
    
}

add_action('wp_enqueue_scripts', 'twentytwentyone_script_enqueue');

function twentytwentyone_theme_setup(){
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('footer', 'Footer Navigation Menu');
}

add_action('init', 'twentytwentyone_theme_setup');