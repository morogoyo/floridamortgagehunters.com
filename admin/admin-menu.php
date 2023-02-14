<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;


// add top-level administrative menu
function roof_calculator_add_toplevel_menu() {

/*
add_menu_page(
string   $page_title,
string   $menu_title,
string   $capability,
string   $menu_slug,
callable $function = '',
string   $icon_url = '',
int      $position = null
)
*/

	add_menu_page(
'Roof Calculator Settings',
'Roof calculator',
'manage_options',
'roof-calculator',
'roof_calculator_display_settings_page',
'dashicons-admin-plugins',
null
);

}
add_action( 'admin_menu', 'roof_calculator_add_toplevel_menu' );