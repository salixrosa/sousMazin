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
				<?php the_time(); ?>
			</div>
		<?php endif; ?>

	<div class="content">
		<?php
			if ( $post->post_excerpt && !is_single() )
			{
				the_excerpt();
<<<<<<< HEAD
				echo "<a href=\"" . get_permalink() . "\" class=\"nounderline\" ><div class='more'>Continue reading " . "\"" . ucwords(get_the_title()) . "\"" . "</div></a>" ;
=======
				echo "<a href=" . get_permalink() . "><div class='more'>Continue reading " . "\"" . ucwords(get_the_title()) . "\"" . "</div></a>" ;
>>>>>>> 9675a29e0f20757d168d489d84d55f17ef514591
			}
			else {
				the_content("<div class='more'>Continue reading " . "\"" . ucwords(get_the_title()) . "\"" . "</div>");
			}
		?>
	</div>

</article>
