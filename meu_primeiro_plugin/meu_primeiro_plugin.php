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

// wp_head -- Add things on <head>
add_action('wp_head', 'colocar_og_tags');

function colocar_og_tags() {
  if ( is_single() ) {

    $dados_do_post = get_post( get_the_ID() );

    $titulo = $dados_do_post->post_title;

    $resumo = $dados_do_post->post_excerpt;

    echo "  \n\n\n
            <meta property='og:title' content='" . $titulo . "'>\n
            <meta property='og:site_name' content='" . get_bloginfo() . "'>\n
            <meta property='og:url' content='" . get_permalink() . "'>\n
            <meta property='og:description' content='" . $resumo . "'>\n
            \n\n\n";
  }
}