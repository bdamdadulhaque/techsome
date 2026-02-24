<?php
/**
 * Homepage – classic (hero + features).
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="techsome-home techsome-home--classic">
	<section class="techsome-hero">
		<div class="techsome-container">
			<h1 class="techsome-hero__title"><?php bloginfo( 'name' ); ?></h1>
			<?php if ( get_bloginfo( 'description' ) ) : ?>
				<p class="techsome-hero__tagline"><?php bloginfo( 'description' ); ?></p>
			<?php endif; ?>
			<div class="techsome-hero__actions">
				<?php
				$cta_text = techsome_mod( 'techsome_header_cta_text', __( 'Get CharityGlow', 'techsome' ) );
				$cta_url  = techsome_mod( 'techsome_header_cta_url', '#' );
				if ( $cta_text && $cta_url ) :
					?>
					<a class="techsome-btn techsome-btn--primary techsome-btn--lg" href="<?php echo esc_url( $cta_url ); ?>"><?php echo esc_html( $cta_text ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section class="techsome-features techsome-container">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Features', 'techsome' ); ?></h2>
		<div class="techsome-features__grid">
			<div class="techsome-features__item">
				<h3><?php esc_html_e( 'CharityGlow Plugin', 'techsome' ); ?></h3>
				<p><?php esc_html_e( 'Donation forms and fundraising campaigns for any WordPress site.', 'techsome' ); ?></p>
			</div>
			<div class="techsome-features__item">
				<h3><?php esc_html_e( 'CharityGlow Theme', 'techsome' ); ?></h3>
				<p><?php esc_html_e( 'A conversion-focused theme built to showcase CharityGlow.', 'techsome' ); ?></p>
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
