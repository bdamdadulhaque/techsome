<?php
/**
 * Theme setup.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'after_setup_theme', 'techsome_setup' );
function techsome_setup() {
	load_theme_textdomain( 'techsome', TECHSOME_DIR . 'languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 220,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'block-template-parts' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'techsome' ),
			'footer'  => __( 'Footer Menu', 'techsome' ),
		)
	);

	add_image_size( 'techsome-card', 800, 520, true );
	add_image_size( 'techsome-hero', 1440, 600, true );
}

add_action( 'widgets_init', 'techsome_widgets_init' );
function techsome_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'techsome' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here for blog and archives.', 'techsome' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Above Footer CTA', 'techsome' ),
			'id'            => 'above-footer',
			'description'   => __( 'Full-width area above footer for CTA or newsletter.', 'techsome' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	for ( $i = 1; $i <= 4; $i++ ) {
		register_sidebar(
			array(
				'name'          => sprintf( __( 'Footer Column %d', 'techsome' ), $i ),
				'id'            => 'footer-' . $i,
				'description'   => sprintf( __( 'Footer widgets column %d.', 'techsome' ), $i ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}
}
