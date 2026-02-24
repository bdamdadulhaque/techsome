<?php
/**
 * Minimal footer: logo + copyright.
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
?>
<footer class="techsome-footer techsome-footer--minimal" role="contentinfo">
	<div class="techsome-container techsome-footer__inner">
		<?php if ( has_custom_logo() ) : ?>
			<div class="techsome-footer__logo"><?php the_custom_logo(); ?></div>
		<?php endif; ?>
		<div class="techsome-footer__meta">
			<?php echo $copyright; ?>
			<?php techsome_social_icons( 'footer' ); ?>
		</div>
	</div>
</footer>
