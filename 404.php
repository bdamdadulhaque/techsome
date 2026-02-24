<?php
/**
 * 404 template.
 *
 * @package Techsome
 */

get_header();
?>

<div class="techsome-container techsome-content">
	<section class="techsome-404">
		<h1 class="techsome-page-title"><?php esc_html_e( 'Page not found', 'techsome' ); ?></h1>
		<p class="techsome-prose"><?php esc_html_e( 'The page you are looking for might have been removed or is temporarily unavailable.', 'techsome' ); ?></p>
		<p><a class="techsome-btn techsome-btn--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go to Home', 'techsome' ); ?></a></p>
	</section>
</div>

<?php get_footer(); ?>
