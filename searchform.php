<?php
/**
 * Search form.
 *
 * @package Techsome
 */

?>
<form role="search" method="get" class="techsome-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="techsome-search-field"><span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'techsome' ); ?></span></label>
	<input type="search" id="techsome-search-field" class="techsome-search-form__input" placeholder="<?php esc_attr_e( 'Search&hellip;', 'techsome' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="techsome-btn techsome-search-form__submit"><?php esc_html_e( 'Search', 'techsome' ); ?></button>
</form>
