<?php

// add sub-level administrative menu

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


function roof_calculator_settings_sublevel_menu() {

	/*

	add_submenu_page(
	string   $parent_slug,
	string   $page_title,
	string   $menu_title,
	string   $capability,
	string   $menu_slug,
	callable $function = ''
	);

	*/

	add_submenu_page(
		'admin-menu.php',
		'Roof Calculator Settings',
		'RoofCalculator',
		'manage_options',
		'roofcalculator',
		'roof_calculator_settings_sublevel_menu'
	);

}


add_action( 'admin_menu', 'roof_calculator_settings_sublevel_menu' );