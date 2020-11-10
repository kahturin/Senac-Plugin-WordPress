<?php

/*
Plugin Name: MeuCrud
PLugin URI: https://sp.senac.com.br
Description: Este é um plugin de CRUD
Version: 0.0.1
Author: Karina Turin
Author URI: https://github.com/kahturin
License: CC BY
 */

if(!defined('WPINC')) exit; //protege o código de ser chamado diretamente

register_activation_hook(__FILE__, 'criarTabela');

function criarTabela(){
	global $wpdb;

	$wpdb->query("CREATE TABLE {$wpdb->prefix}agenda
			(id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
			nome VARCHAR(100) NOT NULL, 
			whatsapp BIGINT UNSIGNED NOT NULL)");
}
