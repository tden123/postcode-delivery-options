<?php

add_action( 'template_redirect', 'plugin_is_page' );

function plugin_is_page() {
    if ( is_page( '5309' ) ) {  

        $args = array( 'post_type' => 'postcodes', 'fields' => 'ids', 'numberposts' => -1 );

        $postcode_ids = get_posts( $args );

        $postcode_data = [];

        foreach( $postcode_ids as $id ) {
            $town = get_field('town', $id);
            $postcode = get_field('postcode', $id);
            $area = get_field('area', $id);
            $days_available = get_field('days_available', $id);
            
            if($town == null) {
                $town = "Unknown";
            }
            if($postcode == null) {
                $postcode = "Unknown";
            }
            if($area == null) {
                $area = "Unknown";
            }
            if($days_available == null) {
                $days_available = "Unknown";
            }

            $data = [];
            array_push($data, $town);
            array_push($data, $postcode);
            array_push($data, $area);
            array_push($data, $days_available);

            // push data to 2D array
            array_push($postcode_data, $data);
        }
        
        wp_register_script( 'postcodes', WPPLUGIN_URL . 'frontend/js/displayLocations.js', [], false, true );
        wp_localize_script('postcodes', 'postcode_data', $postcode_data);
        wp_enqueue_script( 'postcodes' );
    }
}