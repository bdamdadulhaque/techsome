<?php
/**
 * Multi-column footer with widget areas.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$copyright = techsome_mod( 'techsome_footer_copyright', '' );
if ( empty( $copyright ) ) {
	$copyright = esc_html( get_bloginfo( 'name' ) ) . ' &copy; ' . esc_html( date_i18n( 'Y' ) );
} else {
	$copyright = wp_kses_post( $copyright );
}

$has_columns = is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' );
?>
<footer class="techsome-footer techsome-footer--columns" role="contentinfo">
	<div class="techsome-container">
		<?php if ( $has_columns ) : ?>
			<div class="techsome-footer__grid">
				<div class="techsome-footer__col">
					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<h3 class="techsome-footer__title"><?php bloginfo( 'name' ); ?></h3>
					<?php endif; ?>
					<?php if ( get_bloginfo( 'description' ) ) : ?>
						<p class="techsome-footer__description"><?php bloginfo( 'description' ); ?></p>
					<?php endif; ?>
					<?php techsome_social_icons( 'footer' ); ?>
				</div>
				<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
					<?php if ( is_active_sidebar( 'footer-' . $i ) ) : ?>
						<div class="techsome-footer__col"><?php dynamic_sidebar( 'footer-' . $i ); ?></div>
					<?php endif; ?>
				<?php endfor; ?>
			</div>
		<?php endif; ?>
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav class="techsome-footer__nav" aria-label="<?php esc_attr_e( 'Footer menu', 'techsome' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'     => 'techsome-footer-menu',
					)
				);
				?>
			</nav>
		<?php endif; ?>
		<div class="techsome-footer__bottom">
			<div class="techsome-footer__meta"><?php echo $copyright; ?></div>
		</div>
	</div>
</footer>
