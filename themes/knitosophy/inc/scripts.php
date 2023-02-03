<?php
function knitosophy_scripts()
{
    // wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600&family=Montserrat:wght@400;700&display=swap');

    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&display=swap');
    wp_enqueue_style('google-font-altern', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
    wp_enqueue_style('google-font-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/dist/css/app.css', array(), '1.0', 'all');
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/dist/js/app.js', array('jquery'), '0.1', true);
}
add_action('wp_enqueue_scripts', 'knitosophy_scripts');
