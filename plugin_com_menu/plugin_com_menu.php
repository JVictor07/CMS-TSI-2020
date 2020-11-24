  
<?php

/**
 * Plugin Name: Plug-in com Menu
 * Plugin URI: https://sp.senac.br
 * Description: Este é um plug-in integrado com o menu do WP
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

add_action('admin_menu','menu_do_meu_plugin');

function menu_do_meu_plugin(){

// EXEMPLO PARA CRIAR ITEM NO PRIMEIRO NIVEL DO MENU
/*add_menu_page('configurações do Meu Plug-in', 
                'Meu plugin', //NOME DO PLUGIN
                'administrator', 
                'meu-plugin-config',
                'abre_configuracoes',
                'dashicons-admin-generic');*/

// PLUG-IN DENTRO DE SETTINGS
add_submenu_page('options-general.php', //APARECER DENTRO DO SETTIGNS
                'configurações do Meu Plug-in', 
                'Meu-plugin', //NOME DO PLUG-IN
                'administrator', // QUEM PODE ALTERAR
                'meu-plugin-config',
                'abre_configuracoes'); // NOME DA FUNÇÃO
}

function abre_configuracoes(){
    require 'plugin_com_menu_tpl.php';
}