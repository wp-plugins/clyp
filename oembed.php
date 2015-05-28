<?php
/*
 * Prevent direct access to the file
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/*
 * Register oEmbed Provider
 */
function clyp_oembed_provider() {

	wp_oembed_add_provider( '#https?://(www.)?clyp.it/.*#i', 'http://api.clyp.it/oembed/', true );
	wp_oembed_add_provider( '#https?://(www.)?clyp.it/playlist/.*#i', 'http://api.clyp.it/oembed/', true );

}
add_action( 'init', 'clyp_oembed_provider' );
