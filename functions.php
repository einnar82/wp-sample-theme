<?php

function learning_wp_resources()
{
    // get the stylesheet filename
    wp_enqueue_style('style', get_stylesheet_uri());
}
//hook an action 
add_action('wp_enqueue_scripts', 'learning_wp_resources');
//navigation menu registration
register_nav_menus([
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
]);
