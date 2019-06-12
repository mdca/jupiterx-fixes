<?php
/**
 * @link              https://github.com/mdca/jupiterx-fixes
 * @since             1.0.0
 * @package           JupiterXfixes
 *
 * @wordpress-plugin
 * Plugin Name:       Jupiter X Customizer Typography Fixes
 * Plugin URI:        https://github.com/mdca/jupiterx-fixes
 *
 * Version:           1.0.0
 * Author:            Miguel Arteaga
 * Author URI:        https://www.arteaga.cz
 * License: 		  GPLv2
 *
 * Description:       Fixes the typography issues within WP Customizer for Jupiter X theme's Elementor headlines. Tested up to Jupiter X 1.4.1. May not work or break the layout in future Jupiter X versions. In case the layout breaks, deactivate the plugin. If deactiavation does not help, reinstall the Jupiter X theme. You need to deactivate and reactivate this plugin after updating the Jupiter X theme.
 */

/**
 * The code that runs during plugin activation.
 */
function activate_jxfix() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/activation.php';
}
register_activation_hook( __FILE__, 'activate_jxfix' );

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_jxfix() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/deactivation.php';
}
register_deactivation_hook( __FILE__, 'deactivate_jxfix' );

// Include Customizer actions and functions
require_once plugin_dir_path( __FILE__ ) . 'includes/customizer.php';
