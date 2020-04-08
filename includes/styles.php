<?php

function wpplugin_frontend_styles() {
    wp_enqueue_style(
        'wpplugin-frontend',
        WPPLUGIN_URL . 'frontend/css/wpplugin-frontend-style.css',
        [],
        time()
    );
};
add_action( 'wp_enqueue_scripts', 'wpplugin_frontend_styles', 100 );