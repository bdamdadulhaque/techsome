<?php
/**
 * Contact page: handle demo access request form.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp', 'techsome_handle_demo_request' );
function techsome_handle_demo_request() {
	if ( ! isset( $_POST['techsome_demo_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['techsome_demo_nonce'] ) ), 'techsome_demo_request' ) ) {
		return;
	}
	$name  = isset( $_POST['techsome_demo_name'] ) ? sanitize_text_field( wp_unslash( $_POST['techsome_demo_name'] ) ) : '';
	$email = isset( $_POST['techsome_demo_email'] ) ? sanitize_email( wp_unslash( $_POST['techsome_demo_email'] ) ) : '';
	if ( ! $name || ! is_email( $email ) ) {
		wp_safe_redirect( get_permalink( get_queried_object() ) ?: home_url( '/contact/' ) );
		exit;
	}
	$to      = get_option( 'admin_email' );
	$subj    = sprintf( '[%1$s] %2$s', get_bloginfo( 'name' ), __( 'Demo access request', 'techsome' ) );
	$body    = sprintf( __( "New demo access request:\n\nName: %s\nEmail: %s\n\nPlease create an admin user for them to explore the CharityGlow demo.", 'techsome' ), $name, $email );
	$headers = array( 'Content-Type: text/plain; charset=UTF-8' );
	wp_mail( $to, $subj, $body, $headers );
	wp_safe_redirect( add_query_arg( 'demo_sent', '1', get_permalink( get_queried_object() ) ?: home_url( '/contact/' ) ) );
	exit;
}
