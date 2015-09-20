<?php
/**
 * @package Wordpress
 * @subpackage sousMazin
 * @since sousMazin 1.0
 */
	get_header();
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>
        <article id="last">
        	<div class="content">
        		<?php the_content(); ?>
        	</div>
        </article> <?php
			}
		}
	get_footer();
?>
