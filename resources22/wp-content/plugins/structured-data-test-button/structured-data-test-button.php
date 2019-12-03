<?php 
   /*
   Plugin Name: Structured Data Test Button
   Plugin URI: https://wordpress.org/plugins/structured-data-test-button/
   Description: Adds a "Test Data" link in the admin bar (when viewing any page or post) which opens the current page in Google's Structured Data Testing Tool. (You must have the admin bar enabled to see it.)
   Version: 1.1
   Author: Jay Holtslander
   Author URI: https://jay.holtslander.ca/
   License: GPL2
   Text Domain: structured-data-test-button
   */



	if ( ! is_admin()) {

		function custom_toolbar_link($wp_admin_bar) {
			$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
			$Permalink = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			$args = array(
				'id' => 'data',
				'title' => 'Test Data', 
				'href' => 'https://developers.google.com/structured-data/testing-tool?url=' . urlencode( $Permalink ), 
				'meta' => array(
							'class' => 'Data',
							'target' => '_blank',
					)
			);
			$wp_admin_bar->add_node($args);
		}
		add_action('admin_bar_menu', 'custom_toolbar_link', 999);


	}

?>