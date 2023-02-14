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
require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include your custom code here.


// This code needs to be refactored to its own page

// default plugin options
function roof_calculator_options_default() {

	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => 'Powered by WordPress',
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">My custom message</p>',
		'custom_footer'  => 'Special message for users',
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);

}








?>