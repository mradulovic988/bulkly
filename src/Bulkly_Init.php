<?php

/**
 * Plugin initializations
 *
 * Bulkly_Init initialise all files, classes, methods
 * and properties for the plugin
 *
 * PHP version 7.1
 *
 * @Bulkly_Init
 *
 * @package    Bulkly_Init
 * @author     Marko Radulovic <mradulovic988@gmail.com>
 * @copyright  2022 M Lab Studio
 * @license    http://www.gnu.org/licenses/gpl-3.0.txt
 * @version    1.0.0
 * @since      File available since Release 1.0.0
 */
class Bulkly_Init {
	public static $instance;

	public function __construct() {
		add_action( 'init', array( $this, 'bulkly_admin_files' ) );
		add_action( 'init', array( $this, 'bulkly_public_files' ) );
	}

	public function bulkly_admin_files() {
		if ( is_admin() ) {
			require_once BULKLY_PLUGIN_PATH . 'admin/Bulkly_Admin.php';
		}
	}

	public function bulkly_public_files() {
		if ( ! is_admin() ) {
			require_once BULKLY_PLUGIN_PATH . 'public/Bulkly_Public.php';
		}
	}

	public static function bulkly_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
	}
}

Bulkly_Init::bulkly_instance();