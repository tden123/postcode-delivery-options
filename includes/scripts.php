<?php

$args = array( 'post_type' => 'postcodes', 'fields' => 'ids' );

$postcode_ids = get_posts( $args );

$postcode_data = [];

foreach( $postcode_ids as $id ) {
    $town = get_field('town', $id);
    $postcode = get_field('postcode', $id);
    $run = get_field('run', $id);
    $area = get_field('area', $id);
    $days_available = get_field('days_available', $id);

    $data = [];
    array_push($data, $town);
    array_push($data, $postcode);
    array_push($data, $run);
    array_push($data, $area);
    array_push($data, $days_available);

    array_push($postcode_data, $data);
}

wp_register_script( 'postcodes', WPPLUGIN_URL . 'frontend/js/displayPostcode.js', [], time(), true );

wp_localize_script('postcodes', 'postcode_data', $postcode_data);

wp_enqueue_script( 'postcodes' );
