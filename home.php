<?php
/**
 * Blog index (Posts page when Settings → Reading uses a static page).
 * Uses the same list / grid / masonry layout as archive.
 *
 * @package Techsome
 */

get_header();
?>

<div class="techsome-container techsome-content techsome-blog-wrap">
	<header class="techsome-archive-header">
		<h1 class="techsome-page-title">
			<?php
			if ( get_option( 'page_for_posts' ) ) {
				echo esc_html( get_the_title( (int) get_option( 'page_for_posts' ) ) );
			} else {
				esc_html_e( 'Blog', 'techsome' );
			}
			?>
		</h1>
		<?php if ( get_option( 'page_for_posts' ) && get_post( get_option( 'page_for_posts' ) ) && has_excerpt( get_option( 'page_for_posts' ) ) ) : ?>
			<div class="techsome-archive-description techsome-prose"><?php echo wp_kses_post( get_the_excerpt( get_option( 'page_for_posts' ) ) ); ?></div>
		<?php endif; ?>
	</header>

	<?php
	$layout = techsome_get_blog_layout();
	$part   = 'template-parts/content-blog-' . $layout . '.php';
	if ( ! file_exists( TECHSOME_DIR . $part ) ) {
		$layout = 'grid';
	}
	get_template_part( 'template-parts/content-blog', $layout );
	?>

	<?php the_posts_pagination(); ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) && techsome_mod( 'techsome_blog_sidebar', true ) ) : ?>
		<aside class="techsome-sidebar" aria-label="<?php esc_attr_e( 'Sidebar', 'techsome' ); ?>"><?php dynamic_sidebar( 'sidebar-1' ); ?></aside>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
