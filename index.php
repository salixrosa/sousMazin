<?php
	/**
	 *  @package Wordpress
	 *  @subpackage sousMazin
	 *  @since sousMazin 1.0
	 */
	get_header();
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'content' );
			}
		}
	get_footer();
?>
