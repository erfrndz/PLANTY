<?php

add_action ('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles ()
{
    wp_enqueue_style ('child-theme-css', get_stylesheet_directory_uri() . '/style.css');
}


function custom_menu_items($items, $args) {
        if (is_user_logged_in() && $args->theme_location == 'main_menu') {
        $admin_item = '<li><a href="' . get_admin_url() . '">Admin</a></li>';
        $position = strpos($items, '<li id="menu-item-21"'); 
        if ($position !== false) {
            $items = substr_replace($items, $admin_item, $position, 0);
        }
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'custom_menu_items', 10, 2);

