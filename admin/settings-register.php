<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
exit;
}


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
'manage_options',
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
'roof_calculator_section_login',
'Roofing Calculator Customize Login Page',
'roof_calculator_callback_section_login',
'roof-calculator'
);

add_settings_section(
'roof_calculator_section_admin',
'Roofing Calculator Customize Admin Area',
'roof_calculator_callback_section_admin',
'roof-calculator'
);

//Fields for settings

/*

add_settings_field(
string   $id,
string   $title,
callable $callback,
string   $page,
string   $section = 'default',
array    $args = []
);

*/

add_settings_field(
'custom_url',
'Custom URL',
'roof_calculator_callback_field_text',
'roof-calculator',
'roof_calculator_section_login',
[ 'id' => 'custom_url', 'label' => 'Custom URL for the login logo link' ]
);

add_settings_field(
'custom_title',
'Custom Title',
'roof_calculator_callback_field_text',
'roof-calculator',
'roof_calculator_section_login',
[ 'id' => 'custom_title', 'label' => 'Custom title attribute for the logo link' ]
);

add_settings_field(
'custom_style',
'Custom Style',
'roof_calculator_callback_field_radio',
'roof-calculator',
'roof_calculator_section_login',
[ 'id' => 'custom_style', 'label' => 'Custom CSS for the Login screen' ]
);

add_settings_field(
'custom_message',
'Custom Message',
'roof_calculator_callback_field_textarea',
'roof-calculator',
'roof_calculator_section_login',
[ 'id' => 'custom_message', 'label' => 'Custom text and/or markup' ]
);

add_settings_field(
'custom_footer',
'Custom Footer',
'roof_calculator_callback_field_text',
'roof-calculator',
'roof_calculator_section_admin',
[ 'id' => 'custom_footer', 'label' => 'Custom footer text' ]
);

add_settings_field(
'custom_toolbar',
'Custom Toolbar',
'roof_calculator_callback_field_checkbox',
'roof-calculator',
'roof_calculator_section_admin',
[ 'id' => 'custom_toolbar', 'label' => 'Remove new post and comment links from the Toolbar' ]
);

add_settings_field(
'custom_scheme',
'Custom Scheme',
'roof_calculator_callback_field_select',
'roof-calculator',
'roof_calculator_section_admin',
[ 'id' => 'custom_scheme', 'label' => 'Default color scheme for new users' ]
);


}

add_action( 'admin_init', 'roof_calculator_register_settings' );