<?php
/*
Plugin Name: Full Page Slider
Plugin URI: https://mwororokevin.github.io
Description: An Image Slider Plugin that allows the user to create image sliders that can cover the full page height on all screen sizes.
Author: Kevin Mwororo
Author URI: https://mwororokevin.github.io
Requires PHP: 7.3.1
Requires at least: 5.6
Text Domain: full-page-slider
Domain Path: /languages/
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Version: 1.0.0
*/

add_action( 'admin_menu', 'fps_admin_menu_setup' );
// Adding the plugin as a menu item to the WordPress Admin Sidebar
function fps_admin_menu_setup () {
    add_menu_page(
        'Full Page Slider Page',
        'Full Page Slider',
        'manage_options',
        'fullpageslider',
        'fps_page_html'
    );
}

function fps_page_html (){
    echo "<h1>Hello World!</h1>";
}