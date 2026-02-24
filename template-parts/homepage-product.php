<?php
/**
 * Homepage – product-focused (Plugin & Theme).
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="techsome-home techsome-home--product">
	<section class="techsome-hero techsome-hero--product">
		<div class="techsome-container">
			<h1 class="techsome-hero__title"><?php esc_html_e( 'CharityGlow – Plugin & Theme', 'techsome' ); ?></h1>
			<p class="techsome-hero__tagline"><?php esc_html_e( 'Donation forms and beautiful fundraising sites for WordPress.', 'techsome' ); ?></p>
			<div class="techsome-hero__actions">
				<?php
				$cta_url = techsome_mod( 'techsome_header_cta_url', '#' );
				?>
				<a class="techsome-btn techsome-btn--primary techsome-btn--lg" href="<?php echo esc_url( $cta_url ); ?>"><?php esc_html_e( 'Get CharityGlow', 'techsome' ); ?></a>
			</div>
		</div>
	</section>
	<section class="techsome-products techsome-container">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Products', 'techsome' ); ?></h2>
		<div class="techsome-products__grid">
			<div class="techsome-product-card">
				<h3 class="techsome-product-card__title"><?php esc_html_e( 'CharityGlow Plugin', 'techsome' ); ?></h3>
				<p class="techsome-product-card__desc"><?php esc_html_e( 'Add donation forms and campaigns to any WordPress site.', 'techsome' ); ?></p>
				<a class="techsome-btn techsome-btn--primary" href="<?php echo esc_url( $cta_url ); ?>"><?php esc_html_e( 'Learn more', 'techsome' ); ?></a>
			</div>
			<div class="techsome-product-card">
				<h3 class="techsome-product-card__title"><?php esc_html_e( 'CharityGlow Theme', 'techsome' ); ?></h3>
				<p class="techsome-product-card__desc"><?php esc_html_e( 'A theme built to showcase CharityGlow and maximize conversions.', 'techsome' ); ?></p>
				<a class="techsome-btn techsome-btn--primary" href="<?php echo esc_url( $cta_url ); ?>"><?php esc_html_e( 'Learn more', 'techsome' ); ?></a>
			</div>
		</div>
	</section>
	<?php if ( have_posts() && ! is_singular() ) : ?>
		<section class="techsome-container techsome-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="techsome-prose"><?php the_content(); ?></div>
			<?php endwhile; ?>
		</section>
	<?php endif; ?>
</div>
