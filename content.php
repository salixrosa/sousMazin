<?php
/**
 * @package Wordpress
 * @subpackage sousMazin
 * @since sousMazin 0
 */
?>

<article <?php if( !more_posts() ) {echo "id=last";} ?> >

		<div class="title">
			<a href="<?php echo get_permalink(); ?>"><?php the_title();?></a>
		</div>


		<?php if ( $post->post_type == "post" ): ?>
			<div class="date">
				<?php the_date(); ?>
			</div>
		<?php endif; ?>

	<div class="content">
		<?php 
			if ( $post->post_excerpt !== "" && !is_singular())
			{
				the_excerpt();
				echo my_custom_more_text();
			}
			else {
				the_content(my_custom_more_text());
			}
		?>
	</div>

	<div class="clear">
	</div>

</article>