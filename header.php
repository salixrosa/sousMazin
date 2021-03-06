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
		<?php
		if(file_exists(get_template_directory() . "/analyticstracking.php")){include_once("analyticstracking.php");}
		wp_head();
		?>
	</head>

	<body <?php body_class(); ?>>

		<div class="center">

			<header id="banner">
				<?php echo is_front_page() ? "<h1>" : "<h2>" ; ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php if(function_exists('sM_banner_text')){ sM_banner_text(); } else echo get_bloginfo('name'); ?>
					</a>
				<?php echo is_front_page() ? "</h1>" : "</h2>" ; ?>
				<nav role="navigation">
					<?php
						if ( has_nav_menu( 'header-menu' ) ) {
							wp_nav_menu( array(
								'theme_location' 	=> 'header-menu',
								'container' 			=> '',
								'menu_id'					=> 'header-menu'
							));
						}
					?>
				</nav>
				<p id="tagline">
					<?php bloginfo( 'description' ); ?>
				</p>
			</header>
