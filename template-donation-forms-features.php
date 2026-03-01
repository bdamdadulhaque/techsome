<?php
/**
 * Template Name: Donation Form Features Layout
 * CharityGlow donation forms feature page: templates, shortcodes, Stripe/PayPal, Free vs Pro.
 *
 * @package Techsome
 */

get_header();

$wp_org_url  = techsome_get_plugin_wp_org_url();
$pricing_url = techsome_mod( 'techsome_pricing_page_url', home_url( '/pricing/' ) );
$demo_url    = techsome_mod( 'techsome_demo_page_url', home_url( '/demo/' ) );

$config = techsome_get_feature_config( 'donation-forms' );
if ( ! $config ) {
	get_template_part( 'template-parts/content', 'none' );
	get_footer();
	return;
}

$title      = $config['title'];
$subtitle   = $config['subtitle'];
$intro      = $config['intro'];
$key_points = $config['key_points'];
$free_list  = $config['free_list'];
$pro_list   = $config['pro_list'];

while ( have_posts() ) : the_post();
?>
<div class="techsome-feature-page">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'techsome-feature' ); ?>>

		<header class="techsome-feature__hero">
			<div class="techsome-container">
				<p class="techsome-feature__label"><?php esc_html_e( 'CharityGlow Feature', 'techsome' ); ?></p>
				<h1 class="techsome-feature__title"><?php echo esc_html( $title ); ?></h1>
				<p class="techsome-feature__subtitle"><?php echo esc_html( $subtitle ); ?></p>
				<div class="techsome-feature__hero-actions">
					<a class="techsome-btn techsome-btn--primary techsome-btn--lg" href="<?php echo esc_url( $wp_org_url ); ?>"><?php esc_html_e( 'Download free', 'techsome' ); ?></a>
					<a class="techsome-btn techsome-btn--outline techsome-btn--lg" href="<?php echo esc_url( $demo_url ); ?>"><?php esc_html_e( 'View demo', 'techsome' ); ?></a>
				</div>
			</div>
		</header>

		<section class="techsome-feature__intro" aria-labelledby="feature-intro">
			<div class="techsome-container">
				<h2 id="feature-intro" class="screen-reader-text"><?php echo esc_html( $title ); ?> <?php esc_html_e( 'overview', 'techsome' ); ?></h2>
				<p class="techsome-feature__intro-text"><?php echo esc_html( $intro ); ?></p>
			</div>
		</section>

		<section class="techsome-feature__points" aria-labelledby="feature-points-title">
			<div class="techsome-container">
				<h2 id="feature-points-title" class="techsome-feature__section-title"><?php esc_html_e( 'Key features', 'techsome' ); ?></h2>
				<div class="techsome-feature__points-grid">
					<?php foreach ( $key_points as $point ) : ?>
						<div class="techsome-feature__point">
							<h3 class="techsome-feature__point-title"><?php echo esc_html( $point['title'] ); ?></h3>
							<p class="techsome-feature__point-text"><?php echo esc_html( $point['text'] ); ?></p>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<section class="techsome-feature__plans" aria-labelledby="feature-plans-title">
			<div class="techsome-container">
				<h2 id="feature-plans-title" class="techsome-feature__section-title"><?php esc_html_e( 'Free vs Pro', 'techsome' ); ?></h2>
				<p class="techsome-feature__plans-desc"><?php esc_html_e( 'CharityGlow is free on WordPress.org. Unlock more with Pro.', 'techsome' ); ?></p>
				<div class="techsome-feature__plans-grid">
					<div class="techsome-feature__plan techsome-feature__plan--free">
						<h3 class="techsome-feature__plan-name"><?php esc_html_e( 'Free', 'techsome' ); ?></h3>
						<ul class="techsome-feature__plan-list">
							<?php foreach ( $free_list as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
						<a class="techsome-btn techsome-btn--outline" href="<?php echo esc_url( $wp_org_url ); ?>"><?php esc_html_e( 'Get free', 'techsome' ); ?></a>
					</div>
					<div class="techsome-feature__plan techsome-feature__plan--pro">
						<span class="techsome-feature__plan-badge"><?php esc_html_e( 'Pro', 'techsome' ); ?></span>
						<h3 class="techsome-feature__plan-name"><?php esc_html_e( 'Pro & Pro Plus', 'techsome' ); ?></h3>
						<ul class="techsome-feature__plan-list">
							<?php foreach ( $pro_list as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
						<a class="techsome-btn techsome-btn--primary" href="<?php echo esc_url( $pricing_url ); ?>"><?php esc_html_e( 'View pricing', 'techsome' ); ?></a>
					</div>
				</div>
			</div>
		</section>

		<section class="techsome-feature__cta" aria-labelledby="feature-cta-title">
			<div class="techsome-container">
				<h2 id="feature-cta-title" class="techsome-feature__cta-title"><?php esc_html_e( 'Ready to try CharityGlow?', 'techsome' ); ?></h2>
				<p class="techsome-feature__cta-text"><?php esc_html_e( 'Install the free plugin from WordPress.org or explore Pro for advanced features.', 'techsome' ); ?></p>
				<div class="techsome-feature__cta-actions">
					<a class="techsome-btn techsome-btn--primary techsome-btn--lg" href="<?php echo esc_url( $wp_org_url ); ?>"><?php esc_html_e( 'Download for free', 'techsome' ); ?></a>
					<a class="techsome-btn techsome-btn--outline techsome-btn--lg" href="<?php echo esc_url( $pricing_url ); ?>"><?php esc_html_e( 'See Pro features', 'techsome' ); ?></a>
				</div>
			</div>
		</section>

		<?php if ( get_the_content() ) : ?>
			<section class="techsome-feature__extra techsome-content">
				<div class="techsome-container">
					<div class="techsome-prose"><?php the_content(); ?></div>
				</div>
			</section>
		<?php endif; ?>

	</article>
</div>
<?php
endwhile;
get_footer();
