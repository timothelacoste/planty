<?php

add_action('wp_enqueue_script', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent_style', get_template_directory_uri() . '/style.css');
}

function planty_custom_logo_setup()
{
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'planty_custom_logo_setup');

register_nav_menu('footer-menu', __('Footer Menu'));