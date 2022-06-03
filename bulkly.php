<?php
/**
 * Bulkly
 *
 * @package           Bulkly
 * @author            Marko Radulovic
 * @copyright         2022 Marko Radulovic
 * @license           GPL-3.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Bulkly - Bulk product offer
 * Plugin URI:        https://wordpress.org/plugins/bulkly
 * Description:       Bulkly Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur autem commodi consequuntur delectus dolore, dolorum ea error harum hic illo magnam molestiae molestias nihil quis sequi similique sit voluptatibus?
 * Version:           1.0.0
 * Requires at least: 4.6
 * Requires PHP:      7.1
 * Author:            Marko Radulovic
 * Author URI:        https://mlab-studio.com/
 * Text Domain:       bulkly
 * Domain Path:       /languages
 * License:           GPL v3 or later
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'BULKLY_PLUGIN_PATH' ) ) {
	define( 'BULKLY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'BULKLY_PLUGIN_VERSION' ) ) {
	define( 'BULKLY_PLUGIN_VERSION', '1.0.0' );
}

if ( ! defined( 'BULKLY_PLUGIN_BASENAME' ) ) {
	define( 'BULKLY_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
}

if ( ! defined( 'BULKLY_TEXT_DOMAIN' ) ) {
	define( 'BULKLY_TEXT_DOMAIN', 'bulkly' );
}

function bulkly_activation() {}
register_activation_hook( __FILE__, 'bulkly_activation' );

function bulkly_deactivation() {}
register_deactivation_hook( __FILE__, 'bulkly_deactivation' );

require_once BULKLY_PLUGIN_PATH . 'src/Bulkly_Init.php';