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

/**
 * [techsome_pricing_table] – Free vs Pro pricing table (before checkout).
 * Attributes: title, subtitle, free_title, free_price, free_price_note, pro_title, pro_price, pro_price_note, pro_button, pro_url (default: plugin checkout), free_features (comma-separated), pro_features (comma-separated), featured (free|pro).
 */
add_shortcode( 'techsome_pricing_table', 'techsome_shortcode_pricing_table' );
function techsome_shortcode_pricing_table( $atts ) {
	$atts = shortcode_atts( array(
		'title'          => __( 'Choose Your Plan', 'techsome' ),
		'subtitle'       => __( 'Start free or unlock all features with Pro.', 'techsome' ),
		'free_title'     => __( 'Free', 'techsome' ),
		'free_price'     => __( '$0', 'techsome' ),
		'free_price_note' => __( 'forever', 'techsome' ),
		'pro_title'      => __( 'Pro', 'techsome' ),
		'pro_price'      => __( 'From $99/year', 'techsome' ),
		'pro_price_note' => '',
		'pro_button'     => __( 'Get Pro', 'techsome' ),
		'pro_url'        => techsome_get_plugin_checkout_url(),
		'free_features'  => __( 'Core donation forms,Basic campaigns,Email support,1 site', 'techsome' ),
		'pro_features'   => __( 'Everything in Free,Unlimited campaigns,Priority support,Unlimited sites,Advanced reporting', 'techsome' ),
		'featured'       => 'pro',
	), $atts, 'techsome_pricing_table' );

	$free_features = array_filter( array_map( 'trim', explode( ',', $atts['free_features'] ) ) );
	$pro_features = array_filter( array_map( 'trim', explode( ',', $atts['pro_features'] ) ) );

	ob_start();
	?>
	<div class="techsome-pricing">
		<?php if ( $atts['title'] ) : ?>
			<h2 class="techsome-pricing__title"><?php echo esc_html( $atts['title'] ); ?></h2>
		<?php endif; ?>
		<?php if ( $atts['subtitle'] ) : ?>
			<p class="techsome-pricing__subtitle"><?php echo esc_html( $atts['subtitle'] ); ?></p>
		<?php endif; ?>
		<div class="techsome-pricing-table">
			<div class="techsome-pricing-plan techsome-pricing-plan--free<?php echo 'free' === $atts['featured'] ? ' techsome-pricing-plan--featured' : ''; ?>"<?php echo 'free' === $atts['featured'] ? ' data-badge="' . esc_attr__( 'Popular', 'techsome' ) . '"' : ''; ?>>
				<div class="techsome-pricing-plan__head">
					<h3 class="techsome-pricing-plan__name"><?php echo esc_html( $atts['free_title'] ); ?></h3>
					<p class="techsome-pricing-plan__price"><?php echo esc_html( $atts['free_price'] ); ?></p>
					<?php if ( $atts['free_price_note'] ) : ?>
						<p class="techsome-pricing-plan__price-note"><?php echo esc_html( $atts['free_price_note'] ); ?></p>
					<?php endif; ?>
				</div>
				<ul class="techsome-pricing-plan__features">
					<?php foreach ( $free_features as $f ) : ?>
						<li><?php echo esc_html( $f ); ?></li>
					<?php endforeach; ?>
				</ul>
				<div class="techsome-pricing-plan__foot">
					<a class="techsome-btn techsome-btn--primary" href="<?php echo esc_url( techsome_mod( 'techsome_header_cta_url', '#' ) ); ?>"><?php esc_html_e( 'Download Free', 'techsome' ); ?></a>
				</div>
			</div>
			<div class="techsome-pricing-plan techsome-pricing-plan--pro<?php echo 'pro' === $atts['featured'] ? ' techsome-pricing-plan--featured' : ''; ?>"<?php echo 'pro' === $atts['featured'] ? ' data-badge="' . esc_attr__( 'Popular', 'techsome' ) . '"' : ''; ?>>
				<div class="techsome-pricing-plan__head">
					<h3 class="techsome-pricing-plan__name"><?php echo esc_html( $atts['pro_title'] ); ?></h3>
					<p class="techsome-pricing-plan__price"><?php echo esc_html( $atts['pro_price'] ); ?></p>
					<?php if ( $atts['pro_price_note'] ) : ?>
						<p class="techsome-pricing-plan__price-note"><?php echo esc_html( $atts['pro_price_note'] ); ?></p>
					<?php endif; ?>
				</div>
				<ul class="techsome-pricing-plan__features">
					<?php foreach ( $pro_features as $f ) : ?>
						<li><?php echo esc_html( $f ); ?></li>
					<?php endforeach; ?>
				</ul>
				<div class="techsome-pricing-plan__foot">
					<a class="techsome-btn techsome-btn--primary" href="<?php echo esc_url( $atts['pro_url'] ); ?>"><?php echo esc_html( $atts['pro_button'] ); ?></a>
				</div>
			</div>
		</div>
	</div>
	<?php
	return ob_get_clean();
}

