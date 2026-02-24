<?php
/**
 * Template Name: Services
 * Services page with pricing (Installation, Customization, Ongoing, etc.).
 *
 * @package Techsome
 */

get_header();

$services_contact_url = techsome_mod( 'techsome_services_contact_url', '' );
if ( empty( $services_contact_url ) ) {
	$services_contact_url = get_permalink( get_page_by_path( 'contact' ) ) ?: '#contact';
}
?>

<div class="techsome-container techsome-content techsome-services-page">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'techsome-page techsome-services-article' ); ?>>
			<header class="techsome-page__header">
				<h1 class="techsome-page__title"><?php the_title(); ?></h1>
				<?php if ( has_excerpt() ) : ?>
					<p class="techsome-page__excerpt"><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
				<?php endif; ?>
			</header>
			<div class="techsome-services-page__intro techsome-prose">
				<?php the_content(); ?>
			</div>
			<?php
			// If content has no service shortcodes, output default service cards.
			$content = get_post()->post_content;
			$has_services = ( false !== strpos( $content, 'techsome_service' ) || false !== strpos( $content, 'techsome_services' ) );
			if ( ! $has_services ) {
				echo do_shortcode(
					'[techsome_services title="' . esc_attr__( 'Our Services', 'techsome' ) . '" subtitle="' . esc_attr__( 'Professional setup, customization, and ongoing support for CharityGlow.', 'techsome' ) . '"]' .
					'[techsome_service_card title="' . esc_attr__( 'Installation & Setup', 'techsome' ) . '" description="' . esc_attr__( 'We install CharityGlow on your site, configure settings, and ensure everything works with your theme.', 'techsome' ) . '" price="' . esc_attr__( 'From $99', 'techsome' ) . '" button_text="' . esc_attr__( 'Get started', 'techsome' ) . '" button_url="' . esc_url( $services_contact_url ) . '" icon="install"]' .
					'[techsome_service_card title="' . esc_attr__( 'Customization Service', 'techsome' ) . '" description="' . esc_attr__( 'Custom forms, branding, and workflows tailored to your organization.', 'techsome' ) . '" price="' . esc_attr__( 'From $199', 'techsome' ) . '" button_text="' . esc_attr__( 'Get started', 'techsome' ) . '" button_url="' . esc_url( $services_contact_url ) . '" icon="customize"]' .
					'[techsome_service_card title="' . esc_attr__( 'Ongoing Service', 'techsome' ) . '" description="' . esc_attr__( 'Regular updates, backups, and priority support so you can focus on fundraising.', 'techsome' ) . '" price="' . esc_attr__( 'From $49/mo', 'techsome' ) . '" button_text="' . esc_attr__( 'Get started', 'techsome' ) . '" button_url="' . esc_url( $services_contact_url ) . '" icon="ongoing"]' .
					'[/techsome_services]'
				);
			}
			?>
		</article>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
