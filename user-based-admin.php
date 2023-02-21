<?php

/**
 * Plugin Name:       Custom Admin Panel-User Role Based Admin
 * Plugin URI:        https://rownakh8.sg-host.com/
 * Description:       User role based customizable admin panel
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Tanvir Shuvo
 * Author URI:        https://rownakh8.sg-host.com/shop/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       user-based-admin
 * Domain Path:       /languages
 */


// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}


// if admin area

if(is_admin()){

    //include dependencies
	require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
    require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';
    require_once plugin_dir_path(__FILE__) . 'admin/settings-register.php';
    require_once plugin_dir_path(__FILE__) . 'admin/settings_callback.php';

}



// admin area css enque 
function user_based_admin_enqueue_admin_scripts() {
    wp_enqueue_style( 'user-based-admin-css-style', plugin_dir_url( __FILE__ ) . 'admin/css/user-based-admin.css' );
  }

  add_action( 'admin_enqueue_scripts', 'user_based_admin_enqueue_admin_scripts' );

