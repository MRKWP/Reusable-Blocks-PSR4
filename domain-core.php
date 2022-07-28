<?php
/**
 * Plugin Name:     Core Functions
 * Plugin URI:      https://www.mrkwp.com
 * Description:     Website Core Functions
 * Author:          MRK WP
 * Author URI:      https://www.mrkwp.com
 * Text Domain:     domain-core
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package mrkwp
 */

// If this file is called firectly, abort!!!
defined( 'ABSPATH' ) or die( 'No Access!' );

// Require once the Composer Autoload.
if ( file_exists( dirname( __FILE__ ) . '/lib/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/lib/autoload.php';
}

/**
 * The code that runs during plugin activation.
 *
 * @return void
 */
function activate_domain_core_plugin() {
	Domain_Core\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_domain_core_plugin' );

/**
 * The code that runs during plugin deactivation.
 *
 * @return void
 */
function deactivate_domain_core_plugin() {
	Domain_Core\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_domain_core_plugin' );

/**
 * Initialize all the core classes of the plugin.
 */
if ( class_exists( 'Domain_Core\\Init' ) ) {
	Domain_Core\Init::register_services();
}