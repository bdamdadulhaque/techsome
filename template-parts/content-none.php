<?php
/**
 * No content found.
 *
 * @package Techsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="techsome-no-results">
	<header><h1 class="techsome-page-title"><?php esc_html_e( 'Nothing Found', 'techsome' ); ?></h1></header>
	<div class="techsome-prose">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'techsome' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
		<?php elseif ( is_search() ) : ?>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search. Please try again with different keywords.', 'techsome' ); ?></p>
		<?php else : ?>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'techsome' ); ?></p>
		<?php endif; ?>
	</div>
</section>
