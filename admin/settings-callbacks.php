<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// validate plugin settings
function roof_calculator_validate_options( $input ) {

	// todo: add validation functionality..

	return $input;

}

// callback: login section
function roof_calculator_callback_section_login() {

	echo '<p>These settings enable you to customize the WP Login screen.</p>';

}


// callback: admin section
function roof_calculator_callback_section_admin() {

	echo '<p>These settings enable you to customize the WP Admin Area.</p>';

}


// callback: text field
function roof_calculator_callback_field_text( $args ) {

	$options = get_option( 'manage_options', roof_calculator_options_default() );

	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';

	$value = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';

	echo '<input id="roof_calculator_options_'. $id .'" name="roof_calculator_options['. $id .']" type="text" size="40" value="'. $value .'"><br />';
	echo '<label for="roof_calculator_options_'. $id .'">'. $label .'</label>';

}


// callback: radio field
function roof_calculator_callback_field_radio( $args ) {

	// todo: add callback functionality..

	echo 'This will be a radio field.';

}

// callback: textarea field
function roof_calculator_callback_field_textarea( $args ) {

	// todo: add callback functionality..

	echo 'This will be a textarea.';

}


// callback: checkbox field
function roof_calculator_callback_field_checkbox( $args ) {

	// todo: add callback functionality..

	echo 'This will be a checkbox.';

}


// callback: select field
function roof_calculator_callback_field_select( $args ) {

	// todo: add callback functionality..

	echo 'This will be a select menu.';

}