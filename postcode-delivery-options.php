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
if ( !defined( 'WPINC' ) ) {
    die;
}

defined( 'WPPLUGIN_DIR' ) or define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );
defined( 'WPPLUGIN_URL' ) or define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
 

include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-settings-fields.php' );
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-settings-link.php' );
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-styles.php' );
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-scripts.php' );
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-options.php' );