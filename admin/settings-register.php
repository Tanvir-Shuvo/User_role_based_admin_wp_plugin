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
        'user_based_admin_section_menu',  // settings section ID
        '<h2>' . esc_html( 'Display and Hide Your Admin Menu', 'user-based-admin' ) . '</h2>', // Title 
        'user_based_admin_section_callback', // Callback function 
        'user-based-admin' // Slug-menu slug
    );
    


    // Menu Hide or display field
    add_settings_field(
        'hide-menu', // ID of the field
        'Hide Your Menu', //Label for the field
        'user_based_admin_yes_no_menu_checkbox_callback', // Callback function
        'user-based-admin', // Slug-menu slug,
        'user_based_admin_section_menu' // page Section
    );


}

add_action('admin_init','user_based_admin_register_settings');




