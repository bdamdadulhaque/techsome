<?php
/**
 * Single post template.
 *
 * @package Techsome
 */

get_header();
?>

<div class="techsome-container techsome-content">
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

<?php get_footer(); ?>
