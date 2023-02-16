<?php
// User Based Admin --Plugin Setiing

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// Display the plugin settings page
function user_based_admin_display_settings_page(){

    // check if user is allowed access
    if (! current_user_can("manage_options") ) return;
    
    ?>

    <div class="plugin-setting-wrap">
        <h1> <?php get_admin_page_title() ?> </h1>
        <form action="options.php" method="post">
            
            <?php
            
            // output security fields
            settings_fields("user_based_admin_options");

            // output setting sections
            do_settings_sections("user_based_admin");

            // submit button
			submit_button();

            ?>
        </form>
    </div>
    
    <?php
}