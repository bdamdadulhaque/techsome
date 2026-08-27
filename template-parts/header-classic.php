<?php
/**
 * Classic header: logo left, menu right.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$sticky = techsome_mod( 'techsome_sticky_header', true );
$cta_text = techsome_mod( 'techsome_header_cta_text', __( 'Get CharityGlow', 'techsome' ) );
$cta_url  = techsome_mod( 'techsome_header_cta_url', '#' );
?>
<header class="techsome-header techsome-header--classic<?php echo $sticky ? ' techsome-header--sticky' : ''; ?>" role="banner">
	<div class="techsome-menu-overlay" id="techsome-menu-overlay" aria-hidden="true" tabindex="-1"></div>
	<div class="techsome-container techsome-header__inner">
		<div class="techsome-header__brand">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="techsome-header__site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>
		</div>

		<button type="button" class="techsome-menu-toggle" aria-expanded="false" aria-controls="techsome-primary-nav" aria-label="<?php esc_attr_e( 'Toggle menu', 'techsome' ); ?>">
			<span class="techsome-menu-toggle__text"><?php esc_html_e( 'Menu', 'techsome' ); ?></span>
			<span class="techsome-menu-toggle__icon" aria-hidden="true"></span>
		</button>

		<div class="techsome-header__nav-wrap" id="techsome-primary-nav">
			<button type="button" class="techsome-menu-close" aria-label="<?php esc_attr_e( 'Close menu', 'techsome' ); ?>">
				<span aria-hidden="true">&times;</span>
			</button>
			<span class="techsome-header__nav-spacer" aria-hidden="true"></span>
			<nav class="techsome-nav" aria-label="<?php esc_attr_e( 'Primary menu', 'techsome' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'techsome-menu',
						'fallback_cb'    => 'techsome_menu_fallback',
						'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
					)
				);
				?>
			</nav>
			<div class="techsome-header__nav-spacer techsome-header__nav-spacer--right">
				<?php if ( $cta_text && $cta_url ) : ?>
					<div class="techsome-header__actions">
						<a class="techsome-btn techsome-btn--primary" href="<?php echo esc_url( $cta_url ); ?>"><?php echo esc_html( $cta_text ); ?></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>
