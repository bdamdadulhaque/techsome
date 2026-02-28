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
 * [techsome_pricing_table] – Free, Pro, Pro Plus pricing table (before checkout).
 * Attributes: title, subtitle, free_title, free_price, pro_title, pro_price, pro_plus_title, pro_plus_price, pro_button, pro_url, pro_plus_button, pro_plus_url, free_features, pro_features, pro_plus_features, featured (free|pro|pro_plus).
 */
add_shortcode( 'techsome_pricing_table', 'techsome_shortcode_pricing_table' );
function techsome_shortcode_pricing_table( $atts ) {
	$plugin_url = techsome_get_plugin_checkout_url();
	$atts = shortcode_atts( array(
		'title'            => __( 'Choose Your Plan', 'techsome' ),
		'subtitle'         => __( 'Start free or unlock more with Pro and Pro Plus.', 'techsome' ),
		'free_title'       => __( 'Free', 'techsome' ),
		'free_price'       => __( '$0', 'techsome' ),
		'free_price_note'  => __( 'forever', 'techsome' ),
		'pro_title'        => __( 'Pro', 'techsome' ),
		'pro_price'        => __( 'From $99/year', 'techsome' ),
		'pro_price_note'   => '',
		'pro_button'       => __( 'Get Pro', 'techsome' ),
		'pro_url'          => $plugin_url,
		'pro_plus_title'   => __( 'Pro Plus', 'techsome' ),
		'pro_plus_price'   => __( 'From $199/year', 'techsome' ),
		'pro_plus_price_note' => '',
		'pro_plus_button'  => __( 'Get Pro Plus', 'techsome' ),
		'pro_plus_url'     => $plugin_url,
		'free_features'    => __( 'Core donation forms,Basic campaigns,Email support,1 site', 'techsome' ),
		'pro_features'     => __( 'Everything in Free,Unlimited campaigns,Priority support,Unlimited sites,Advanced reporting', 'techsome' ),
		'pro_plus_features'=> __( 'Everything in Pro,Dedicated support,Custom integrations,White-label option', 'techsome' ),
		'featured'         => 'pro',
	), $atts, 'techsome_pricing_table' );

	$free_features   = array_filter( array_map( 'trim', explode( ',', $atts['free_features'] ) ) );
	$pro_features    = array_filter( array_map( 'trim', explode( ',', $atts['pro_features'] ) ) );
	$pro_plus_features = array_filter( array_map( 'trim', explode( ',', $atts['pro_plus_features'] ) ) );

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
					<?php if ( ! empty( $atts['free_price_note'] ) ) : ?>
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
			<div class="techsome-pricing-plan techsome-pricing-plan--pro-plus<?php echo 'pro_plus' === $atts['featured'] ? ' techsome-pricing-plan--featured' : ''; ?>"<?php echo 'pro_plus' === $atts['featured'] ? ' data-badge="' . esc_attr__( 'Popular', 'techsome' ) . '"' : ''; ?>>
				<div class="techsome-pricing-plan__head">
					<h3 class="techsome-pricing-plan__name"><?php echo esc_html( $atts['pro_plus_title'] ); ?></h3>
					<p class="techsome-pricing-plan__price"><?php echo esc_html( $atts['pro_plus_price'] ); ?></p>
					<?php if ( $atts['pro_plus_price_note'] ) : ?>
						<p class="techsome-pricing-plan__price-note"><?php echo esc_html( $atts['pro_plus_price_note'] ); ?></p>
					<?php endif; ?>
				</div>
				<ul class="techsome-pricing-plan__features">
					<?php foreach ( $pro_plus_features as $f ) : ?>
						<li><?php echo esc_html( $f ); ?></li>
					<?php endforeach; ?>
				</ul>
				<div class="techsome-pricing-plan__foot">
					<a class="techsome-btn techsome-btn--primary" href="<?php echo esc_url( $atts['pro_plus_url'] ); ?>"><?php echo esc_html( $atts['pro_plus_button'] ); ?></a>
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

/**
 * [techsome_contact_form] – contact form with subject dropdown. Sends via wp_mail.
 */
add_shortcode( 'techsome_contact_form', 'techsome_shortcode_contact_form' );
function techsome_shortcode_contact_form( $atts ) {
	$sent = false;
	$error = '';
	if ( isset( $_POST['techsome_contact_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['techsome_contact_nonce'] ) ), 'techsome_contact' ) ) {
		$name    = isset( $_POST['techsome_contact_name'] ) ? sanitize_text_field( wp_unslash( $_POST['techsome_contact_name'] ) ) : '';
		$email   = isset( $_POST['techsome_contact_email'] ) ? sanitize_email( wp_unslash( $_POST['techsome_contact_email'] ) ) : '';
		$subject = isset( $_POST['techsome_contact_subject'] ) ? sanitize_text_field( wp_unslash( $_POST['techsome_contact_subject'] ) ) : '';
		$message = isset( $_POST['techsome_contact_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['techsome_contact_message'] ) ) : '';
		if ( $name && $email && is_email( $email ) && $message ) {
			$to      = get_option( 'admin_email' );
			$subj    = sprintf( '[%1$s] %2$s', get_bloginfo( 'name' ), $subject ? $subject : __( 'Contact form', 'techsome' ) );
			$body    = sprintf( "Name: %s\nEmail: %s\nSubject: %s\n\nMessage:\n%s", $name, $email, $subject, $message );
			$headers = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $email . '>' );
			$sent    = wp_mail( $to, $subj, $body, $headers );
			if ( ! $sent ) {
				$error = __( 'Could not send. Please try again or email us directly.', 'techsome' );
			}
		} else {
			$error = __( 'Please fill all required fields and use a valid email.', 'techsome' );
		}
	}

	$subjects = array(
		''                           => __( '— Select subject —', 'techsome' ),
		__( 'General inquiry', 'techsome' ) => __( 'General inquiry', 'techsome' ),
		__( 'Support', 'techsome' )         => __( 'Support', 'techsome' ),
		__( 'Sales', 'techsome' )            => __( 'Sales', 'techsome' ),
		__( 'Partnership', 'techsome' )      => __( 'Partnership', 'techsome' ),
		__( 'Other', 'techsome' )            => __( 'Other', 'techsome' ),
	);

	ob_start();
	if ( $sent ) {
		echo '<div class="techsome-contact-form__success" role="alert">' . esc_html__( 'Thank you. We\'ll get back to you soon.', 'techsome' ) . '</div>';
		return ob_get_clean();
	}
	?>
	<form class="techsome-contact-form" method="post" action="">
		<?php wp_nonce_field( 'techsome_contact', 'techsome_contact_nonce' ); ?>
		<?php if ( $error ) : ?>
			<p class="techsome-contact-form__error" role="alert"><?php echo esc_html( $error ); ?></p>
		<?php endif; ?>
		<p class="techsome-contact-form__row">
			<label for="techsome_contact_name"><?php esc_html_e( 'Your name', 'techsome' ); ?> <span class="required">*</span></label>
			<input type="text" id="techsome_contact_name" name="techsome_contact_name" required value="<?php echo esc_attr( isset( $_POST['techsome_contact_name'] ) ? sanitize_text_field( wp_unslash( $_POST['techsome_contact_name'] ) ) : '' ); ?>" />
		</p>
		<p class="techsome-contact-form__row">
			<label for="techsome_contact_email"><?php esc_html_e( 'Email', 'techsome' ); ?> <span class="required">*</span></label>
			<input type="email" id="techsome_contact_email" name="techsome_contact_email" required value="<?php echo esc_attr( isset( $_POST['techsome_contact_email'] ) ? sanitize_email( wp_unslash( $_POST['techsome_contact_email'] ) ) : '' ); ?>" />
		</p>
		<p class="techsome-contact-form__row">
			<label for="techsome_contact_subject"><?php esc_html_e( 'Subject', 'techsome' ); ?></label>
			<select id="techsome_contact_subject" name="techsome_contact_subject">
				<?php foreach ( $subjects as $value => $label ) : ?>
					<option value="<?php echo esc_attr( $value ); ?>" <?php selected( isset( $_POST['techsome_contact_subject'] ) ? sanitize_text_field( wp_unslash( $_POST['techsome_contact_subject'] ) ) : '', $value ); ?>><?php echo esc_html( $label ); ?></option>
				<?php endforeach; ?>
			</select>
		</p>
		<p class="techsome-contact-form__row">
			<label for="techsome_contact_message"><?php esc_html_e( 'Message', 'techsome' ); ?> <span class="required">*</span></label>
			<textarea id="techsome_contact_message" name="techsome_contact_message" rows="5" required><?php echo esc_textarea( isset( $_POST['techsome_contact_message'] ) ? wp_unslash( $_POST['techsome_contact_message'] ) : '' ); ?></textarea>
		</p>
		<p class="techsome-contact-form__submit">
			<button type="submit" class="techsome-btn techsome-btn--primary"><?php esc_html_e( 'Send message', 'techsome' ); ?></button>
		</p>
	</form>
	<?php
	return ob_get_clean();
}
