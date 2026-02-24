<?php
/**
 * Default content template (post/archive loop).
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'techsome-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" class="techsome-card__thumb"><?php the_post_thumbnail( 'techsome-card' ); ?></a>
	<?php endif; ?>
	<header class="techsome-card__header">
		<?php the_title( '<h2 class="techsome-card__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
		<div class="techsome-card__meta"><?php echo get_the_date(); ?></div>
	</header>
	<div class="techsome-card__excerpt techsome-prose"><?php the_excerpt(); ?></div>
</article>
