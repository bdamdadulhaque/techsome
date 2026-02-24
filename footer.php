<?php
/**
 * Footer.
 *
 * @package Techsome
 */

$footer_layout = techsome_get_footer_layout();
$footer_file   = 'template-parts/footer-' . $footer_layout . '.php';
if ( ! file_exists( TECHSOME_DIR . $footer_file ) ) {
	$footer_layout = 'columns';
	$footer_file   = 'template-parts/footer-columns.php';
}
get_template_part( 'template-parts/footer', $footer_layout );
?>

</main><!-- #techsome-main -->

<?php wp_footer(); ?>
</body>
</html>
