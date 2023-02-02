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

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

// Include your custom code here.

require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';