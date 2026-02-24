<?php
/**
 * Template Name: Landing (Minimal)
 * Minimal or no header/footer for landing pages.
 *
 * @package Techsome
 */

get_header();
?>

<div class="techsome-landing techsome-container techsome-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'techsome-page' ); ?>>
			<div class="techsome-page__body techsome-prose"><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
