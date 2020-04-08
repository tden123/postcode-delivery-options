<?php

function postcode_styles() {
    wp_enqueue_style(
        'postcode',
        WPPLUGIN_URL . 'frontend/css/postcode-style.css',
        [],
        time()
    );
};
add_action( 'wp_enqueue_scripts', 'postcode_styles', 100 );