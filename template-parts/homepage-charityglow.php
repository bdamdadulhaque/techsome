<?php
/**
 * Homepage – CharityGlow plugin focus (premium donation-plugin style).
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$plugin_url   = techsome_get_plugin_checkout_url();
$wp_org_url   = techsome_get_plugin_wp_org_url();
$features_url = techsome_mod( 'techsome_features_page_url', home_url( '/features/' ) );
$demo_url     = techsome_mod( 'techsome_demo_page_url', home_url( '/demo/' ) );
$docs_url     = techsome_mod( 'techsome_docs_page_url', home_url( '/docs/' ) );
$pricing_url  = techsome_mod( 'techsome_pricing_page_url', home_url( '/pricing/' ) );
$contact_url  = techsome_mod( 'techsome_contact_page_url', home_url( '/contact/' ) );
$free_setup_url = techsome_mod( 'techsome_free_setup_page_url', home_url( '/contact/' ) );
?>
<div class="techsome-home techsome-home--charityglow">
	<!-- 1. Hero -->
	<section class="cg-hero" aria-labelledby="cg-hero-title">
		<div class="cg-hero__bg" aria-hidden="true"></div>
		<div class="techsome-container">
			<p class="cg-hero__badge"><?php esc_html_e( 'Free on WordPress.org', 'techsome' ); ?></p>
			<h1 id="cg-hero-title" class="cg-hero__title">
				<?php esc_html_e( 'The Simple WordPress Donation Plugin for Nonprofits & Charities', 'techsome' ); ?>
			</h1>
			<p class="cg-hero__subtitle">
				<?php esc_html_e( 'Accept one-time and recurring donations securely with Stripe, PayPal, and more. Create campaigns, manage donors, and track your impact—all from your WordPress site.', 'techsome' ); ?>
			</p>
			<div class="cg-hero__actions">
				<a class="techsome-btn techsome-btn--primary techsome-btn--lg cg-hero__btn-primary" href="<?php echo esc_url( $features_url ); ?>">
					<?php esc_html_e( 'See Features', 'techsome' ); ?>
				</a>
				<a class="techsome-btn techsome-btn--outline techsome-btn--lg" href="<?php echo esc_url( $demo_url ); ?>">
					<?php esc_html_e( 'View Live Demo', 'techsome' ); ?>
				</a>
			</div>
			<div class="cg-hero__mockup" aria-hidden="true">
				<div class="cg-hero__mockup-browser">
					<div class="cg-hero__mockup-bar">
						<span></span><span></span><span></span>
					</div>
					<div class="cg-hero__mockup-body">
						<div class="cg-hero__mockup-form">
							<div class="cg-hero__mockup-line"></div>
							<div class="cg-hero__mockup-line cg-hero__mockup-line--short"></div>
							<div class="cg-hero__mockup-line cg-hero__mockup-line--btn"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Trust strip -->
	<section class="cg-trust-strip" aria-label="<?php esc_attr_e( 'Trust and security', 'techsome' ); ?>">
		<div class="techsome-container">
			<p class="cg-trust-strip__lead"><?php esc_html_e( 'Trusted by nonprofits, churches & NGOs worldwide', 'techsome' ); ?></p>
			<div class="cg-trust-strip__stats">
				<span><?php esc_html_e( '25+ Currencies', 'techsome' ); ?></span>
				<span class="cg-trust-strip__dot" aria-hidden="true">·</span>
				<span><?php esc_html_e( '5 Form Templates', 'techsome' ); ?></span>
				<span class="cg-trust-strip__dot" aria-hidden="true">·</span>
				<span><?php esc_html_e( 'Stripe & PayPal', 'techsome' ); ?></span>
			</div>
			<div class="cg-trust-strip__badges">
				<span class="cg-trust-strip__badge"><?php esc_html_e( 'SSL Secure', 'techsome' ); ?></span>
				<span class="cg-trust-strip__badge"><?php esc_html_e( 'GDPR Ready', 'techsome' ); ?></span>
				<span class="cg-trust-strip__badge"><?php esc_html_e( 'PCI Compliant', 'techsome' ); ?></span>
			</div>
		</div>
	</section>

	<!-- 2. Benefits -->
	<section class="cg-benefits" aria-labelledby="cg-benefits-title">
		<div class="techsome-container">
			<p class="cg-section__label"><?php esc_html_e( 'Why CharityGlow', 'techsome' ); ?></p>
			<h2 id="cg-benefits-title" class="cg-section__title">
				<?php esc_html_e( 'Everything You Need to Grow Your Online Fundraising', 'techsome' ); ?>
			</h2>
			<div class="cg-benefits__grid">
				<div class="cg-benefits__item">
					<div class="cg-benefits__icon-wrap"><span class="cg-benefits__icon" aria-hidden="true">🎯</span></div>
					<h3 class="cg-benefits__heading"><?php esc_html_e( 'Campaigns', 'techsome' ); ?></h3>
					<p class="cg-benefits__text"><?php esc_html_e( 'Set goals and deadlines. Track progress with beautiful bars.', 'techsome' ); ?></p>
				</div>
				<div class="cg-benefits__item">
					<div class="cg-benefits__icon-wrap"><span class="cg-benefits__icon" aria-hidden="true">💳</span></div>
					<h3 class="cg-benefits__heading"><?php esc_html_e( 'Multiple Gateways', 'techsome' ); ?></h3>
					<p class="cg-benefits__text"><?php esc_html_e( 'Accept Stripe, PayPal, Razorpay, and bank transfers.', 'techsome' ); ?></p>
				</div>
				<div class="cg-benefits__item">
					<div class="cg-benefits__icon-wrap"><span class="cg-benefits__icon" aria-hidden="true">📊</span></div>
					<h3 class="cg-benefits__heading"><?php esc_html_e( 'Donor CRM', 'techsome' ); ?></h3>
					<p class="cg-benefits__text"><?php esc_html_e( 'Track history, lifetime value, and engage your supporters.', 'techsome' ); ?></p>
				</div>
				<div class="cg-benefits__item">
					<div class="cg-benefits__icon-wrap"><span class="cg-benefits__icon" aria-hidden="true">📱</span></div>
					<h3 class="cg-benefits__heading"><?php esc_html_e( '5 Form Templates', 'techsome' ); ?></h3>
					<p class="cg-benefits__text"><?php esc_html_e( 'Classic, Wizard, Minimal & more. All mobile-responsive.', 'techsome' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- 3. Testimonial + Trust -->
	<section class="cg-trust" aria-labelledby="cg-trust-title">
		<div class="techsome-container">
			<p class="cg-section__label"><?php esc_html_e( 'What people say', 'techsome' ); ?></p>
			<h2 id="cg-trust-title" class="cg-section__title cg-section__title--narrow">
				<?php esc_html_e( 'Trusted by Organizations Like Yours', 'techsome' ); ?>
			</h2>
			<div class="cg-trust__card">
				<div class="cg-trust__stars" aria-hidden="true">★★★★★</div>
				<blockquote class="cg-trust__quote">
					"<?php esc_html_e( 'CharityGlow made setting up our online giving so simple. The campaign tracking is a game-changer.', 'techsome' ); ?>"
				</blockquote>
				<div class="cg-trust__author">
					<div class="cg-trust__avatar" aria-hidden="true"></div>
					<div>
						<cite class="cg-trust__cite"><?php esc_html_e( 'Director at Sample Nonprofit', 'techsome' ); ?></cite>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 4. Special Offer -->
	<section class="cg-offer" aria-labelledby="cg-offer-title">
		<div class="cg-offer__bg" aria-hidden="true"></div>
		<div class="techsome-container">
			<div class="cg-offer__inner">
				<span class="cg-offer__ribbon" aria-hidden="true"><?php esc_html_e( 'Limited offer', 'techsome' ); ?></span>
				<h2 id="cg-offer-title" class="cg-offer__title">
					<?php esc_html_e( 'Free Setup Assistance for the First 100 Charities', 'techsome' ); ?>
				</h2>
				<p class="cg-offer__text">
					<?php esc_html_e( "We'll help you configure Stripe, create your first campaign, and embed your forms. No cost, no obligation.", 'techsome' ); ?>
				</p>
				<a class="techsome-btn techsome-btn--white techsome-btn--lg" href="<?php echo esc_url( $free_setup_url ); ?>">
					<?php esc_html_e( 'Claim Your Free Setup', 'techsome' ); ?>
				</a>
			</div>
		</div>
	</section>

	<!-- 5. Features -->
	<section class="cg-features" aria-labelledby="cg-features-title">
		<div class="techsome-container">
			<p class="cg-section__label"><?php esc_html_e( 'Features', 'techsome' ); ?></p>
			<h2 id="cg-features-title" class="cg-section__title">
				<?php esc_html_e( 'Powerful Fundraising, Made Simple', 'techsome' ); ?>
			</h2>
			<div class="cg-features__grid">
				<div class="cg-features__card">
					<div class="cg-features__card-icon" aria-hidden="true">📋</div>
					<h3 class="cg-features__heading"><?php esc_html_e( '5 Beautiful Form Templates', 'techsome' ); ?></h3>
					<p class="cg-features__desc"><?php esc_html_e( 'Classic, Inline, Minimal, Card, and Wizard—each designed for clarity and conversions.', 'techsome' ); ?></p>
				</div>
				<div class="cg-features__card">
					<div class="cg-features__card-icon" aria-hidden="true">⚡</div>
					<h3 class="cg-features__heading"><?php esc_html_e( '12 Powerful Shortcodes', 'techsome' ); ?></h3>
					<p class="cg-features__desc"><?php esc_html_e( '[charityglow_form], [charityglow_campaigns], [charityglow_donor_wall] and more—embed anywhere.', 'techsome' ); ?></p>
				</div>
				<div class="cg-features__card">
					<div class="cg-features__card-icon" aria-hidden="true">🌍</div>
					<h3 class="cg-features__heading"><?php esc_html_e( 'Multi-Currency', 'techsome' ); ?></h3>
					<p class="cg-features__desc"><?php esc_html_e( 'Accept donations in 25+ currencies: USD, EUR, GBP, JPY, INR and more.', 'techsome' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- 6. How It Works -->
	<section class="cg-steps" aria-labelledby="cg-steps-title">
		<div class="techsome-container">
			<p class="cg-section__label"><?php esc_html_e( 'Get started', 'techsome' ); ?></p>
			<h2 id="cg-steps-title" class="cg-section__title">
				<?php esc_html_e( 'Get Started in Minutes', 'techsome' ); ?>
			</h2>
			<ol class="cg-steps__list">
				<li class="cg-steps__item">
					<span class="cg-steps__num" aria-hidden="true">1</span>
					<div class="cg-steps__connector" aria-hidden="true"></div>
					<h3 class="cg-steps__heading"><?php esc_html_e( 'Install & Activate', 'techsome' ); ?></h3>
					<p class="cg-steps__text"><?php esc_html_e( 'Install CharityGlow from WordPress.org in one click.', 'techsome' ); ?></p>
				</li>
				<li class="cg-steps__item">
					<span class="cg-steps__num" aria-hidden="true">2</span>
					<div class="cg-steps__connector" aria-hidden="true"></div>
					<h3 class="cg-steps__heading"><?php esc_html_e( 'Connect Your Gateway', 'techsome' ); ?></h3>
					<p class="cg-steps__text"><?php esc_html_e( 'Add your Stripe or PayPal API keys in the dashboard.', 'techsome' ); ?></p>
				</li>
				<li class="cg-steps__item">
					<span class="cg-steps__num" aria-hidden="true">3</span>
					<h3 class="cg-steps__heading"><?php esc_html_e( 'Add a Form', 'techsome' ); ?></h3>
					<p class="cg-steps__text"><?php esc_html_e( 'Drop a shortcode or block on any page and start accepting donations.', 'techsome' ); ?></p>
				</li>
			</ol>
			<div class="cg-steps__actions">
				<a class="techsome-btn techsome-btn--outline" href="<?php echo esc_url( $docs_url ); ?>">
					<?php esc_html_e( 'Read Full Documentation', 'techsome' ); ?>
				</a>
			</div>
		</div>
	</section>

	<!-- 7. Final CTA -->
	<section class="cg-cta" aria-labelledby="cg-cta-title">
		<div class="cg-cta__bg" aria-hidden="true"></div>
		<div class="techsome-container">
			<h2 id="cg-cta-title" class="cg-cta__title">
				<?php esc_html_e( 'Ready to Simplify Your Online Giving?', 'techsome' ); ?>
			</h2>
			<p class="cg-cta__text">
				<?php esc_html_e( 'Join nonprofits worldwide using CharityGlow to power their fundraising.', 'techsome' ); ?>
			</p>
			<div class="cg-cta__actions">
				<a class="techsome-btn techsome-btn--primary techsome-btn--lg cg-cta__btn" href="<?php echo esc_url( $wp_org_url ); ?>">
					<?php esc_html_e( 'Download for Free on WordPress.org', 'techsome' ); ?>
				</a>
				<a class="techsome-btn techsome-btn--outline-light techsome-btn--lg" href="<?php echo esc_url( $pricing_url ); ?>">
					<?php esc_html_e( 'View Pro Features', 'techsome' ); ?>
				</a>
			</div>
		</div>
	</section>
</div>
