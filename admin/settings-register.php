<?php
// User Based Admin -- Setiings Register 

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// register plugin settings
function user_based_admin_register_settings(){

    // Register the settings
    register_setting(
        'user_based_admin_options', // option group use in settings_fields()
        'user_based_admin_options' // option name
    );


    // Add a section to the settings page
    add_settings_section(
        'user_based_admin_section_menu',  // ID of the settings section
        esc_html( 'Customize Admin Menu', 'user-based-admin' ), // Title of the settings section, sanitized with esc_html()
        'user_based_admin_section_callback', // Callback function to output the section's content
        'user-based-admin'                // Slug of the settings page where this section should be displayed
    );


}

add_action('admin_init','user_based_admin_register_settings');



