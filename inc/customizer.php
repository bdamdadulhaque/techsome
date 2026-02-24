<?php
/**
 * Theme Customizer.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'customize_register', 'techsome_customize_register' );
function techsome_customize_register( $wp_customize ) {

	// --- Colors ---
	$wp_customize->add_section(
		'techsome_colors',
		array(
			'title'    => __( 'Colors', 'techsome' ),
			'priority' => 30,
		)
	);
	$wp_customize->add_setting(
		'techsome_primary_color',
		array(
			'default'           => '#2563eb',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'techsome_primary_color',
			array(
				'label'   => __( 'Primary Color', 'techsome' ),
				'section' => 'techsome_colors',
			)
		)
	);
	$wp_customize->add_setting(
		'techsome_secondary_color',
		array(
			'default'           => '#0f172a',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'techsome_secondary_color',
			array(
				'label'   => __( 'Secondary Color', 'techsome' ),
				'section' => 'techsome_colors',
			)
		)
	);

	// --- Typography ---
	$wp_customize->add_section(
		'techsome_typography',
		array(
			'title'    => __( 'Typography', 'techsome' ),
			'priority' => 35,
		)
	);
	$wp_customize->add_setting(
		'techsome_font_body',
		array(
			'default'           => 'system',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_font_body',
		array(
			'type'    => 'select',
			'label'   => __( 'Body Font', 'techsome' ),
			'section' => 'techsome_typography',
			'choices' => array(
				'system' => __( 'System Default', 'techsome' ),
				'inter'  => __( 'Inter (Google Fonts)', 'techsome' ),
				'open-sans' => __( 'Open Sans', 'techsome' ),
				'lato'   => __( 'Lato', 'techsome' ),
			),
		)
	);
	$wp_customize->add_setting(
		'techsome_font_heading',
		array(
			'default'           => 'system',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_font_heading',
		array(
			'type'    => 'select',
			'label'   => __( 'Heading Font', 'techsome' ),
			'section' => 'techsome_typography',
			'choices' => array(
				'system' => __( 'System Default', 'techsome' ),
				'poppins' => __( 'Poppins (Google Fonts)', 'techsome' ),
				'open-sans' => __( 'Open Sans', 'techsome' ),
				'lato'   => __( 'Lato', 'techsome' ),
			),
		)
	);

	// --- Layout ---
	$wp_customize->add_section(
		'techsome_layout',
		array(
			'title'    => __( 'Layout', 'techsome' ),
			'priority' => 40,
		)
	);
	$wp_customize->add_setting(
		'techsome_container_width',
		array(
			'default'           => 1200,
			'sanitize_callback' => 'absint',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_container_width',
		array(
			'type'        => 'number',
			'label'       => __( 'Container Max Width (px)', 'techsome' ),
			'section'     => 'techsome_layout',
			'input_attrs' => array( 'min' => 960, 'max' => 1400, 'step' => 20 ),
		)
	);
	$wp_customize->add_setting(
		'techsome_blog_sidebar',
		array(
			'default'           => true,
			'sanitize_callback' => 'wp_validate_boolean',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_blog_sidebar',
		array(
			'type'    => 'checkbox',
			'label'   => __( 'Show Sidebar on Blog / Archives', 'techsome' ),
			'section' => 'techsome_layout',
		)
	);

	// --- Header ---
	$wp_customize->add_section(
		'techsome_header',
		array(
			'title'    => __( 'Header', 'techsome' ),
			'priority' => 45,
		)
	);
	$wp_customize->add_setting(
		'techsome_header_layout',
		array(
			'default'           => 'classic',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_header_layout',
		array(
			'type'    => 'select',
			'label'   => __( 'Header Layout', 'techsome' ),
			'section' => 'techsome_header',
			'choices' => array(
				'classic'   => __( 'Classic (Logo Left, Menu Right)', 'techsome' ),
				'centered'  => __( 'Centered (Logo Center, Split)', 'techsome' ),
			),
		)
	);
	$wp_customize->add_setting(
		'techsome_sticky_header',
		array(
			'default'           => true,
			'sanitize_callback' => 'wp_validate_boolean',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_sticky_header',
		array(
			'type'    => 'checkbox',
			'label'   => __( 'Sticky Header', 'techsome' ),
			'section' => 'techsome_header',
		)
	);
	$wp_customize->add_setting(
		'techsome_header_cta_text',
		array(
			'default'           => __( 'Get CharityGlow', 'techsome' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_header_cta_text',
		array(
			'type'    => 'text',
			'label'   => __( 'Header CTA Button Text', 'techsome' ),
			'section' => 'techsome_header',
		)
	);
	$wp_customize->add_setting(
		'techsome_header_cta_url',
		array(
			'default'           => '#',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_header_cta_url',
		array(
			'type'    => 'url',
			'label'   => __( 'Header CTA Button URL', 'techsome' ),
			'section' => 'techsome_header',
		)
	);

	// --- Footer ---
	$wp_customize->add_section(
		'techsome_footer',
		array(
			'title'    => __( 'Footer', 'techsome' ),
			'priority' => 50,
		)
	);
	$wp_customize->add_setting(
		'techsome_footer_layout',
		array(
			'default'           => 'columns',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_footer_layout',
		array(
			'type'    => 'select',
			'label'   => __( 'Footer Layout', 'techsome' ),
			'section' => 'techsome_footer',
			'choices' => array(
				'minimal'  => __( 'Minimal (Logo + Copyright)', 'techsome' ),
				'columns'  => __( 'Multi-column (Widget Areas)', 'techsome' ),
				'extended' => __( 'Extended (Above-footer CTA + Columns)', 'techsome' ),
			),
		)
	);
	$wp_customize->add_setting(
		'techsome_footer_copyright',
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_footer_copyright',
		array(
			'type'        => 'textarea',
			'label'       => __( 'Copyright Text', 'techsome' ),
			'section'     => 'techsome_footer',
			'description' => __( 'Leave empty for default. HTML allowed.', 'techsome' ),
		)
	);

	// --- Social ---
	$wp_customize->add_section(
		'techsome_social',
		array(
			'title'    => __( 'Social Media', 'techsome' ),
			'priority' => 55,
		)
	);
	$networks = array(
		'facebook'  => __( 'Facebook URL', 'techsome' ),
		'twitter'   => __( 'Twitter/X URL', 'techsome' ),
		'instagram' => __( 'Instagram URL', 'techsome' ),
		'linkedin'  => __( 'LinkedIn URL', 'techsome' ),
		'youtube'   => __( 'YouTube URL', 'techsome' ),
	);
	foreach ( $networks as $key => $label ) {
		$wp_customize->add_setting(
			'techsome_social_' . $key,
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport'         => 'refresh',
			)
		);
		$wp_customize->add_control(
			'techsome_social_' . $key,
			array(
				'type'    => 'url',
				'label'   => $label,
				'section' => 'techsome_social',
			)
		);
	}

	// --- Products & Checkout (Freemius) ---
	$wp_customize->add_section(
		'techsome_products',
		array(
			'title'       => __( 'Products & Checkout (Freemius)', 'techsome' ),
			'description' => __( 'Set checkout/pricing URLs for CharityGlow Plugin and Theme. Use your Freemius checkout or pricing page URL so customers can order from your site.', 'techsome' ),
			'priority'    => 22,
		)
	);
	$wp_customize->add_setting(
		'techsome_plugin_checkout_url',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_plugin_checkout_url',
		array(
			'type'        => 'url',
			'label'       => __( 'CharityGlow Plugin – Checkout / Pricing URL', 'techsome' ),
			'section'     => 'techsome_products',
			'description' => __( 'e.g. your Freemius checkout or pricing page for the plugin.', 'techsome' ),
		)
	);
	$wp_customize->add_setting(
		'techsome_theme_checkout_url',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_theme_checkout_url',
		array(
			'type'        => 'url',
			'label'       => __( 'CharityGlow Theme – Checkout / Pricing URL', 'techsome' ),
			'section'     => 'techsome_products',
			'description' => __( 'e.g. your Freemius or sales page for the theme.', 'techsome' ),
		)
	);

	// --- Homepage ---
	$wp_customize->add_section(
		'techsome_homepage',
		array(
			'title'    => __( 'Homepage', 'techsome' ),
			'priority' => 20,
		)
	);
	$wp_customize->add_setting(
		'techsome_homepage_layout',
		array(
			'default'           => 'classic',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_homepage_layout',
		array(
			'type'        => 'select',
			'label'       => __( 'Homepage Layout', 'techsome' ),
			'section'     => 'techsome_homepage',
			'description' => __( 'Choose a front page style. Use a static page as homepage in Settings → Reading.', 'techsome' ),
			'choices'     => array(
				'classic' => __( 'Classic (Hero + Features)', 'techsome' ),
				'product' => __( 'Product-focused (Plugin & Theme)', 'techsome' ),
				'split'   => __( 'Split (Plugin | Theme)', 'techsome' ),
			),
		)
	);

	// --- Blog ---
	$wp_customize->add_section(
		'techsome_blog',
		array(
			'title'    => __( 'Blog', 'techsome' ),
			'priority' => 60,
		)
	);
	$wp_customize->add_setting(
		'techsome_blog_layout',
		array(
			'default'           => 'grid',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_blog_layout',
		array(
			'type'    => 'select',
			'label'   => __( 'Blog Archive Layout', 'techsome' ),
			'section' => 'techsome_blog',
			'choices' => array(
				'list'    => __( 'List', 'techsome' ),
				'grid'    => __( 'Grid', 'techsome' ),
				'masonry' => __( 'Masonry', 'techsome' ),
			),
		)
	);
	$wp_customize->add_setting(
		'techsome_single_post_style',
		array(
			'default'           => 'classic',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'techsome_single_post_style',
		array(
			'type'    => 'select',
			'label'   => __( 'Single Post Style', 'techsome' ),
			'section' => 'techsome_blog',
			'choices' => array(
				'classic' => __( 'Classic', 'techsome' ),
				'modern'  => __( 'Modern (Featured Image Hero)', 'techsome' ),
			),
		)
	);
}
