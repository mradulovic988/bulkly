<?php

/**
 * Admin side integration
 *
 * Bulkly_Admin class declare all methods and properties
 * inside the Admin side of the plugin.
 *
 * PHP version 7.1
 *
 * @Bulkly_Admin
 *
 * @package    Bulkly_Admin
 * @author     Marko Radulovic <mradulovic988@gmail.com>
 * @copyright  2022 M Lab Studio
 * @license    http://www.gnu.org/licenses/gpl-3.0.txt
 * @version    1.0.0
 * @since      File available since Release 1.0.0
 */
class Bulkly_Admin {
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'bulkly_enqueue_admin_script' ) );
	}

	public function bulkly_enqueue_admin_script() {
		wp_enqueue_style( 'bulkly_admin_style', plugins_url( '/assets/css/bulkly-admin.css', __FILE__ ) );
		wp_enqueue_script( 'bulkly_admin_script', plugins_url( '/assets/js/bulkly-admin.js', __FILE__ ), array(), '1.0.0', true );
	}
}

new Bulkly_Admin();