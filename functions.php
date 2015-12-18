<?php
/**
 *  @package Wordpress
 *  @subpackage sousMazin
 *  @since sousMazin 1.0
 */

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

function sousMazin_fonts() {
  $fonts_url = '';
 	$fonts     = array();
 	$subsets   = 'latin';
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'sousMazin' ) ) {
		$fonts[] = 'Open Sans:400,400italic,500,600,700,800';
	}
 	if ( $fonts ) {
     $fonts_url = add_query_arg( array(
       'family' => urlencode( implode( '|', $fonts ) ),
       'subset' => urlencode( $subsets ),
     ), '//fonts.googleapis.com/css' );
  }
  return $fonts_url;
}

function sousMazin_scripts() {
	wp_enqueue_style( 'sousMazin_style', get_stylesheet_uri(), array(), '20151218' );
  wp_enqueue_style('sousMazin_fonts', sousMazin_fonts(), array(), null );
	wp_enqueue_style( 'fontawesomeCDN', "//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" );
}
add_action( 'wp_enqueue_scripts', 'sousMazin_scripts' );

if(!is_admin()){
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'rest_output_link_wp_head');
}

foreach(glob(get_template_directory() . '/includes/*.php') as $includes_file){
	include_once $includes_file;
}

function sousmazin_filter_title($title){ // Allows users to set sitenames with html encoding for the banner, without messing up title tags.
  return strip_tags(html_entity_decode($title));
}
add_filter('wp_title', 'sousmazin_filter_title');

?>
