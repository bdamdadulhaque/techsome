<?php
/**
 * Enqueue scripts and styles.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_enqueue_scripts', 'techsome_enqueue_assets' );
function techsome_enqueue_assets() {
	wp_enqueue_style(
		'techsome',
		TECHSOME_URI . 'assets/css/theme.css',
		array(),
		TECHSOME_VERSION
	);
	wp_style_add_data( 'techsome', 'rtl', 'replace' );

	wp_enqueue_script(
		'techsome',
		TECHSOME_URI . 'assets/js/theme.js',
		array(),
		TECHSOME_VERSION,
		true
	);
	wp_localize_script(
		'techsome',
		'techsome',
		array(
			'menuOpen'  => __( 'Open menu', 'techsome' ),
			'menuClose' => __( 'Close menu', 'techsome' ),
		)
	);

	$primary   = techsome_mod( 'techsome_primary_color', '#2563eb' );
	$secondary = techsome_mod( 'techsome_secondary_color', '#0f172a' );
	$body_font = techsome_mod( 'techsome_font_body', 'system' );
	$heading_font = techsome_mod( 'techsome_font_heading', 'system' );
	$container = (int) techsome_mod( 'techsome_container_width', 1200 );

	$inline = ':root{--techsome-primary:' . esc_attr( $primary ) . ';--techsome-secondary:' . esc_attr( $secondary ) . ';--techsome-container:' . $container . 'px;}';
	wp_add_inline_style( 'techsome', $inline );
}

add_action( 'enqueue_block_editor_assets', 'techsome_editor_assets' );
function techsome_editor_assets() {
	wp_enqueue_style(
		'techsome-editor',
		TECHSOME_URI . 'assets/css/theme.css',
		array(),
		TECHSOME_VERSION
	);
}
