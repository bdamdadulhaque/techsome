<?php
/**
 * Header.
 *
 * @package Techsome
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#techsome-main"><?php esc_html_e( 'Skip to content', 'techsome' ); ?></a>

<?php
$header_layout = techsome_get_header_layout();
$header_file   = 'template-parts/header-' . $header_layout . '.php';
if ( ! file_exists( TECHSOME_DIR . $header_file ) ) {
	$header_layout = 'classic';
	$header_file   = 'template-parts/header-classic.php';
}
get_template_part( 'template-parts/header', $header_layout );
?>

<main id="techsome-main" class="techsome-main" role="main">
