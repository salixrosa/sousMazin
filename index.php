<?php
/**
 *  @package Wordpress
 *  @subpackage sousMazin
 *  @since sousMazin 0
 */

get_header();

?>


<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'content' );
		}
	}
?>



<?php get_footer(); ?>

