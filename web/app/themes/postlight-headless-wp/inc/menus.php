<?php

// Add About Us menu
function register_menus()
{
    register_nav_menu('header-menu', __('Header Menu', 'postlight-headless-wp'));
}
add_action('after_setup_theme', 'register_menus');
