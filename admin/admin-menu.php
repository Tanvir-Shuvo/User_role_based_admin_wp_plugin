<?php
// User Based Admin --Admin Menu

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// Add top-level administrative menu
function new_custom_add_toplevel_menu() {
	
	add_menu_page(
		'Custom Admin Panel Setting', // page_title
		'Custom Admin Panel', // menu_title
		'manage_options', // capability
		'user-based-admin', // menu_slug
		'user_based_admin_display_settings_page', // callable function
		'dashicons-admin-customizer', // icon_url
		null // position
	);
	
}
add_action( 'admin_menu', 'new_custom_add_toplevel_menu' );