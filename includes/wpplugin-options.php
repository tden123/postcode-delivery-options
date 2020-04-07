<?php 

function wpplugin_options() {
    add_option ( 'wpplugin_option', 'My Plugin Options' );
    //updated_option( 'wpplugin_option', 'My Updated Plugin Options' );
    //delete_option( 'wpplugin_option' );
}
add_action( 'admin_init', 'wpplugin_options' );