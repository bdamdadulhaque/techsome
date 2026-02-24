<?php
/**
 * Block patterns.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'techsome_register_block_patterns' );
function techsome_register_block_patterns() {
	register_block_pattern_category(
		'techsome',
		array(
			'label'       => __( 'Techsome', 'techsome' ),
			'description' => __( 'Product and marketing patterns for Techsome theme.', 'techsome' ),
		)
	);

	$patterns = array(
		'product-hero' => array(
			'title'       => __( 'Product Hero', 'techsome' ),
			'description' => __( 'Hero section for a product landing page.', 'techsome' ),
			'content'     => '<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"techsome-pattern-hero"} -->
			<div class="wp-block-group techsome-pattern-hero" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":1} -->
			<h1 class="wp-block-heading has-text-align-center">' . esc_html__( 'Product Name', 'techsome' ) . '</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html__( 'Short tagline or description for your product.', 'techsome' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Get started', 'techsome' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group -->',
			'categories'  => array( 'techsome' ),
		),
		'feature-grid' => array(
			'title'       => __( 'Feature Grid (3 columns)', 'techsome' ),
			'description' => __( 'Three-column feature grid.', 'techsome' ),
			'content'     => '<!-- wp:heading {"textAlign":"center"} -->
			<h2 class="wp-block-heading has-text-align-center">' . esc_html__( 'Features', 'techsome' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">' . esc_html__( 'Feature One', 'techsome' ) . '</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph --><p>' . esc_html__( 'Description for the first feature.', 'techsome' ) . '</p><!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">' . esc_html__( 'Feature Two', 'techsome' ) . '</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph --><p>' . esc_html__( 'Description for the second feature.', 'techsome' ) . '</p><!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">' . esc_html__( 'Feature Three', 'techsome' ) . '</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph --><p>' . esc_html__( 'Description for the third feature.', 'techsome' ) . '</p><!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->',
			'categories'  => array( 'techsome' ),
		),
		'pricing-table' => array(
			'title'       => __( 'Pricing / CTA', 'techsome' ),
			'description' => __( 'Simple pricing or call-to-action section.', 'techsome' ),
			'content'     => '<!-- wp:group {"layout":{"type":"constrained"},"className":"techsome-pattern-pricing"} -->
			<div class="wp-block-group techsome-pattern-pricing"><!-- wp:heading {"textAlign":"center"} -->
			<h2 class="wp-block-heading has-text-align-center">' . esc_html__( 'Choose Your Plan', 'techsome' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html__( 'One-time purchase or subscription. Get started today.', 'techsome' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Buy now', 'techsome' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group -->',
			'categories'  => array( 'techsome' ),
		),
		'testimonials' => array(
			'title'       => __( 'Testimonials', 'techsome' ),
			'description' => __( 'Customer testimonial quote.', 'techsome' ),
			'content'     => '<!-- wp:quote {"className":"techsome-pattern-testimonial"} -->
			<blockquote class="wp-block-quote techsome-pattern-testimonial"><p>' . esc_html__( 'This product saved us time and our donors love it.', 'techsome' ) . '</p><cite>' . esc_html__( '— Customer Name, Role', 'techsome' ) . '</cite></blockquote>
			<!-- /wp:quote -->',
			'categories'  => array( 'techsome' ),
		),
		'faq' => array(
			'title'       => __( 'FAQ', 'techsome' ),
			'description' => __( 'Frequently asked questions section.', 'techsome' ),
			'content'     => '<!-- wp:heading --><h2 class="wp-block-heading">' . esc_html__( 'Frequently Asked Questions', 'techsome' ) . '</h2><!-- /wp:heading -->

			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">' . esc_html__( 'How do I get started?', 'techsome' ) . '</h3><!-- /wp:heading -->
			<!-- wp:paragraph --><p>' . esc_html__( 'Add your answer here.', 'techsome' ) . '</p><!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">' . esc_html__( 'Do you offer support?', 'techsome' ) . '</h3><!-- /wp:heading -->
			<!-- wp:paragraph --><p>' . esc_html__( 'Add your answer here.', 'techsome' ) . '</p><!-- /wp:paragraph -->',
			'categories'  => array( 'techsome' ),
		),
		'contact-cta' => array(
			'title'       => __( 'Contact CTA', 'techsome' ),
			'description' => __( 'Call-to-action for contact or support.', 'techsome' ),
			'content'     => '<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"techsome-pattern-contact-cta"} -->
			<div class="wp-block-group techsome-pattern-contact-cta" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html__( 'Have questions? We’re here to help.', 'techsome' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact">' . esc_html__( 'Contact us', 'techsome' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group -->',
			'categories'  => array( 'techsome' ),
		),
		'blog-intro' => array(
			'title'       => __( 'Blog Intro', 'techsome' ),
			'description' => __( 'Intro section for blog or resources.', 'techsome' ),
			'content'     => '<!-- wp:heading --><h2 class="wp-block-heading">' . esc_html__( 'Blog &amp; Resources', 'techsome' ) . '</h2><!-- /wp:heading -->
			<!-- wp:paragraph --><p>' . esc_html__( 'Tips, updates, and guides to get the most out of your product.', 'techsome' ) . '</p><!-- /wp:paragraph -->',
			'categories'  => array( 'techsome' ),
		),
	);

	foreach ( $patterns as $name => $args ) {
		register_block_pattern( 'techsome/' . $name, $args );
	}
}
