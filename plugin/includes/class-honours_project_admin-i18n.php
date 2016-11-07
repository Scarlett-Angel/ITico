<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       scarlett-angel.com
 * @since      1.0.0
 *
 * @package    Honours_project_admin
 * @subpackage Honours_project_admin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Honours_project_admin
 * @subpackage Honours_project_admin/includes
 * @author     Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */
class Honours_project_admin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'honours_project_admin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
