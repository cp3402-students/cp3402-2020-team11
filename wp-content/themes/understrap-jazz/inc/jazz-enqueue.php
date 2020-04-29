<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
    $the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/jazz.css', array(), $the_theme->get( 'Version' ) );
}


