<?php
/**
 * @package Wordpress
 * @subpackage sousMazin
 * @since sousMazin 0
 */
?>

<div class="discussion">

	<div class="comments">
		<p class="numberofcomments">
			<?php
				$number = wp_count_comments();
				$text = "";
				$plural = "";
				$number = $number->total_comments;
				if ($number == 1) {
					$text = 'There is';
					$plural = 'comment';
				}
				else {
					$text = 'There are';
					$plural = 'comments';
				}
				echo $text . ' ' . $number . ' ' . $plural . ' here.';
			?>
		</p>
		<p class="commenttext">
			<?php
				if(comments_open()) {
					echo "You may leave a comment below.";
				}
				else {
					echo "Commenting is dissabled.";
				}
			?>
		</p>
	</div>

	<div class="commenting">
		<?php 
			if(!get_option('require_name_email')) {
				$args = [
					'fields' => '',
					'comment_notes_before' => '',
					'comment_field' => '<textarea id="comment"></textarea>',
					'comment_notes_after' => '',
					'title_reply' => '',
				];
			}
			comment_form($args);
		?>
	</div>

	<?php if ( have_comments() ) : ?>

		<div class="comment">

			<div class="comment">
				<?php
					wp_list_comments();
				?>
			</div>

		</div>

	<?php endif; // have_comments() ?>

</div>