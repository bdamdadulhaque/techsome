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
		'pricing-free-pro' => array(
			'title'       => __( 'Pricing Table – Free, Pro & Pro Plus', 'techsome' ),
			'description' => __( 'Three-column pricing table with features and CTA. Edit button links to your Freemius checkout.', 'techsome' ),
			'content'     => '<!-- wp:html -->
			<div class="techsome-pricing">
				<h2 class="techsome-pricing__title">' . esc_html__( 'Choose Your Plan', 'techsome' ) . '</h2>
				<p class="techsome-pricing__subtitle">' . esc_html__( 'Start free or unlock more with Pro and Pro Plus.', 'techsome' ) . '</p>
				<div class="techsome-pricing-table">
					<div class="techsome-pricing-plan techsome-pricing-plan--free">
						<div class="techsome-pricing-plan__head">
							<h3 class="techsome-pricing-plan__name">' . esc_html__( 'Free', 'techsome' ) . '</h3>
							<p class="techsome-pricing-plan__price">$0</p>
							<p class="techsome-pricing-plan__price-note">' . esc_html__( 'forever', 'techsome' ) . '</p>
						</div>
						<ul class="techsome-pricing-plan__features">
							<li>' . esc_html__( 'Core donation forms', 'techsome' ) . '</li>
							<li>' . esc_html__( 'Basic campaigns', 'techsome' ) . '</li>
							<li>' . esc_html__( 'Email support', 'techsome' ) . '</li>
							<li>' . esc_html__( '1 site', 'techsome' ) . '</li>
						</ul>
						<div class="techsome-pricing-plan__foot">
							<a class="techsome-btn techsome-btn--primary" href="#">' . esc_html__( 'Download Free', 'techsome' ) . '</a>
						</div>
					</div>
					<div class="techsome-pricing-plan techsome-pricing-plan--pro techsome-pricing-plan--featured" data-badge="' . esc_attr__( 'Popular', 'techsome' ) . '">
						<div class="techsome-pricing-plan__head">
							<h3 class="techsome-pricing-plan__name">' . esc_html__( 'Pro', 'techsome' ) . '</h3>
							<p class="techsome-pricing-plan__price">' . esc_html__( 'From $99/year', 'techsome' ) . '</p>
						</div>
						<ul class="techsome-pricing-plan__features">
							<li>' . esc_html__( 'Everything in Free', 'techsome' ) . '</li>
							<li>' . esc_html__( 'Unlimited campaigns', 'techsome' ) . '</li>
							<li>' . esc_html__( 'Priority support', 'techsome' ) . '</li>
							<li>' . esc_html__( 'Unlimited sites', 'techsome' ) . '</li>
							<li>' . esc_html__( 'Advanced reporting', 'techsome' ) . '</li>
						</ul>
						<div class="techsome-pricing-plan__foot">
							<a class="techsome-btn techsome-btn--primary" href="#">' . esc_html__( 'Get Pro', 'techsome' ) . '</a>
						</div>
					</div>
					<div class="techsome-pricing-plan techsome-pricing-plan--pro-plus">
						<div class="techsome-pricing-plan__head">
							<h3 class="techsome-pricing-plan__name">' . esc_html__( 'Pro Plus', 'techsome' ) . '</h3>
							<p class="techsome-pricing-plan__price">' . esc_html__( 'From $199/year', 'techsome' ) . '</p>
						</div>
						<ul class="techsome-pricing-plan__features">
							<li>' . esc_html__( 'Everything in Pro', 'techsome' ) . '</li>
							<li>' . esc_html__( 'Dedicated support', 'techsome' ) . '</li>
							<li>' . esc_html__( 'Custom integrations', 'techsome' ) . '</li>
							<li>' . esc_html__( 'White-label option', 'techsome' ) . '</li>
						</ul>
						<div class="techsome-pricing-plan__foot">
							<a class="techsome-btn techsome-btn--primary" href="#">' . esc_html__( 'Get Pro Plus', 'techsome' ) . '</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /wp:html -->',
			'categories'  => array( 'techsome' ),
		),
		'service-pricing-cards' => array(
			'title'       => __( 'Service Pricing Cards', 'techsome' ),
			'description' => __( 'Three service cards: Installation, Customization, Ongoing Service. Edit titles, prices, and links.', 'techsome' ),
			'content'     => '<!-- wp:shortcode -->
			[techsome_services title="' . esc_attr__( 'Our Services', 'techsome' ) . '" subtitle="' . esc_attr__( 'Professional setup, customization, and ongoing support for CharityGlow.', 'techsome' ) . '"][techsome_service_card title="' . esc_attr__( 'Installation &amp; Setup', 'techsome' ) . '" description="' . esc_attr__( 'We install CharityGlow on your site, configure settings, and ensure everything works with your theme.', 'techsome' ) . '" price="' . esc_attr__( 'From $99', 'techsome' ) . '" button_text="' . esc_attr__( 'Get started', 'techsome' ) . '" button_url="#contact" icon="install"][techsome_service_card title="' . esc_attr__( 'Customization Service', 'techsome' ) . '" description="' . esc_attr__( 'Custom forms, branding, and workflows tailored to your organization.', 'techsome' ) . '" price="' . esc_attr__( 'From $199', 'techsome' ) . '" button_text="' . esc_attr__( 'Get started', 'techsome' ) . '" button_url="#contact" icon="customize"][techsome_service_card title="' . esc_attr__( 'Ongoing Service', 'techsome' ) . '" description="' . esc_attr__( 'Regular updates, backups, and priority support so you can focus on fundraising.', 'techsome' ) . '" price="' . esc_attr__( 'From $49/mo', 'techsome' ) . '" button_text="' . esc_attr__( 'Get started', 'techsome' ) . '" button_url="#contact" icon="ongoing"][/techsome_services]
			<!-- /wp:shortcode -->',
			'categories'  => array( 'techsome' ),
		),
	);

	foreach ( $patterns as $name => $args ) {
		register_block_pattern( 'techsome/' . $name, $args );
	}
}
