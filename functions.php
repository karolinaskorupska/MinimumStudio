
<?php
//adds dynamic title tag support
function minimumStudio_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

}

add_action('after_setup_theme', 'minimumStudio_theme_support');

//menu 
function minimumStudio_menus(){
    $locations = array(
        'header' => "Desctop Header Menu",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'minimumStudio_menus');

//adds styles
function minimumStudio_register_styles(){

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('minimumstudio-style', get_template_directory_uri()."/main.css", array("minimumstudio-fontawesome"), $version, 'all');
    wp_enqueue_style('minimumstudio-fontawesome', "https://use.fontawesome.com/releases/v5.6.1/css/all.css", array(), '5.6.1', 'all');

}

add_action('wp_enqueue_scripts','minimumStudio_register_styles' );

//adds js
function minimumStudio_register_scripts(){

    wp_enqueue_script('minimumstudio-script', get_template_directory_uri()."/assets/js/main.js/", array(), '1.0', true);
    wp_enqueue_script('minimumstudio-jquery', "https://code.jquery.com/jquery-3.5.1.slim.min.js", array(), '3.5.1', true);
}

add_action('wp_enqueue_scripts','minimumStudio_register_scripts' );

?>