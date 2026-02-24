<?php
/**
 * Shortcodes for product checkout URLs and buttons.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * [techsome_plugin_checkout_url] – output the Plugin checkout URL (for use in links).
 */
add_shortcode( 'techsome_plugin_checkout_url', 'techsome_shortcode_plugin_checkout_url' );
function techsome_shortcode_plugin_checkout_url() {
	return techsome_get_plugin_checkout_url();
}

/**
 * [techsome_theme_checkout_url] – output the Theme checkout URL (for use in links).
 */
add_shortcode( 'techsome_theme_checkout_url', 'techsome_shortcode_theme_checkout_url' );
function techsome_shortcode_theme_checkout_url() {
	return techsome_get_theme_checkout_url();
}

/**
 * [techsome_plugin_checkout_button] – styled button linking to Plugin checkout.
 */
add_shortcode( 'techsome_plugin_checkout_button', 'techsome_shortcode_plugin_checkout_button' );
function techsome_shortcode_plugin_checkout_button( $atts ) {
	$url = techsome_get_plugin_checkout_url();
	$atts = shortcode_atts( array(
		'text' => __( 'Get the Plugin', 'techsome' ),
		'class' => '',
	), $atts, 'techsome_plugin_checkout_button' );
	return '<a class="techsome-btn techsome-btn--primary techsome-btn--lg ' . esc_attr( $atts['class'] ) . '" href="' . esc_url( $url ) . '">' . esc_html( $atts['text'] ) . '</a>';
}

/**
 * [techsome_theme_checkout_button] – styled button linking to Theme checkout.
 */
add_shortcode( 'techsome_theme_checkout_button', 'techsome_shortcode_theme_checkout_button' );
function techsome_shortcode_theme_checkout_button( $atts ) {
	$url = techsome_get_theme_checkout_url();
	$atts = shortcode_atts( array(
		'text' => __( 'Get the Theme', 'techsome' ),
		'class' => '',
	), $atts, 'techsome_theme_checkout_button' );
	return '<a class="techsome-btn techsome-btn--primary techsome-btn--lg ' . esc_attr( $atts['class'] ) . '" href="' . esc_url( $url ) . '">' . esc_html( $atts['text'] ) . '</a>';
}
