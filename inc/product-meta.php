<?php
/**
 * Product Landing page meta: link this page to Plugin or Theme checkout.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'add_meta_boxes', 'techsome_product_meta_box' );
function techsome_product_meta_box() {
	add_meta_box(
		'techsome_product_type',
		__( 'Product type (checkout link)', 'techsome' ),
		'techsome_product_meta_box_callback',
		'page',
		'side',
		'default'
	);
}

function techsome_product_meta_box_callback( $post ) {
	wp_nonce_field( 'techsome_product_type_nonce', 'techsome_product_type_nonce' );
	$value = get_post_meta( $post->ID, '_techsome_product_type', true );
	if ( ! in_array( $value, array( 'plugin', 'theme' ), true ) ) {
		$value = '';
	}
	?>
	<p>
		<label for="techsome_product_type"><?php esc_html_e( 'Use this page as:', 'techsome' ); ?></label><br>
		<select name="techsome_product_type" id="techsome_product_type">
			<option value="" <?php selected( $value, '' ); ?>><?php esc_html_e( '— Default (Header CTA URL)', 'techsome' ); ?></option>
			<option value="plugin" <?php selected( $value, 'plugin' ); ?>><?php esc_html_e( 'CharityGlow Plugin (use Plugin checkout URL)', 'techsome' ); ?></option>
			<option value="theme" <?php selected( $value, 'theme' ); ?>><?php esc_html_e( 'CharityGlow Theme (use Theme checkout URL)', 'techsome' ); ?></option>
		</select>
	</p>
	<p class="description"><?php esc_html_e( 'When using the "Product Landing" template, the main CTA button will use the URL from Appearance → Customize → Products & Checkout.', 'techsome' ); ?></p>
	<?php
}

add_action( 'save_post_page', 'techsome_product_meta_save' );
function techsome_product_meta_save( $post_id ) {
	if ( ! isset( $_POST['techsome_product_type_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['techsome_product_type_nonce'] ) ), 'techsome_product_type_nonce' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	$val = isset( $_POST['techsome_product_type'] ) ? sanitize_text_field( wp_unslash( $_POST['techsome_product_type'] ) ) : '';
	if ( in_array( $val, array( 'plugin', 'theme' ), true ) ) {
		update_post_meta( $post_id, '_techsome_product_type', $val );
	} else {
		delete_post_meta( $post_id, '_techsome_product_type' );
	}
}
