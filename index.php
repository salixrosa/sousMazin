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
				<a href="<?php the_permalink(); ?>" class="tosingle">
					<?php the_title(); ?>
				</a>
			</h2>

			<time datetime='<?php echo get_the_date('Y-m-d'); ?>'>
				<?php echo strtolower(get_the_date()); ?>
			</time>

		</header>

		<div class="postcontent">
			<a href="<?php the_permalink(); ?>" class="tosingle">
				<?php the_content(); ?>
			</a>
		</div>
	</article>

	<?php
	endwhile;

	get_footer();
?>
