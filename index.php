<?php
/*
Plugin Name: Clyp
Plugin URI:  https://wordpress.org/plugins/clyp/
Description: Embed audio from clyp.it into your WordPress site
Version:     1.1
Author:      Rami Yushuvaev
Author URI:  http://GenerateWP.com/
Text Domain: clyp
Domain Path: /languages
*/



/*
 * Prevent direct access to the file
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/*
 * Include plugin files
 */
include_once ( plugin_dir_path( __FILE__ ) . 'oembed.php' );
