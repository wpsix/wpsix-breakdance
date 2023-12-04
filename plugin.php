<?php
/**
 * Plugin Name: WPSix
 * Plugin URI: https://wpsix.com
 * Description: Plugin for wpsix.com themes.
 * Version: 1.0.0
 * Author: wpsix.com
 * Author URI: https://wpsix.com
 * License: GPL2
 */

define( 'THEME_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'THEME_PLUGIN', __DIR__ );

require_once plugin_dir_path( __FILE__ ) . 'inc/elements.php';
