<?php
add_theme_support('menus');
add_theme_support('title-tag');
add_action('wp_enqueue_scripts', 'insert_css');

function insert_css()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

register_nav_menus([
    'menu-principal' => 'Navigation principale',
    'socialnetworks' => 'Réseaux sociaux',
    'footerlegal' => 'Informations légales (footer)'
]);

//  LOGO
$menu_name = 'menu-principal';
$locations = get_nav_menu_locations();
$menu_id   = $locations[$menu_name];
$navID = wp_get_nav_menu_object($menu_id);