/**
 * [techsome_service_card] – one service with title, description, price, CTA.
 */
add_shortcode( 'techsome_service_card', 'techsome_shortcode_service_card' );
function techsome_shortcode_service_card( $atts ) {
	$atts = shortcode_atts( array(
		'title'       => '',
		'description' => '',
		'price'       => '',
		'price_note'  => '',
		'button_text' => __( 'Get started', 'techsome' ),
		'button_url'  => '#',
		'icon'        => 'settings',
	), $atts, 'techsome_service_card' );

	if ( empty( $atts['title'] ) ) {
		return '';
	}

	$icons = array(
		'settings' => '⚙',
		'install'  => '📦',
		'customize' => '🎨',
		'support'  => '🛟',
		'ongoing'  => '🔄',
	);
	$icon  = isset( $icons[ $atts['icon'] ] ) ? $icons[ $atts['icon'] ] : $icons['settings'];

	ob_start();
	?>
	<div class="techsome-service-card">
		<div class="techsome-service-card__icon" aria-hidden="true"><?php echo esc_html( $icon ); ?></div>
		<h3 class="techsome-service-card__title"><?php echo esc_html( $atts['title'] ); ?></h3>
		<?php if ( $atts['description'] ) : ?>
			<p class="techsome-service-card__desc"><?php echo esc_html( $atts['description'] ); ?></p>
		<?php endif; ?>
		<?php if ( $atts['price'] ) : ?>
			<p class="techsome-service-card__price"><?php echo esc_html( $atts['price'] ); ?><?php if ( $atts['price_note'] ) : ?><span class="techsome-service-card__price-note"><?php echo esc_html( $atts['price_note'] ); ?></span><?php endif; ?></p>
		<?php endif; ?>
		<div class="techsome-service-card__cta">
			<a class="techsome-btn techsome-btn--primary" href="<?php echo esc_url( $atts['button_url'] ); ?>"><?php echo esc_html( $atts['button_text'] ); ?></a>
		</div>
	</div>
	<?php
	return ob_get_clean();
}

/**
 * [techsome_services] – wrapper for service cards (grid). Use with [techsome_service_card] inside.
 */
add_shortcode( 'techsome_services', 'techsome_shortcode_services_wrapper' );
function techsome_shortcode_services_wrapper( $atts, $content = null ) {
	$atts = shortcode_atts( array(
		'title'    => __( 'Our Services', 'techsome' ),
		'subtitle' => __( 'Professional setup, customization, and ongoing support for CharityGlow.', 'techsome' ),
	), $atts, 'techsome_services' );
	$content = do_shortcode( $content );
	return '<div class="techsome-services"><h2 class="techsome-services__title">' . esc_html( $atts['title'] ) . '</h2><p class="techsome-services__subtitle">' . esc_html( $atts['subtitle'] ) . '</p><div class="techsome-service-cards">' . $content . '</div></div>';
}
