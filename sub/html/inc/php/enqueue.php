<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Callback to enqueue the CodeMirror library
 */
function spacexchimp_p006_load_scripts_codemirror() {

    // Put value of plugin constants into an array for easier access
    $plugin_combo = spacexchimp_p020_plugin();
    $plugin = spacexchimp_p006_plugin();

    // Enqueue main files of the CodeMirror library
    wp_enqueue_style( $plugin['prefix'] . '-codemirror-css', $plugin_combo['url'] . 'inc/lib/codemirror/lib/codemirror.css', array(), $plugin['version'], 'all' );
    wp_enqueue_script( $plugin['prefix'] . '-codemirror-js', $plugin_combo['url'] . 'inc/lib/codemirror/lib/codemirror.js', array(), $plugin['version'], false );

    // Enqueue settings file
    wp_enqueue_script( $plugin['prefix'] . '-codemirror-settings-js', $plugin['url'] . 'inc/js/codemirror-settings.js', array(), $plugin['version'], true );

    // Enqueue addons
    $addons = array(
                    'display' => array( 'autorefresh', 'placeholder' ),
                    'selection' => array( 'active-line' )
                   );
    foreach ( $addons as $addons_group_name => $addons_group ) {
        foreach ( $addons_group as $addon ) {
            wp_enqueue_script( $plugin['prefix'] . '-codemirror-addon-' . $addon . '-js', $plugin_combo['url'] . 'inc/lib/codemirror/addon/' . $addons_group_name . '/' . $addon . '.js', array(), $plugin['version'], false );
        }
    }

    // Enqueue modes
    $modes = array(
                    'css',
                    'htmlmixed',
                    'javascript',
                    'xml'
                  );
    foreach ( $modes as $mode ) {
        wp_enqueue_script( $plugin['prefix'] . '-codemirror-mode-' . $mode . '-js', $plugin_combo['url'] . 'inc/lib/codemirror/mode/' . $mode . '/' . $mode . '.js', array(), $plugin['version'], true );
    }

}

/**
 * Load scripts and style sheet for settings page
 */
function spacexchimp_p006_load_scripts_admin( $hook ) {

    // Put value of plugin constants into an array for easier access
    $plugin_combo = spacexchimp_p020_plugin();
    $plugin = spacexchimp_p006_plugin();

    // Return if the page is not a settings page of this plugin
    $settings_page = 'code_page_code/html';
    if ( $settings_page != $hook ) {
        return;
    }

    // Load jQuery library
    wp_enqueue_script( 'jquery' );

    // Bootstrap library
    wp_enqueue_style( $plugin['prefix'] . '-bootstrap-css', $plugin_combo['url'] . 'inc/lib/bootstrap/bootstrap.css', array(), $plugin['version'], 'all' );
    wp_enqueue_style( $plugin['prefix'] . '-bootstrap-theme-css', $plugin_combo['url'] . 'inc/lib/bootstrap/bootstrap-theme.css', array(), $plugin['version'], 'all' );
    wp_enqueue_script( $plugin['prefix'] . '-bootstrap-js', $plugin_combo['url'] . 'inc/lib/bootstrap/bootstrap.js', array(), $plugin['version'], false );

    // Font Awesome library
    wp_enqueue_style( $plugin['prefix'] . '-font-awesome-css', $plugin_combo['url'] . 'inc/lib/font-awesome/css/font-awesome.css', array(), $plugin['version'], 'screen' );

    // Style sheet
    wp_enqueue_style( $plugin['prefix'] . '-admin-css', $plugin['url'] . 'inc/css/admin.css', array(), $plugin['version'], 'all' );

    // JavaScript
    wp_enqueue_script( $plugin['prefix'] . '-admin-js', $plugin['url'] . 'inc/js/admin.js', array(), $plugin['version'], true );

    // Call the function that enqueue the CodeMirror library
    spacexchimp_p006_load_scripts_codemirror();
}
add_action( 'admin_enqueue_scripts', $plugin['prefix'] . '_load_scripts_admin' );
