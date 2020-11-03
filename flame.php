<?php

/*
 * Plugin Name: Flame
 * Plugin URI: https://github.com/kahturin
 * Description: Este é um Plugin que irá fazer sua máquina pegar fogo
 * Version: 0.0.1
 * Author: Karina Turin
 * Author URI: https://github.com/kahturin
 * License: CC BY
 */

add_filter('login_errors', 'alteraMensagem');
function alteraMensagem(){
        return 'credenciais inválidas';
}

add_action('wp_head', 'colocarOGTags');
function colocarOGTags(){
        if(is_single()){

                $dados_do_Post = get_post(get_the_ID());

                $nomeDoSite = get_bloginfo();

                $title = $dados_do_Post->post_title;

                $resumo = $dados_do_Post->post_excerpt;

                echo   "\n\n\n
                        <meta property='og:title' content='" . $title . "'>\n
                        <meta property='og:site name' content='" . $nomeDoSite .                                                                                         "'>\n
                        <meta property='og:url' content='" . get_permalink() . "                                                                                        '>\n
                        <meta property='og:description' content='" . $resumo . "                                                                                        '>\n
                        \n\n\n";
                }

}

