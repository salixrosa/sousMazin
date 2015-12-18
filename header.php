<?php
/**
 *  @package Wordpress
 *  @subpackage sousMazin
 *  @since sousMazin 1.0
 */
?>

<!DOCTYPE html>

<html>

	<head>
		<meta name="viewport" content="initial-scale=1.0,width=device-width">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div class="center">

			<header id="banner">
				<div id="sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo htmlspecialchars_decode(get_bloginfo('name')); ?></a></div>
				<nav role="navigation">
					<?php
						if ( has_nav_menu( 'header-menu' ) ) {
							wp_nav_menu( array(
								'theme_location' 	=> 'header-menu',
								'container' 			=> '',
								'menu_id'					=> 'header-menu',
								'walker'					=> new Mobile_Button_Enabled_Menu
							));
						}
					?>
				</nav>
				<p id="tagline">
					<?php bloginfo( 'description' ); ?>
				</p>
			</header>
