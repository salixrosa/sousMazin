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
		<div id="center">
			<header>
				<div id="sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo htmlspecialchars_decode(get_bloginfo('name')); ?></a></div>
				<div id="headerfloat">
					<nav>
						<?php
							if ( has_nav_menu( 'header-menu' ) ) {
								wp_nav_menu( array(
									'theme_location' 	=> 'header-menu',
									'container' 			=> '',
									'menu_class' 			=> 'main',
									'before' 					=> "<div class='outerbutton'><div class='innerbutton'></div></div>"
								));
							}
						?>
					</nav>
					<p id="tagline">
						<?php bloginfo( 'description' ); ?>
					</p>
				</div>

			</header>
