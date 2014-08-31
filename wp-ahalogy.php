<?php
/**
 * @package WP_Ahalogy
 *
 * @wordpress-plugin
 * Plugin Name: WP Ahalogy
 * Plugin URI: https://github.com/manovotny/wp-ahalogy
 * Description: Adds Ahalogy to your WordPress site.
 * Version: 0.0.0
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

/* Libraries
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/lib/wp-enqueue-util/wp-enqueue-util.php';

/* Classes
---------------------------------------------------------------------------------- */

if ( ! class_exists( 'WP_Ahalogy' ) ) {

    require_once __DIR__ . '/classes/class-wp-ahalogy.php';

    WP_Ahalogy::get_instance();

}