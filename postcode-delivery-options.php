<?php
/*
Plugin Name: Postcode Delivery Options
Plugin URI: https://github.com/tden123/postcode-delivery-options
Description: Add delivery day options to specified postcodes
Version: 1.0.0
Contributors: tdenning
Author: Terence Denning
Author URI: https://terencedenning.me
License: GPLv2 or later
Text Domain: wpplugin
*/

// Do not allow file to be called directly
if ( ! defined( 'WPINC' ) ) {
    die;
}


include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-settings-fields.php' );

// Displays link next to activate that links to the
function wpplugin_add_settings_link( $links )
{
    $settings_link = '<a href="admin.php?page=wpplugin">' . __( 'Settings', 'wpplugin' ) . '</a>';
    array_push( $links, $settings_link );
    return $links;
}

$filter_name = "plugin_action_links_" . plugin_basename( __FILE__ );
add_filter( $filter_name, 'wpplugin_add_settings_link' );
