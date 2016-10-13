<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.quinnsupplee.com/
 * @since      1.0.0
 *
 * @package    Quinns_Category_Filter
 * @subpackage Quinns_Category_Filter/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Quinns_Category_Filter
 * @subpackage Quinns_Category_Filter/includes
 * @author     Quinn Supplee <qsupplee@gmail.com>
 */
class Quinns_Category_Filter_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'quinns-category-filter',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
