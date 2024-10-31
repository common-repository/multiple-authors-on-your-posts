<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://beentheresoft.com/
 * @since      1.0.0
 *
 * @package    Multiple_Authors_On_Your_Posts
 * @subpackage Multiple_Authors_On_Your_Posts/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Multiple_Authors_On_Your_Posts
 * @subpackage Multiple_Authors_On_Your_Posts/public
 * @author     Multiple Authors On Your Posts <multiple-authors-on-your-posts@gmail.com>
 */
class Multiple_Authors_On_Your_Posts_Public {

	/**
	 * The Name of this plugin.
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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/multiple-authors-on-your-postss-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/multiple-authors-on-your-postss-public.js', array( 'jquery' ), $this->version, false );

	}

}
