<?php
/**
 * Template Name: Documentation / Help
 * Documentation index or help page; link to external docs if needed.
 *
 * @package Techsome
 */

get_header();
?>

<div class="techsome-container techsome-content techsome-docs-page">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'techsome-page techsome-docs' ); ?>>
			<header class="techsome-page__header">
				<h1 class="techsome-page__title"><?php the_title(); ?></h1>
			</header>
			<div class="techsome-page__body techsome-prose"><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
