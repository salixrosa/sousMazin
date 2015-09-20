<?php
/**
 *  @package Wordpress
 *  @subpackage sousMazin
 *  @since sousMazin 1.0
 */
?>
		</div>
		<footer>
			<?php wp_nav_menu( array(
				'theme_location' 	=> 'footer-menu',
				'fallback_cb' 		=> false,
				'container' 			=> '',
				'menu_class' 			=> 'main',
				'menu_id' 				=> 'media'
			)); ?>
			<p> sousMazin 1.0 </p>
		</footer>
	</body>
</html>
