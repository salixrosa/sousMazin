<?php
/**
 * @package Wordpress
 * @subpackage sousMazin
 * @since sousMazin 1.0
 */
?>

<article>

		<h2 class="title">
			<a href="<?php echo get_permalink(); ?>"><?php the_title();?></a>
		</h2>

		<?php if ( $post->post_type == "post" ): ?>
			<div class="date">
				<?php echo get_the_date(); ?>
			</div>
		<?php endif; ?>

	<div class="content">
		<?php
			if ( $post->post_excerpt && !is_single() )
			{
				the_excerpt();
				echo "<a href=\"" . get_permalink() . "\" class=\"nounderline\" ><div class='more'>Continue reading " . "\"" . ucwords(get_the_title()) . "\"" . "</div></a>" ;
			}
			else {
				the_content("<div class='more'>Continue reading " . "\"" . ucwords(get_the_title()) . "\"" . "</div>");
			}
		?>
	</div>

</article>
