<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://beentheresoft.com/
 * @since      1.0.0
 *
 * @package    Multiple_Authors_On_Your_Posts
 * @subpackage Multiple_Authors_On_Your_Posts/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two hooks for enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Multiple_Authors_On_Your_Posts
 * @subpackage Multiple_Authors_On_Your_Posts/admin
 * @author     Multiple Authors On Your Posts <Multiple-authors-on-your-posts@gmail.com>
 */
class Multiple_Authors_On_Your_Posts_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function pcauthor_enqueue_styles() {

		/**
		 * An instance of this class should be passed to the run() function
		 * defined in Multiple_Authors_On_Your_Posts_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Multiple_Authors_On_Your_Posts_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/Multiple-authors-on-your-postss-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function pcauthor_enqueue_scripts() {

		/**		
		 * An instance of this class should be passed to the run() function
		 * defined in Multiple_Authors_On_Your_Posts_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Multiple_Authors_On_Your_Posts_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/Multiple-authors-on-your-postss-admin.js', array( 'jquery' ), $this->version, false );

	}

}
