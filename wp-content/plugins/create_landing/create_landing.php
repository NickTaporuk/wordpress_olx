<?php
/**
 * @package Akismet
 */
/*
Plugin Name: Landing Creator
Plugin URI: nictaporuk@yandex.ru
Description: Landing Creator
Version: 0.0.1
Author: Nick Taporuk
Author URI: nictaporuk@yandex.ru
License: MIT
Text Domain: landing_create
*/

if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

define( 'Landing_VERSION', '0.0.1' );
define( 'Landing_MINIMUM_WP_VERSION', '3.1' );
define( 'Landing_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'Landing__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'Landing_DELETE_LIMIT', 100000 );

//register_activation_hook( __FILE__, array( 'Akismet', 'plugin_activation' ) );
//register_deactivation_hook( __FILE__, array( 'Akismet', 'plugin_deactivation' ) );

//require_once( AKISMET__PLUGIN_DIR . 'class.akismet.php' );
//require_once( AKISMET__PLUGIN_DIR . 'class.akismet-widget.php' );

add_action( 'init', array( 'Landing', 'init' ) );

if ( is_admin() ) {
    require_once( AKISMET__PLUGIN_DIR . 'class.akismet-admin.php' );
    add_action( 'init', array( 'Landing_Admin', 'init' ) );
}

//add wrapper class around deprecated akismet functions that are referenced elsewhere
//require_once( AKISMET__PLUGIN_DIR . 'wrapper.php' );

