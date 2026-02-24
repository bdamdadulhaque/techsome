<?php
/**
 * Search results template.
 *
 * @package Techsome
 */

get_header();
?>

<div class="techsome-container techsome-content">
	<header class="techsome-archive-header">
		<h1 class="techsome-page-title"><?php printf( esc_html__( 'Search: %s', 'techsome' ), get_search_query() ); ?></h1>
	</header>

	<?php if ( have_posts() ) : ?>
		<div class="techsome-posts techsome-posts--list">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
			<?php endwhile; ?>
		</div>
		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
