<?php
/**
 * Blog archive – masonry layout.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php if ( have_posts() ) : ?>
	<div class="techsome-posts techsome-posts--masonry">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'techsome-card techsome-card--masonry' ); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" class="techsome-card__thumb"><?php the_post_thumbnail( 'techsome-card', array( 'alt' => get_the_title() ) ); ?></a>
				<?php endif; ?>
				<div class="techsome-card__body">
					<?php if ( get_the_category() ) : ?>
						<div class="techsome-card__categories"><?php the_category( ', ' ); ?></div>
					<?php endif; ?>
					<h2 class="techsome-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="techsome-card__meta"><?php echo esc_html( get_the_date() ); ?></div>
					<div class="techsome-card__excerpt techsome-prose"><?php echo wp_trim_words( get_the_excerpt(), 18 ); ?></div>
					<a class="techsome-card__link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'techsome' ); ?></a>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
<?php else : ?>
	<?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>
