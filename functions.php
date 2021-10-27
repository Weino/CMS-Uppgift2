<?php
function load_css()
{
    wp_register_style(
        'best',
        get_template_directory_uri() . '/css/best.css',
        [],
        1,
        'all'
    );
    wp_enqueue_style('best');
}

add_action('wp_enqueue_scripts', 'load_css');

register_nav_menus(
    array(
        'main-menu' => 'Main menu location',
        'footer-menu' => 'Footer menu location'
    )
);