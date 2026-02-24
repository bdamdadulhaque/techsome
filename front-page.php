<?php
/**
 * Front page template.
 *
 * @package Techsome
 */

get_header();

$layout = techsome_get_homepage_layout();
$part   = 'template-parts/homepage-' . $layout . '.php';
if ( ! file_exists( TECHSOME_DIR . $part ) ) {
	$layout = 'classic';
}
get_template_part( 'template-parts/homepage', $layout );

get_footer();
