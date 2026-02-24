<?php
/**
 * Homepage – split (Plugin | Theme).
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$plugin_url = techsome_get_plugin_checkout_url();
$theme_url  = techsome_get_theme_checkout_url();
?>
<div class="techsome-home techsome-home--split">
	<section class="techsome-split">
		<div class="techsome-container techsome-split__inner">
			<div class="techsome-split__col">
				<h2 class="techsome-split__title"><?php esc_html_e( 'CharityGlow Plugin', 'techsome' ); ?></h2>
				<p class="techsome-split__text"><?php esc_html_e( 'Donation forms and fundraising campaigns for any WordPress site.', 'techsome' ); ?></p>
				<a class="techsome-btn techsome-btn--primary" href="<?php echo esc_url( $plugin_url ); ?>"><?php esc_html_e( 'Get the Plugin', 'techsome' ); ?></a>
			</div>
			<div class="techsome-split__col">
				<h2 class="techsome-split__title"><?php esc_html_e( 'CharityGlow Theme', 'techsome' ); ?></h2>
				<p class="techsome-split__text"><?php esc_html_e( 'A theme built to showcase CharityGlow and drive donations.', 'techsome' ); ?></p>
				<a class="techsome-btn techsome-btn--primary" href="<?php echo esc_url( $theme_url ); ?>"><?php esc_html_e( 'Get the Theme', 'techsome' ); ?></a>
			</div>
		</div>
	</section>
	<?php if ( have_posts() && ! is_singular() ) : ?>
		<section class="techsome-container techsome-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="techsome-prose"><?php the_content(); ?></div>
			<?php endwhile; ?>
		</section>
	<?php endif; ?>
</div>
