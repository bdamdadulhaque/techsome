<?php
/**
 * Techsome theme functions and definitions.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TECHSOME_VERSION', '1.0.0' );
define( 'TECHSOME_DIR', trailingslashit( get_template_directory() ) );
define( 'TECHSOME_URI', trailingslashit( get_template_directory_uri() ) );

require_once TECHSOME_DIR . 'inc/helpers.php';
require_once TECHSOME_DIR . 'inc/setup.php';
require_once TECHSOME_DIR . 'inc/enqueue.php';
require_once TECHSOME_DIR . 'inc/customizer.php';
require_once TECHSOME_DIR . 'inc/template-parts.php';
require_once TECHSOME_DIR . 'inc/block-patterns.php';

/**
 * Add body class when sidebar is active.
 */
add_filter( 'body_class', 'techsome_body_class_sidebar' );
function techsome_body_class_sidebar( $classes ) {
	if ( is_active_sidebar( 'sidebar-1' ) && ( is_single() || is_archive() || is_home() || is_search() ) ) {
		$classes[] = 'has-sidebar';
	}
	return $classes;
}
