<?php

// check user capabilities
if ( ! current_user_can( 'manage_options' ) ) {
    return;
}

// add error/update messages

// check if the user have submitted the settings
// WordPress will add the "settings-updated" $_GET parameter to the url
if ( isset( $_GET['settings-updated'] ) ) {
    // add settings saved message with the class of "updated"
    add_settings_error( 'wordpresstraining_messages', 'wordpresstraining_message', 'Lưu thành công', 'updated' );
}

// show error/update messages
settings_errors( 'wordpresstraining_messages' );

?>



<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
			<?php
			// output security fields for the registered setting "wporg"
			settings_fields( 'wordpresstraining_settings_page' );
			// output setting sections and their fields
			// (sections are registered for "wporg", each field is registered to a specific section)
			do_settings_sections( 'wordpresstraining_settings_page' );
			// output save settings button
			submit_button( 'Save Settings' );
			?>
		</form>
	</div>