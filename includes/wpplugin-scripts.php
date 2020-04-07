<?php

function wpplugin_frontend_scripts() {
    wp_enqueue_script(
        'wpplugin-frontend',
        WPPLUGIN_URL . 'frontend/js/wpplugin-frontend.js',
        [],
        time()
    );
};
add_action( 'wp_enqueue_scripts', 'wpplugin_frontend_scripts', 100 );