<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Callback function that returns an array with the value of the plugin options
 * @return array
 */
function spacexchimp_p016_options() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p016_plugin();

    // Retrieve options from database
    $options = get_option( $plugin['settings'] . '_settings' );

    // Make the "$options" array if the plugin options data in the database is not exist
    if ( ! is_array( $options ) ) {
        $options = array();
    }

    // Create an array with options
    $array = $options;

    // Set default value if option is empty
    $list = array(
        'footer_beginning' => '',
        'footer_end' => '',
        'header_beginning' => '',
        'header_end' => '',
        'hidden_scrollto' => '0',
    );
    foreach ( $list as $name => $default ) {
        $array[$name] = !empty( $options[$name] ) ? $options[$name] : $default;
    }

    // Sanitize data
    //$array['footer_beginning'] = esc_textarea( $array['footer_beginning'] );
    //$array['footer_end'] = esc_textarea( $array['footer_end'] );
    //$array['header_beginning'] = esc_textarea( $array['header_beginning'] );
    //$array['header_end'] = esc_textarea( $array['header_end'] );
    //$array['hidden_scrollto'] = esc_textarea( $array['hidden_scrollto'] );

    // Modify data


    // Return the processed data
    return $array;
}
