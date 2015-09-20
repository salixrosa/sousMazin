<?php
/**
 *  @package Wordpress
 *  @subpackage sousMazin
 *  @since sousMazin 1.0
 */

if ( version_compare( $GLOBALS['wp_version'], '4.3', '<' ) ) {
 require get_template_directory() . '/includes/incompatible.php';
}

if (!isset($content_width)) {
	$content_width = 700;
}

if (!function_exists('sousMazin_setup')) {
	function sousMazin_setup() {

		add_theme_support( 'title-tag' );

		register_nav_menus(
	    array(
	      'header-menu' => __( 'Header Menu' ),
	      'footer-menu' => __( 'Footer Menu' )
	    )
	  );
	}
}
add_action( 'after_setup_theme', 'sousMazin_setup' );

function sousMazin_scripts() {
	wp_enqueue_style( 'sousMazin_style', get_stylesheet_uri(), array(), '20150920' );
	wp_enqueue_style( 'fontawesomeCDN', "//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" );
}
add_action( 'wp_enqueue_scripts', 'sousMazin_scripts' );

function sousmazin_filter_title($title){
  return strip_tags(html_entity_decode($title));
}
add_filter('wp_title', 'sousmazin_filter_title');
?>
