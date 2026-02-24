<?php
/**
 * Template Name: Contact
 * Contact page with form placeholder and optional address.
 *
 * @package Techsome
 */

get_header();
?>

<div class="techsome-container techsome-content techsome-contact-page">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'techsome-page techsome-contact' ); ?>>
			<header class="techsome-page__header">
				<h1 class="techsome-page__title"><?php the_title(); ?></h1>
				<?php if ( has_excerpt() ) : ?>
					<p class="techsome-page__excerpt"><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
				<?php endif; ?>
			</header>
			<div class="techsome-contact__body techsome-prose"><?php the_content(); ?></div>
			<?php if ( ! has_blocks() && ! has_shortcode( get_post()->post_content, 'contact-form-7' ) ) : ?>
				<div class="techsome-contact__form techsome-prose">
					<p><?php esc_html_e( 'Add a contact form block or shortcode (e.g. Contact Form 7) in the page content.', 'techsome' ); ?></p>
				</div>
			<?php endif; ?>
		</article>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
