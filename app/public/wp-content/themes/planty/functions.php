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

function add_admin_link_to_menu($items, $args)
{
    if (is_user_logged_in() && $args->theme_location == 'main-menu') {
        $admin_link = '<li class="menu-item"><a href="http://planty.local/admin/">Admin</a></li>';
        $items .= $admin_link;
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);
