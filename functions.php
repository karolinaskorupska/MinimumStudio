<?php

function minimumStudio_register_styles(){

    wp_enqueue_style('minimumStudio', get_template_directory_uri()."/template-parts/css/style.css", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts','minimumStudio_register_styles' );
?>