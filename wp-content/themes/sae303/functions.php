<?php
add_theme_support('post-thumbnails');

function register_my_menu()
{
    register_nav_menus(array(
        'header-menu' => __('Menu De Tete'),
    ));
}
add_action('init', 'register_my_menu', 0);
add_filter('show_admin_bar', '__return_false');

function load_custom_scripts()
{
    if (is_page('repartition')) {
        wp_enqueue_script('d3', 'https://cdn.jsdelivr.net/npm/d3@7', array(), null, true);
        wp_enqueue_script('plot', 'https://cdn.jsdelivr.net/npm/@observablehq/plot@0.6', array('d3'), null, true);
    }
}
add_action('wp_enqueue_scripts', 'load_custom_scripts');