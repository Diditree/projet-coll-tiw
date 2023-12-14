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
