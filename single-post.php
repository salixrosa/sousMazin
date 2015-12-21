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
		<div class="postmeta">
			<h1>
				<?php the_title(); ?>
			</h1>

			<time datetime='<?php echo get_the_date('Y-m-d'); ?>'>
				<?php echo strtolower(get_the_date()); ?>
			</time>
		</div>
		<div class="postcontent">
	<?php

			the_content();

	?>
		</div>
	</article>

	<?php
	endwhile;

	get_footer();
?>
