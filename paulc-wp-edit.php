<?php

/**
 * Simple plugin for WordPress site.
 * 
 * @wordpress-plugin
 * Plugin Name: 	WP Edit
 * Plugin URI: 		https://www.paulchinmoy.com
 * Description: 	A basic plugin to customize the WordPress site
 * Author: 			Paul Chinmoy
 * Author URI: 		https://www.paulchinmoy.com
 *
 * Version: 		1.0
 *
 * License: 		GPLv2 or later
 * License URI: 	http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Text Domain: 	paulc-wp-edit
 * Domain Path: 	languages  
 */

/**
 * Copyright (c) 2020 Paul Chinmoy. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 */

//* Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) {
  wp_die( __( "Sorry, you are not allowed to access this page directly.", 'paulc-wp-edit' ) );
}

//* Define constants
define( 'PWP_VERSION', 	'1.0' );
define( 'PWP_FILE', 	trailingslashit( dirname( __FILE__ ) ) . 'paulc-wp-edit.php' );
define( 'PWP_DIR', 		plugin_dir_path( PWP_FILE ) );
define( 'PWP_URL', 		plugins_url( '/', PWP_FILE ) );

add_action( 'plugins_loaded', 		'pwp_load_textdomain' );

/**
 * Loads text domain.
 */ 
function pwp_load_textdomain()
{
	//* Load textdomain for translation 
	load_plugin_textdomain( 'paulc-wp-edit', false, basename( PWP_DIR ) . '/languages' );
}