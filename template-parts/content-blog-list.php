<?php
/**
 * Blog archive – list layout.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php if ( have_posts() ) : ?>
	<div class="techsome-posts techsome-posts--list">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
		<?php endwhile; ?>
	</div>
<?php else : ?>
	<?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>
