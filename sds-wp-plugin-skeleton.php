<?php
/*
Plugin Name: WP plugin skeleton
Plugin URI: http://www.sydsvenskan.se
Description: Here you write the description
Version: 1.0
Author: Johannes Fosseus
*/

/**
 * Constants
 */
define( 'SDS_VER', '1.0' );
define( 'SDS_PATH', dirname( __FILE__ ) );
define( 'SDS_URL', trailingslashit( plugins_url( '', __FILE__ ) ) );

/**
 * Include required classes
 */
require( 'inc/class-backend.php' );

