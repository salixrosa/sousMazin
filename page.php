<?php
	/**
	 *  @package Wordpress
	 *  @subpackage sousMazin
	 *  @since sousMazin 1.0
	 */
	get_header();

	while(have_posts()) : the_post();
	?>

	<article>
		<header class="postmeta">
			<h2>
				<?php the_title(); ?>
			</h2>
		</header>

		<div class="postcontent">
			<?php the_content(); ?>
		</div>
	</article>

	<?php
	endwhile;

	get_footer();
?>
