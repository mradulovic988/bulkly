<?php

/**
 * Public side integration
 *
 * Bulkly_Public class declare all methods and properties
 * inside the Front-end side of the website
 *
 * PHP version 7.1
 *
 * @Bulkly_Public
 *
 * @package    Bulkly_Public
 * @author     Marko Radulovic <mradulovic988@gmail.com>
 * @copyright  2022 M Lab Studio
 * @license    http://www.gnu.org/licenses/gpl-3.0.txt
 * @version    1.0.0
 * @since      File available since Release 1.0.0
 */
class Bulkly_Public {
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'bulkly_enqueue_public_script' ) );
	}

	public function bulkly_enqueue_public_script() {
		wp_enqueue_style( 'bulkly_public_style', plugins_url( '/assets/css/bulkly-public.css', __FILE__ ) );
		wp_enqueue_script( 'bulkly_public_script', plugins_url( '/assets/js/bulkly-public.js', __FILE__ ), array(), '1.0.0', true );
	}
}

new Bulkly_Public();