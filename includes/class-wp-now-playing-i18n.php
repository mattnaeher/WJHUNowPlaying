<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       mattnaeher.com
 * @since      1.0.0
 *
 * @package    Wp_Now_Playing
 * @subpackage Wp_Now_Playing/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Now_Playing
 * @subpackage Wp_Now_Playing/includes
 * @author     Matthew Naeher <mnaeher1@jhu.edu>
 */
class Wp_Now_Playing_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-now-playing',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
