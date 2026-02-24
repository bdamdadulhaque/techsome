<?php
/**
 * Centered header: logo center, menu below or split.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$sticky   = techsome_mod( 'techsome_sticky_header', true );
$cta_text = techsome_mod( 'techsome_header_cta_text', __( 'Get CharityGlow', 'techsome' ) );
$cta_url  = techsome_mod( 'techsome_header_cta_url', '#' );
?>
<header class="techsome-header techsome-header--centered<?php echo $sticky ? ' techsome-header--sticky' : ''; ?>" role="banner">
	<div class="techsome-container techsome-header__inner">
		<button type="button" class="techsome-menu-toggle" aria-expanded="false" aria-controls="techsome-primary-nav" aria-label="<?php esc_attr_e( 'Toggle menu', 'techsome' ); ?>">
			<span class="techsome-menu-toggle__text"><?php esc_html_e( 'Menu', 'techsome' ); ?></span>
			<span class="techsome-menu-toggle__icon" aria-hidden="true"></span>
		</button>

		<div class="techsome-header__nav-wrap techsome-header__nav-wrap--left" id="techsome-primary-nav">
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
		</div>

		<div class="techsome-header__brand techsome-header__brand--center">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="techsome-header__site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>
		</div>

		<div class="techsome-header__nav-wrap techsome-header__nav-wrap--right" id="techsome-primary-nav">
			<nav class="techsome-nav techsome-nav--right" aria-label="<?php esc_attr_e( 'Primary menu', 'techsome' ); ?>">
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
			<?php if ( $cta_text && $cta_url ) : ?>
				<div class="techsome-header__actions">
					<a class="techsome-btn techsome-btn--primary" href="<?php echo esc_url( $cta_url ); ?>"><?php echo esc_html( $cta_text ); ?></a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</header>
