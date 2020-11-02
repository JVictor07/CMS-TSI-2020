<?php
/* 
* Plugin Name: Meu primeiro Plug-in
* Plugin URI: https://sp.senac.br
* Description: Este é plug-in desenvolvido por mim
* Version: 0.0.1
* Author: João Silva
* Author URI: https://sp.senac.br
* License: CC BY
*/

add_filter('login_errors', 'altera_msg_login');

function altera_msg_login() {
  return 'Credenciais inválidas';
}