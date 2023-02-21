<?php
// User Based Admin -- Setiings Callback

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}


// callback: admin section
function user_based_admin_section_callback(){
    echo '<h3>' . esc_html__( 'Top Level Menu Options', 'user-based-admin' ) . '</h3>';
}


// Callback function to display the yes or no checkbox field

function user_based_admin_yes_no_menu_checkbox_callback() {
    // Get the value of the selected checkbox from the options table
    $selected_value = get_option( 'myplugin_selected_checkbox' );
    ?>
    <p>
      <label for="myplugin_yes_checkbox">
        <input type="radio" id="myplugin_yes_checkbox" name="myplugin_selected_checkbox" value="yes" <?php checked( $selected_value, 'yes' ); ?>>
        <?php esc_html_e( 'Yes', 'myplugin' ); ?>
      </label>
    </p>
    <p>
      <label for="myplugin_no_checkbox">
        <input type="radio" id="myplugin_no_checkbox" name="myplugin_selected_checkbox" value="no" <?php checked( $selected_value, 'no' ); ?>>
        <?php esc_html_e( 'No', 'myplugin' ); ?>
      </label>
    </p>
    
    <?php
}

  



