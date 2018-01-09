<?php
/**
 * Plugin Name:     Return to Top
 * Plugin URI:      https://github.com/jay-aye-see-kay/sm-return-top
 * Description:     Adds a return to top button
 * Author:          Superminimal
 * Author URI:      https://superminimal.com.au/
 * Text Domain:     sm-return-top
 * Domain Path:     /languages
 * Version:         1.0.1
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
 include_once('updater.php');
 if (is_admin()) { // note the use of is_admin() to double check that this is happening in the admin
	$config = array(
		'slug' => plugin_basename(__FILE__), // this is the slug of your plugin
		'proper_folder_name' => 'sm-return-top', // this is the name of the folder your plugin lives in
		'api_url' => 'https://api.github.com/repos/jay-aye-see-kay/sm-return-top', // the GitHub API url of your GitHub repo
		'raw_url' => 'https://raw.github.com/jay-aye-see-kay/sm-return-top/master', // the GitHub raw url of your GitHub repo
		'github_url' => 'https://github.com/jay-aye-see-kay/sm-return-top', // the GitHub url of your GitHub repo
		'zip_url' => 'https://github.com/jay-aye-see-kay/sm-return-top/zipball/master', // the zip url of the GitHub repo
		'sslverify' => true, // whether WP should check the validity of the SSL cert when getting an update, see https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/2 and https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/4 for details
		'requires' => '4.0', // which version of WordPress does your plugin require?
		'tested' => '4.9', // which version of WordPress is your plugin tested up to?
		'readme' => 'README.md', // which file to use as the readme for the version number
		'access_token' => '', // Access private repositories by authorizing under Appearance > GitHub Updates when this example plugin is installed
	);
	new WP_GitHub_Updater($config);
}