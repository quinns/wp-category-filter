<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.quinnsupplee.com/
 * @since             1.0.0
 * @package           Quinns_Category_Filter
 *
 * @wordpress-plugin
 * Plugin Name:       Quinn's category filter
 * Plugin URI:        https://github.com/quinns/wp-category-filter
 * Description:       A coding challenge for an awesome company!
 * Version:           1.0.0
 * Author:            Quinn Supplee
 * Author URI:        https://www.quinnsupplee.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       quinns-category-filter
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-quinns-category-filter-activator.php
 */
function activate_quinns_category_filter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-quinns-category-filter-activator.php';
	Quinns_Category_Filter_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-quinns-category-filter-deactivator.php
 */
function deactivate_quinns_category_filter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-quinns-category-filter-deactivator.php';
	Quinns_Category_Filter_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_quinns_category_filter' );
register_deactivation_hook( __FILE__, 'deactivate_quinns_category_filter' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-quinns-category-filter.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_quinns_category_filter() {

	$plugin = new Quinns_Category_Filter();
	$plugin->run();

}
run_quinns_category_filter();
