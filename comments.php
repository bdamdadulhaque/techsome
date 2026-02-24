<?php
/**
 * Comments template.
 *
 * @package Techsome
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="techsome-comments">
	<?php if ( have_comments() ) : ?>
		<h2 class="techsome-comments__title"><?php comments_number( __( 'No Comments', 'techsome' ), __( '1 Comment', 'techsome' ), __( '% Comments', 'techsome' ) ); ?></h2>
		<ol class="techsome-comments__list"><?php wp_list_comments( array( 'style' => 'ol', 'short_ping' => true ) ); ?></ol>
		<?php the_comments_navigation(); ?>
	<?php endif; ?>
	<?php comment_form(); ?>
</div>
