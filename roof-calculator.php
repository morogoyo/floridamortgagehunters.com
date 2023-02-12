<?php
/**
 * roof-calculator
 *
 * @package       ROOFCALCU
 * @author        Rene Torres
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   roof-calculator
 * Plugin URI:    https://nobledigitalservices.com
 * Description:   Calculator for low slope applications
 * Version:       1.0.0
 * Author:        Rene Torres
 * Author URI:    https://nobledigitalservices.com
 * Text Domain:   roof-calculator
 * Domain Path:   /languages
 */

require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
//require_once plugin_dir_path( __FILE__ ) . 'admin/submenu-page.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/settings.php';

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include your custom code here.


// This code needs to be refactored to its own page

// register plugin settings
function roof_calculator_register_settings() {

	/*

	register_setting(
		string   $option_group,
		string   $option_name,
		callable $sanitize_callback
	);

	*/

	register_setting(
		'roof_calculator_options',
		'roof_calculator_options',
		'roof_calculator_callback_validate_options'
	);


		/*

	add_settings_section(
		string   $id,
		string   $title,
		callable $callback,
		string   $page
	);

	*/

	add_settings_section(
		'roof_calcualtor_section_login',
		'Customize Login Page',
		'roof_calcualtor_callback_section_login',
		'roof-calculator'
	);

	add_settings_section(
		'myplugin_section_admin',
		'Customize Admin Area',
		'roof_calcualtor_callback_section_admin',
		'roof-calculator'
	);

}

add_action( 'admin_init', 'roof_calculator_register_settings' );


// validate plugin settings
function roof_calculator_validate_options( $input ) {

	// todo: add validation functionality..

	return $input;

}

// callback: login section
function roof_calcualtor_callback_section_login() {

	echo '<p>These settings enable you to customize the WP Login screen.</p>';

}



// callback: admin section
function roof_calcualtor_callback_section_admin() {

	echo '<p>These settings enable you to customize the WP Admin Area.</p>';

}



?>