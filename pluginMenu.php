<?php

/*
 * Plugin Name: Plugin com Menu
 * Plugin URI: https://github.com/kahturin
 * Description: Este é um Plugin que irá fazer sua máquina pegar fogo
 * Version: 0.0.1
 * Author: Karina Turin
 * Author URI: https://github.com/kahturin
 * License: CC BY
 */

add_action('admin_menu', 'menuPlugin');

function menuPlugin(){
	//exemplo para criar um item no primeiro nível do menu	
	//add_menu_page('configurações do Plugin', 'Meu Plugin',
	//	'administrator', 'meu-plugin-config', 'abreConfiguracoes');

	add_submenu_page('options-general.php',
	       		'configurações do meu plugin',
			'meu plugin',
			'administrator',
			'meu-plugin-config',
			'abreConfiguracoes');
}

function abreConfiguracoes(){
	require 'pluginMenu_tpl.php';
}
