<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://beentheresoft.com/
 * @since      1.0.0
 *
 * @package    Multiple_Authors_On_Your_Posts
 * @subpackage Multiple_Authors_On_Your_Posts/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Multiple_Authors_On_Your_Posts
 * @subpackage Multiple_Authors_On_Your_Posts/includes
 * @author     Multiple Authors On Your Posts <multiple-authors-on-your-posts@gmail.com>
 */
class Multiple_Authors_On_Your_Posts_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'multiple-authors-on-your-postss',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
