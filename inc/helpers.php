<?php
/**
 * Helper functions.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get a theme mod with a safe default.
 *
 * @param string $name    Theme mod name.
 * @param mixed  $default Default value.
 * @return mixed
 */
function techsome_mod( $name, $default = '' ) {
	$value = get_theme_mod( $name, $default );
	return ( '' === $value || null === $value ) ? $default : $value;
}

/**
 * Get header layout.
 *
 * @return string
 */
function techsome_get_header_layout() {
	return techsome_mod( 'techsome_header_layout', 'classic' );
}

/**
 * Get footer layout.
 *
 * @return string
 */
function techsome_get_footer_layout() {
	return techsome_mod( 'techsome_footer_layout', 'columns' );
}

/**
 * Get homepage layout.
 *
 * @return string
 */
function techsome_get_homepage_layout() {
	return techsome_mod( 'techsome_homepage_layout', 'classic' );
}

/**
 * Get blog archive layout.
 *
 * @return string
 */
function techsome_get_blog_layout() {
	return techsome_mod( 'techsome_blog_layout', 'grid' );
}

/**
 * Get single post style.
 *
 * @return string
 */
function techsome_get_single_post_style() {
	return techsome_mod( 'techsome_single_post_style', 'classic' );
}

/**
 * Get social media links.
 *
 * @return array
 */
function techsome_get_social_links() {
	$socials  = array();
	$networks  = array( 'facebook', 'twitter', 'instagram', 'linkedin', 'youtube' );
	foreach ( $networks as $network ) {
		$url = get_theme_mod( "techsome_social_{$network}", '' );
		if ( ! empty( $url ) ) {
			$socials[ $network ] = esc_url( $url );
		}
	}
	return $socials;
}

/**
 * Output social icons.
 *
 * @param string $location 'header' or 'footer'.
 */
function techsome_social_icons( $location = 'footer' ) {
	$socials = techsome_get_social_links();
	if ( empty( $socials ) ) {
		return;
	}
	$class = 'techsome-social techsome-social--' . esc_attr( $location );
	echo '<div class="' . esc_attr( $class ) . '" role="list">';
	foreach ( $socials as $network => $url ) {
		$label = sprintf( __( 'Visit our %s', 'techsome' ), $network );
		echo '<a href="' . esc_url( $url ) . '" target="_blank" rel="noopener noreferrer" class="techsome-social__link" aria-label="' . esc_attr( $label ) . '" role="listitem">';
		echo '<span class="techsome-social__icon techsome-social__icon--' . esc_attr( $network ) . '" aria-hidden="true"></span>';
		echo '</a>';
	}
	echo '</div>';
}

/**
 * Fallback when no primary menu is set.
 */
function techsome_menu_fallback() {
	echo '<ul class="techsome-menu"><li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'techsome' ) . '</a></li></ul>';
}

/**
 * Get related posts.
 *
 * @param int $post_id Post ID.
 * @param int $limit   Number of posts.
 * @return array
 */
function techsome_get_related_posts( $post_id, $limit = 3 ) {
	$categories = wp_get_post_categories( $post_id );
	if ( empty( $categories ) ) {
		return array();
	}
	return get_posts( array(
		'category__in'   => $categories,
		'post__not_in'   => array( $post_id ),
		'posts_per_page' => $limit,
		'orderby'        => 'rand',
	) );
}

/**
 * Output breadcrumbs (optional, hook-based).
 */
function techsome_breadcrumbs() {
	if ( is_front_page() ) {
		return;
	}
	$items = array(
		'<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'techsome' ) . '</a>',
	);
	if ( is_singular() ) {
		$items[] = '<span class="techsome-breadcrumb-current" aria-current="page">' . get_the_title() . '</span>';
	} elseif ( is_archive() ) {
		$items[] = '<span class="techsome-breadcrumb-current" aria-current="page">' . get_the_archive_title() . '</span>';
	} elseif ( is_search() ) {
		$items[] = '<span class="techsome-breadcrumb-current" aria-current="page">' . sprintf( __( 'Search: %s', 'techsome' ), get_search_query() ) . '</span>';
	} elseif ( is_404() ) {
		$items[] = '<span class="techsome-breadcrumb-current" aria-current="page">' . __( 'Page not found', 'techsome' ) . '</span>';
	}
	echo '<nav class="techsome-breadcrumbs" aria-label="' . esc_attr__( 'Breadcrumb', 'techsome' ) . '"><ol class="techsome-breadcrumbs__list">';
	foreach ( $items as $i => $item ) {
		echo '<li class="techsome-breadcrumbs__item">' . $item . '</li>';
		if ( $i < count( $items ) - 1 ) {
			echo '<li class="techsome-breadcrumbs__sep" aria-hidden="true">/</li>';
		}
	}
	echo '</ol></nav>';
}
