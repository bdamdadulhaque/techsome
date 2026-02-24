<?php
/**
 * Single post – modern style (featured image hero).
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'techsome-single techsome-single--modern' ); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="techsome-single__hero"><?php the_post_thumbnail( 'techsome-hero', array( 'alt' => get_the_title() ) ); ?></div>
		<?php endif; ?>
		<div class="techsome-single__wrap">
			<header class="techsome-single__header">
				<?php if ( get_the_category() ) : ?>
					<div class="techsome-single__categories"><?php the_category( ' ' ); ?></div>
				<?php endif; ?>
				<h1 class="techsome-single__title"><?php the_title(); ?></h1>
				<div class="techsome-single__meta">
					<span class="techsome-single__date"><?php echo esc_html( get_the_date() ); ?></span>
					<span class="techsome-single__author"><?php the_author_posts_link(); ?></span>
				</div>
			</header>
			<div class="techsome-single__content techsome-prose">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="techsome-single__pages">' . __( 'Pages:', 'techsome' ), 'after' => '</div>' ) ); ?>
			</div>
			<?php if ( has_tag() ) : ?>
				<footer class="techsome-single__tags"><span class="screen-reader-text"><?php esc_html_e( 'Tags:', 'techsome' ); ?></span> <?php the_tags( '', ', ', '' ); ?></footer>
			<?php endif; ?>
		</div>
	</article>
	<nav class="techsome-single__nav" aria-label="<?php esc_attr_e( 'Post navigation', 'techsome' ); ?>"><?php the_post_navigation(); ?></nav>
	<?php
	$related = techsome_get_related_posts( get_the_ID(), 3 );
	if ( ! empty( $related ) ) :
		?>
		<div class="techsome-related">
			<h2 class="techsome-related__title"><?php esc_html_e( 'Related Posts', 'techsome' ); ?></h2>
			<div class="techsome-related__grid">
				<?php foreach ( $related as $post ) : setup_postdata( $post ); ?>
					<article class="techsome-related__item">
						<?php if ( has_post_thumbnail() ) : ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a><?php endif; ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<span class="techsome-related__date"><?php echo esc_html( get_the_date() ); ?></span>
					</article>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>
	<?php endif; ?>
<?php endwhile; ?>
