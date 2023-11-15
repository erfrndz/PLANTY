<?php

add_action ('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles ()
{
    wp_enqueue_style ('child-theme-css', get_stylesheet_directory_uri() . '/style.css');
}

function custom_menu_items($items, $args) {
        if (is_user_logged_in() && $args->theme_location == 'main_menu') {
        $admin_item = '<li><a href="' . get_home_url() . '">Admin</a></li>';
        $position = strpos($items, '<li id="menu-item-21"'); 
        if ($position !== false) {
            $items = substr_replace($items, $admin_item, $position, 0);
        }
    }

    if (is_user_logged_in() && $args->theme_location == 'main_menu') {
        $admin_item = '<li><a href="' . get_home_url() . '">Admin</a></li>';
        $position = strpos($items, '<li class="nav-bouton menu-item menu-item-type-post_type menu-item-object-page menu-item-21"'); 
        if ($position !== false) {
            $items = substr_replace($items, $admin_item, $position, 0);
        }
    }

    if (is_user_logged_in() && $args->theme_location == 'main_menu') {
        $admin_item = '<li><a href="' . get_home_url() . '">Admin</a></li>';
        $position = strpos($items, '<li class="nav-bouton menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-15 current_page_item menu-item-21"'); 
        if ($position !== false) {
            $items = substr_replace($items, $admin_item, $position, 0);
        }
    }

    return $items;
}

add_filter('wp_nav_menu_items', 'custom_menu_items', 10, 2);