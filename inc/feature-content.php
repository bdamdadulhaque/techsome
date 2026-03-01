<?php
/**
 * CharityGlow feature page content by slug.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get feature config for a given slug.
 *
 * @param string $slug Page slug: campaign, donation-forms, recurring-donation.
 * @return array|null Config array or null if not found.
 */
function techsome_get_feature_config( $slug ) {
	$features = array(
		'campaign' => array(
			'title'       => __( 'Campaigns', 'techsome' ),
			'subtitle'    => __( 'Set goals, deadlines, and track progress with beautiful campaign pages and progress bars.', 'techsome' ),
			'meta_desc'    => __( 'CharityGlow campaign features: fundraising goals, deadlines, progress bars. Free on WordPress.org. Pro: advanced reports.', 'techsome' ),
			'intro'       => __( 'Create targeted fundraising campaigns with goals and deadlines. Show donors real-time progress and encourage more giving with clear, shareable campaign pages.', 'techsome' ),
			'key_points'  => array(
				array(
					'title' => __( 'Goals & deadlines', 'techsome' ),
					'text'  => __( 'Set a target amount and end date. Campaigns automatically show time left and amount raised.', 'techsome' ),
				),
				array(
					'title' => __( 'Progress bars', 'techsome' ),
					'text'  => __( 'Visual progress bars and percentages keep donors engaged and motivated to help you reach the goal.', 'techsome' ),
				),
				array(
					'title' => __( 'Campaign pages', 'techsome' ),
					'text'  => __( 'Dedicated pages per campaign with shortcodes. Share a single link for each drive.', 'techsome' ),
				),
				array(
					'title' => __( 'Unlimited campaigns (Pro)', 'techsome' ),
					'text'  => __( 'Free version includes core campaign features; Pro unlocks unlimited campaigns and advanced reporting.', 'techsome' ),
				),
			),
			'free_list'   => array(
				__( 'Campaign goals and deadlines', 'techsome' ),
				__( 'Progress bars and campaign shortcodes', 'techsome' ),
				__( 'Basic campaign reporting', 'techsome' ),
			),
			'pro_list'    => array(
				__( 'Unlimited campaigns', 'techsome' ),
				__( 'Advanced campaign reports', 'techsome' ),
				__( 'PDF receipts (Pro)', 'techsome' ),
				__( 'Elementor widget (Pro)', 'techsome' ),
			),
		),
		'donation-forms' => array(
			'title'       => __( 'Donation Forms', 'techsome' ),
			'subtitle'    => __( 'Five beautiful, mobile-responsive form templates. Embed anywhere with shortcodes or blocks.', 'techsome' ),
			'meta_desc'    => __( 'CharityGlow donation forms: Classic, Wizard, Minimal, Card, Inline. Stripe, PayPal. Free on WordPress.org.', 'techsome' ),
			'intro'       => __( 'Accept one-time and recurring donations with forms designed for clarity and conversions. Choose from five templates, customize fields, and embed on any page or post.', 'techsome' ),
			'key_points'  => array(
				array(
					'title' => __( '5 form templates', 'techsome' ),
					'text'  => __( 'Classic, Wizard, Minimal, Card, and Inline. Each is mobile-responsive and easy to customize.', 'techsome' ),
				),
				array(
					'title' => __( 'Shortcodes & block', 'techsome' ),
					'text'  => __( 'Use [charityglow_form] or the CharityGlow block to place a form anywhere. No coding required.', 'techsome' ),
				),
				array(
					'title' => __( 'Stripe & PayPal', 'techsome' ),
					'text'  => __( 'Connect your Stripe or PayPal account. Support for one-time and recurring payments out of the box.', 'techsome' ),
				),
				array(
					'title' => __( 'Elementor widget (Pro)', 'techsome' ),
					'text'  => __( 'Pro adds an Elementor widget so you can drag and drop donation forms into Elementor-built pages.', 'techsome' ),
				),
			),
			'free_list'   => array(
				__( '5 form templates (Classic, Wizard, Minimal, Card, Inline)', 'techsome' ),
				__( 'Shortcodes and block', 'techsome' ),
				__( 'Stripe & PayPal', 'techsome' ),
				__( 'Mobile-responsive', 'techsome' ),
			),
			'pro_list'    => array(
				__( 'Elementor widget', 'techsome' ),
				__( 'PDF receipts', 'techsome' ),
				__( 'Advanced reporting', 'techsome' ),
			),
		),
		'recurring-donation' => array(
			'title'       => __( 'Recurring Donations', 'techsome' ),
			'subtitle'    => __( 'Let supporters give monthly or annually. Recurring revenue helps nonprofits plan and grow.', 'techsome' ),
			'meta_desc'    => __( 'CharityGlow recurring donations: monthly and annual giving with Stripe and PayPal. Free on WordPress.org.', 'techsome' ),
			'intro'       => __( 'Enable recurring (subscription) giving so donors can contribute monthly or annually. Reduce one-time friction and build predictable income for your cause.', 'techsome' ),
			'key_points'  => array(
				array(
					'title' => __( 'Monthly & annual', 'techsome' ),
					'text'  => __( 'Donors choose one-time or recurring. Recurring options work with Stripe and PayPal.', 'techsome' ),
				),
				array(
					'title' => __( 'Donor management', 'techsome' ),
					'text'  => __( 'View donor history, lifetime value, and recurring status in the CharityGlow dashboard.', 'techsome' ),
				),
				array(
					'title' => __( 'Flexible amounts', 'techsome' ),
					'text'  => __( 'Preset amounts or custom. Let donors set their own recurring amount.', 'techsome' ),
				),
				array(
					'title' => __( 'PDF receipts (Pro)', 'techsome' ),
					'text'  => __( 'Pro sends automatic PDF receipts for recurring and one-time donations.', 'techsome' ),
				),
			),
			'free_list'   => array(
				__( 'Recurring (monthly/annual) option on forms', 'techsome' ),
				__( 'Stripe & PayPal subscription support', 'techsome' ),
				__( 'Donor history and basic reporting', 'techsome' ),
			),
			'pro_list'    => array(
				__( 'PDF receipts for donations', 'techsome' ),
				__( 'Advanced campaign reports', 'techsome' ),
				__( 'Unlimited sites and priority support', 'techsome' ),
			),
		),
	);

	return isset( $features[ $slug ] ) ? $features[ $slug ] : null;
}

/**
 * Map feature template file to config slug for meta description.
 *
 * @return array<string, string> Template filename => slug.
 */
function techsome_feature_template_slugs() {
	return array(
		'template-campaign-features.php'         => 'campaign',
		'template-donation-forms-features.php'   => 'donation-forms',
		'template-recurring-donation-features.php' => 'recurring-donation',
	);
}

/**
 * Output meta description for feature pages (SEO).
 */
function techsome_feature_meta_description() {
	if ( ! is_singular( 'page' ) ) {
		return;
	}
	$page_id  = get_queried_object_id();
	$template = get_post_meta( $page_id, '_wp_page_template', true );
	$slugs    = techsome_feature_template_slugs();
	if ( ! isset( $slugs[ $template ] ) ) {
		return;
	}
	$slug   = $slugs[ $template ];
	$config = techsome_get_feature_config( $slug );
	if ( ! $config || empty( $config['meta_desc'] ) ) {
		return;
	}
	echo '<meta name="description" content="' . esc_attr( $config['meta_desc'] ) . '">' . "\n";
}
add_action( 'wp_head', 'techsome_feature_meta_description', 1 );
