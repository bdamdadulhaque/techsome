<?php
/**
 * Page template.
 *
 * @package Techsome
 */

get_header();
?>

<div class="techsome-container techsome-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'techsome-page' ); ?>>
			<header class="techsome-page__header">
				<h1 class="techsome-page__title"><?php the_title(); ?></h1>
			</header>
			<div class="techsome-page__body techsome-prose"><?php the_content(); ?></div>
		</article>
		<?php if ( comments_open() || get_comments_number() ) : ?>
			<?php comments_template(); ?>
		<?php endif; ?>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
