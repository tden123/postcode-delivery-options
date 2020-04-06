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

    ?>

    <div class="wrap">
    <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
    <p><?php esc_html_e( 'Hello world', 'wpplugin' ); ?></p>
    
    </div>

    <?php

}