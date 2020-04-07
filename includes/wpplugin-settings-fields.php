<?php 

function wpplugin_add_item_section() {

    if( !get_option( 'postcodes' ) ){
        add_option( 'postcodes' );
    }

    add_settings_section(
        'wpplugin_settings_section',
        __( 'A Plugin Settings Section', 'wpplugin' ),
        'wpplugin_settings_section_callback',
        'wpplugin'
    );

    add_settings_field(
        'wpplugin_settings_custom_text',
        __( 'Custom Text', 'wpplugin' ),
        'wpplugin_settings_custom_text_callback',
        'wpplugin',
        'wpplugin_settings_section'
    );

    register_setting(
        'wpplugin_settings',
        'postcodes'
    );

}
add_action( 'admin_init', 'wpplugin_add_item_section' );

function wpplugin_settings_section_callback() {
    esc_html_e( 'Plugin settings section description', 'wpplugin' );
}

function wpplugin_settings_custom_text_callback() {
    $options = get_option( 'postcodes' );

    $custom_text = '';
    if( isset( $options['custom_text'] ) ) {
        $custom_text = esc_html( $options['custom_text'] );
    }

    echo '<input type="text" id="wpplugin_customtext" name="postcodes[custom_text]" value="' . $custom_text . '" />';
}