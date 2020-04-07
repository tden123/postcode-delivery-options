<?php 

// Load page
function wpplugin_settings_page()
{
    add_menu_page(
        'ABS Postcode Checker',
        'ABS Postcode Checker',
        'manage_options',
        'wpplugin',
        'wpplugin_settings_page_markup',
        'dashicons-calendar-alt',
        100
    );
}
add_action( 'admin_menu', 'wpplugin_settings_page' );

// Callback to display HTML on page
function wpplugin_settings_page_markup()
{
    if (!current_user_can('manage_options')){
        return;
    }
    include( WPPLUGIN_DIR . 'templates/admin/settings-page.php' );
}