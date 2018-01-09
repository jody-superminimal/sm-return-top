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
	wp_enqueue_script( 'return-top-js', plugins_url( 'assets/return_top.js', __FILE__ ), array( 'jquery' ), true );
	wp_enqueue_style( 'return-top-csss', plugins_url( 'assets/return_top.css', __FILE__ ) );
}

/**
 * Add the html
 */
add_action( 'wp_footer', 'sm_return_to_top_html' );
function sm_return_to_top_html () {
	echo '<div id="btn-return-top" title="Go to top"><img src="' . plugins_url( 'assets/up-open-big.svg', __FILE__ ) . '" /></div>';
 }
