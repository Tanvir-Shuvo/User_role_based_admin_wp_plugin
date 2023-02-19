<?php
// User Based Admin -- Setiings Callback

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}


// callback: admin section
function user_based_admin_section_callback(){
    echo '<p>' . esc_html__( 'These settings enable you to customize Admin Menu.', 'user-based-admin' ) . '</p>';
}