<?php
/**
 * Template Name: Contact
 * Contact page: two-column (form + demo request), FAQ section.
 *
 * @package Techsome
 */

get_header();

$demo_sent = isset( $_GET['demo_sent'] ) && '1' === $_GET['demo_sent'];
?>

<div class="techsome-container techsome-content techsome-contact-page">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'techsome-page techsome-contact' ); ?>>
			<header class="techsome-contact-page__header">
				<h1 class="techsome-page__title"><?php the_title(); ?></h1>
				<?php if ( has_excerpt() ) : ?>
					<p class="techsome-page__excerpt"><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
				<?php endif; ?>
			</header>

			<div class="techsome-contact__grid">
				<div class="techsome-contact__main">
					<div class="techsome-contact__body techsome-prose">
						<?php the_content(); ?>
					</div>
					<?php if ( ! has_blocks() && ! has_shortcode( get_post()->post_content, 'contact-form-7' ) && ! has_shortcode( get_post()->post_content, 'techsome_contact_form' ) ) : ?>
						<div class="techsome-contact__form-wrap">
							<?php echo do_shortcode( '[techsome_contact_form]' ); ?>
						</div>
					<?php endif; ?>
				</div>
				<aside class="techsome-contact__demo" aria-labelledby="techsome-demo-title">
					<div class="techsome-contact-demo-card">
						<h2 id="techsome-demo-title" class="techsome-contact-demo-card__title">
							<?php esc_html_e( 'Try the Admin Demo', 'techsome' ); ?>
						</h2>
						<p class="techsome-contact-demo-card__text">
							<?php esc_html_e( 'Share your name and email and we\'ll create an admin user for you to explore the CharityGlow demo dashboard.', 'techsome' ); ?>
						</p>
						<?php if ( $demo_sent ) : ?>
							<div class="techsome-contact-demo-card__success" role="alert">
								<?php esc_html_e( 'Thank you! We\'ll set up your demo access and email you shortly.', 'techsome' ); ?>
							</div>
						<?php else : ?>
							<form class="techsome-contact-demo-form" method="post" action="">
								<?php wp_nonce_field( 'techsome_demo_request', 'techsome_demo_nonce' ); ?>
								<p class="techsome-contact-demo-form__row">
									<label for="techsome_demo_name"><?php esc_html_e( 'Your name', 'techsome' ); ?> <span class="required">*</span></label>
									<input type="text" id="techsome_demo_name" name="techsome_demo_name" required />
								</p>
								<p class="techsome-contact-demo-form__row">
									<label for="techsome_demo_email"><?php esc_html_e( 'Email', 'techsome' ); ?> <span class="required">*</span></label>
									<input type="email" id="techsome_demo_email" name="techsome_demo_email" required />
								</p>
								<p class="techsome-contact-demo-form__submit">
									<button type="submit" class="techsome-btn techsome-btn--primary techsome-btn--lg"><?php esc_html_e( 'Request demo access', 'techsome' ); ?></button>
								</p>
							</form>
						<?php endif; ?>
					</div>
				</aside>
			</div>

			<section class="techsome-contact__faq" aria-labelledby="techsome-faq-title">
				<h2 id="techsome-faq-title" class="techsome-contact-faq__title"><?php esc_html_e( 'Frequently Asked Questions', 'techsome' ); ?></h2>
				<div class="techsome-contact-faq__list">
					<details class="techsome-contact-faq__item">
						<summary class="techsome-contact-faq__question"><?php esc_html_e( 'How do I get started with CharityGlow?', 'techsome' ); ?></summary>
						<div class="techsome-contact-faq__answer">
							<p><?php esc_html_e( 'Install the free plugin from WordPress.org, connect your Stripe or PayPal account, and add a donation form to any page using a shortcode or block. You can upgrade to Pro anytime for unlimited campaigns and priority support.', 'techsome' ); ?></p>
						</div>
					</details>
					<details class="techsome-contact-faq__item">
						<summary class="techsome-contact-faq__question"><?php esc_html_e( 'What payment gateways are supported?', 'techsome' ); ?></summary>
						<div class="techsome-contact-faq__answer">
							<p><?php esc_html_e( 'CharityGlow supports Stripe, PayPal, Razorpay, and bank transfers. Pro and Pro Plus plans include all gateways with no extra cost.', 'techsome' ); ?></p>
						</div>
					</details>
					<details class="techsome-contact-faq__item">
						<summary class="techsome-contact-faq__question"><?php esc_html_e( 'How quickly can I get demo access?', 'techsome' ); ?></summary>
						<div class="techsome-contact-faq__answer">
							<p><?php esc_html_e( 'We usually create demo admin accounts within one business day. You\'ll receive an email with your login details and a link to the demo site.', 'techsome' ); ?></p>
						</div>
					</details>
					<details class="techsome-contact-faq__item">
						<summary class="techsome-contact-faq__question"><?php esc_html_e( 'Do you offer free setup for nonprofits?', 'techsome' ); ?></summary>
						<div class="techsome-contact-faq__answer">
							<p><?php esc_html_e( 'Yes. We offer free setup assistance for the first 100 charities—including Stripe configuration, your first campaign, and embedding forms. Use the contact form or the "Claim Your Free Setup" offer on our homepage.', 'techsome' ); ?></p>
						</div>
					</details>
					<details class="techsome-contact-faq__item">
						<summary class="techsome-contact-faq__question"><?php esc_html_e( 'What\'s the difference between Pro and Pro Plus?', 'techsome' ); ?></summary>
						<div class="techsome-contact-faq__answer">
							<p><?php esc_html_e( 'Pro includes unlimited campaigns, priority support, advanced reporting, and unlimited sites. Pro Plus adds dedicated support, custom integrations, white-label options, and early access to new features.', 'techsome' ); ?></p>
						</div>
					</details>
				</div>
			</section>
		</article>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
