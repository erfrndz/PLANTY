<?php

add_action ('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles ()
{
    wp_enqueue_style ('child-theme-css', get_stylesheet_directory_uri() . '/style.css');
}

function ajouter_menu_admin_si_connecte($items, $args) {
    if (is_user_logged_in() && $args->theme_location == 'Menu-principal') {
        $items .= '<li><a href="' . esc_url(home_url('/admin')) . '">Admin</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_menu_admin_si_connecte', 10, 2);
