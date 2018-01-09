<?php
/**
 * Plugin Name:     Sm Return Top
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     sm-return-top
 * Domain Path:     /languages
 * Version:         0.1.0
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
		<svg xmlns="http://www.w3.org/2000/svg" width="864" height="1000">
			<path d="M804 720L432 362 62 720c-17 15-34 15-50 0-16-16-16-33 0-50l396-390c17-17 33-17 48 0l396 390c16 17 16 34 0 50-17 15-33 15-48 0"/>
		</svg>
	</div>';
 }
