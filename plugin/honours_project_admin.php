<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              scarlett-angel.com
 * @since             1.0.0
 * @package           Honours_project_admin
 *
 * @wordpress-plugin
 * Plugin Name:       Honours Project admin
 * Plugin URI:        honours_project_admin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Stephen Mclaughlin
 * Author URI:        scarlett-angel.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       honours_project_admin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-honours_project_admin-activator.php
 */
function activate_honours_project_admin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-honours_project_admin-activator.php';
	Honours_project_admin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-honours_project_admin-deactivator.php
 */
function deactivate_honours_project_admin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-honours_project_admin-deactivator.php';
	Honours_project_admin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_honours_project_admin' );
register_deactivation_hook( __FILE__, 'deactivate_honours_project_admin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-honours_project_admin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_honours_project_admin() {

	$plugin = new Honours_project_admin();
	$plugin->run();

}
run_honours_project_admin();
