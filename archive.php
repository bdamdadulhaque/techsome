<?php
/**
 * Archive template.
 *
 * @package Techsome
 */

get_header();
?>

<div class="techsome-container techsome-content">
	<header class="techsome-archive-header">
		<h1 class="techsome-page-title"><?php the_archive_title(); ?></h1>
		<?php if ( get_the_archive_description() ) : ?>
			<div class="techsome-archive-description techsome-prose"><?php the_archive_description(); ?></div>
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
