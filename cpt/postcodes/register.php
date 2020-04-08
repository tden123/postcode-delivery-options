<?php

function register_postcodes_cpt(){
    register_post_type('postcodes', [
        'label' => 'Postcodes',
        'public' => true,
        'capability_type' => 'post'
    ]);
}
add_action( 'init', 'register_postcodes_cpt' );


function get_postcodes() {

}