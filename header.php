<?php
/**
 *  @package Wordpress
 *  @subpackage sousMazin
 *  @since sousMazin 0
 */
?>

<!DOCTYPE html>

<html>

	<head>




		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" media="screen">
		<meta name="viewport" content="initial-scale=1.0,width=device-width">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/syntaxtheme.css" media="screen">
		<script src="<?php echo get_template_directory_uri(); ?>/components/highlight.js/highlight.pack.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>

		<!--[if lt IE 9]>
		<script src="components/html5shiv/html5shiv.js"></script>
		<![endif]-->

		<title>Salix: a novice web developer's blog</title>

	</head>

	<body>

		<div id="center">

			<header>

				<h1 id="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

				<div id="headerfloat">
					<nav>
						<?php 
							if ( has_nav_menu( 'header-menu' ) ) {
								wp_nav_menu( array( 'container' => 'div', 'container_class' => 'wrapper', 'theme_location' => 'header-menu', 'container_id' => 'main', 'container' => '', 'menu_class' => 'main', 'menu_id' => FALSE, 'before' => "<div class='outerbutton'><div class='innerbutton'></div></div>") );
							}
						?>
					</nav>

					<p id="tagline">
						<?php bloginfo( 'description' ); ?>
					</p>
				</div>
			
			</header>

