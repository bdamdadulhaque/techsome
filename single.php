<?php
/**
 * Single post template.
 *
 * @package Techsome
 */

get_header();
?>

<div class="techsome-container techsome-content techsome-single-wrap">
	<div class="techsome-single-main">
		<?php
		$style = techsome_get_single_post_style();
		$part  = 'template-parts/content-single-' . $style . '.php';
		if ( ! file_exists( TECHSOME_DIR . $part ) ) {
			$style = 'classic';
		}
		get_template_part( 'template-parts/content-single', $style );
		?>
		<?php if ( comments_open() || get_comments_number() ) : ?>
			<?php comments_template(); ?>
		<?php endif; ?>
	</div>
	<?php if ( is_active_sidebar( 'sidebar-1' ) && techsome_mod( 'techsome_blog_sidebar', true ) ) : ?>
		<aside class="techsome-sidebar" aria-label="<?php esc_attr_e( 'Sidebar', 'techsome' ); ?>"><?php dynamic_sidebar( 'sidebar-1' ); ?></aside>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
