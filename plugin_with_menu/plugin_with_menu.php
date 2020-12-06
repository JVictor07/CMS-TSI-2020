<?php

/**
 * Plugin Name: Plug-in with Menu
 * Plugin URI: https://sp.senac.br
 * Description: This is a plug-in integrad with WP menu
 * Version: 0.0.1
 * Author: João Victor
 * Author URI: https://sp.senac.br
 * License: CC BY
 */

add_action('admin_init', 'set_configs');

function set_configs() {
  register_setting('configs-exemplo', 'api-token');
  register_setting('configs-exemplo', 'api-url');
}

add_action('admin_menu','my_plugin_menu');

function my_plugin_menu(){

// Example to create an item at the first level of menu
/*add_menu_page('My Plug-in configs', 
                'My Plugin',
                'administrator', 
                'my-plugin-config',
                'open_configs',
                'dashicons-admin-generic');*/

// Plug-in inside Settings
add_submenu_page('options-general.php', //SHOW INSIDE SETTIGNS
                'My Plug-in configs', //PAGE NAME
                'My Plugin', //PLUG-IN NAME
                'administrator', // WHO CAN CHANGE
                'my-plugin-config', // URL SLUG
                'open_configs'); // FUNCTION NAME
}

function open_configs(){
  require 'plugin_with_menu_tpl.php';
}