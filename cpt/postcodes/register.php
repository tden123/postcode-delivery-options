<?php
// Register custom post type
function register_postcodes_cpt(){
    register_post_type('postcodes', [
        'label' => 'Delivery Locations',
        'public' => true,
        'capability_type' => 'post',
        'supports' => ['title'],
        'menu_icon' => "dashicons-location-alt"
    ]);
}
add_action( 'init', 'register_postcodes_cpt' );