<?php
	/**
	 *  @package Wordpress
	 *  @subpackage sousMazin
	 *  @since sousMazin 1.0
	 */
	get_header();
	?>

	<article>
		<h2>
			Sorry, you've gotten a 404 error.
		</h2>

		<p class="fifty push">
			The server can't find what you requested. Maybe you should try using the main menu to find what you're looking for, or <a class="contenta" href="mailto:<?php echo sM_admin_email(); ?>">shoot me an email</a> (and tell me something's gone wrong!).
		</p>
	</article>

	<?php

	get_footer();
?>
