<?php
/**
 * @package WP_Ahalogy
 *
 * @wordpress-plugin
 * Plugin Name: WP Ahalogy
 * Plugin URI: https://github.com/manovotny/wp-ahalogy
 * Description: Adds Ahalogy to your WordPress site.
 * Version: 1.0.1
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /lang
 * Text Domain: wp-ahalogy
 * GitHub Plugin URI: https://github.com/manovotny/wp-ahalogy
 */

/* Access
---------------------------------------------------------------------------------- */

if ( ! defined( 'WPINC' ) ) {

    die;

}

/* Composer
---------------------------------------------------------------------------------- */

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {

    require_once __DIR__ . '/vendor/autoload.php';

}

/* Initialization
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/src/initialize.php';