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

}
