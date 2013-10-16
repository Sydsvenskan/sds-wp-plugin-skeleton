<?php
/**
 * Backend class
 *
 * usage in a template to display the name, using name template
 * \sds\skeleton\Frontent::init()->get_name( 'name' );
 *
 */

namespace sds\skeleton;


class Frontent  {


	private static $instance;


	/**
	 * Initialize
	 */
	public static function init() {

		if ( ! isset( self::$instance ) ) {
			self::$instance = new Frontent;
		}

		return self::$instance;
	}


	/**
	 * Constructor
	 */
	public function __construct() {

		add_action( 'enqueue_scripts', array( $this, 'add_scripts' ) );

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


	/**
	 * Get and display something
	 */
	public function get_name( $template_name ){

		// set data
		$vars['name'] = 'Mr Wordpress';

		// display
		echo $this->display( $template , $vars );

	}


	/**
	 * Return the template
	 */
	public function get_template( $name ) {

		return SDS_PATH . '/tpl/' . $name . '.php';

	}


	/**
	 * Display the template
	 */
	protected function display( $template_name, $vars = array() ) {

		extract( $vars );
		ob_start();

		$full_template_path = $this->get_template( $template_name );

		if ( file_exists( $full_template_path ) ) {
			include $full_template_path;
		}

		return ob_get_clean();
	}


}

Frontent::init();