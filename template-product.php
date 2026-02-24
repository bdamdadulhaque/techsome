<?php
/**
 * Template Name: Product Landing
 * Product landing page (plugin or theme).
 *
 * @package Techsome
 */

get_header();
?>

<div class="techsome-container techsome-content techsome-product-page">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'techsome-page techsome-product' ); ?>>
			<header class="techsome-product__hero">
				<h1 class="techsome-page__title"><?php the_title(); ?></h1>
				<div class="techsome-product__tagline techsome-prose"><?php the_excerpt(); ?></div>
			</header>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="techsome-product__screenshot"><?php the_post_thumbnail( 'large', array( 'alt' => get_the_title() ) ); ?></div>
			<?php endif; ?>
			<div class="techsome-product__body techsome-prose"><?php the_content(); ?></div>
			<?php
			$cta_text = techsome_mod( 'techsome_header_cta_text', __( 'Get CharityGlow', 'techsome' ) );
			$cta_url  = techsome_mod( 'techsome_header_cta_url', '#' );
			if ( $cta_text && $cta_url ) :
				?>
				<div class="techsome-product__cta">
					<a class="techsome-btn techsome-btn--primary techsome-btn--lg" href="<?php echo esc_url( $cta_url ); ?>"><?php echo esc_html( $cta_text ); ?></a>
				</div>
			<?php endif; ?>
		</article>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
