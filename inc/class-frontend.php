<?php
/**
 * Backend class
 *
 * usage:
 * \sds\skeleton\Backend::init()->get_stuff();
 *
 */

namespace sds\skeleton;

class Backend  {


	private static $instance;


	/**
	 * Initialize
	 */
	public static function init() {

		if ( ! isset( self::$instance ) ) {
			self::$instance = new Frames;
		}

		return self::$instance;
	}


	/**
	 * Constructor
	 */
	public function __construct() {

		add_action( 'admin_enqueue_scripts', array( $this, 'add_scripts' ) );

	}


	/**
	 * Add backend javascripts
	 */
	public function add_scripts() {

		wp_enqueue_script(
			'skeleton-js',
			SDS_URL . 'js/skeleton.js' ,
			array( 'jquery'  ),
			SDS_VER,
			true
		);

	}



	public function get_stuff(){

	}


}

Backend::init();