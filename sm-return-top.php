<?php
/**
 * Plugin Name:     Return to Top
 * Plugin URI:      https://github.com/jay-aye-see-kay/sm-return-top
 * Description:     Adds a return to top button
 * Author:          Superminimal
 * Author URI:      https://superminimal.com.au/
 * Text Domain:     sm-return-top
 * Domain Path:     /languages
 * Version:         1.0.2
 *
 * @package         Sm_Return_Top
 */

 /**
 * Add the js and css
 */
add_action( 'wp_enqueue_scripts', 'sm_add_return_top_files' );
function sm_add_return_top_files() {
	wp_enqueue_script( 'return-top-js', plugins_url( 'assets/return_top.js', __FILE__ ), array( ), false, true );
	wp_enqueue_style( 'return-top-csss', plugins_url( 'assets/return_top.css', __FILE__ ) );
}

/**
 * Add the html
 */
add_action( 'wp_footer', 'sm_return_to_top_html' );
function sm_return_to_top_html () {
	echo '
	<div id="btn-return-top" title="Go to top">
		<svg id="btn-return-top-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 13">
			<path d="M22.3333 12.5833L12 2.639 1.7222 12.5833c-.4814.4075-.9444.4075-1.3889 0-.4444-.4444-.4444-.9074 0-1.3889l11-10.8333c.4815-.4815.926-.4815 1.3334 0l11 10.8333c.4444.4815.4444.9445 0 1.389-.4815.4074-.926.4074-1.3334 0"/>
		</svg>
	</div>';
 }

  /**
 * Add the updater
 */
if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}
$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'jay-aye-see-kay' );
$updater->set_repository( 'sm-return-top' );

$updater->initialize();