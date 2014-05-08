<?php
/**
 * This is the function file. In the most general sense, is adds capabilities
 * to a wordpress theme. That's all I have to say on it atm.
 *
 *  @package Wordpress
 *  @subpackage sousMazin
 *  @since sousMazin 0
 */
function my_custom_more_text() {
	return "<a href='" . get_permalink() . "'><div id='more'>Continue reading " . "\"" . ucwords(get_the_title()) . "\"" ."</a></div>";
}


function more_posts() {
  global $wp_query;
  return $wp_query->current_post + 1 < $wp_query->post_count;
}


function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


function home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );


function seesyntax( $text ) {
  $preblocks = array("<pre class='portrait'>", "<pre class='landscape'>", "</pre>");
  $highlightblocks = array("<pre><code class='portrait'>", "<pre><code class='landscape'>", "</code></pre>");
  $text = str_replace($preblocks, $highlightblocks, $text);
  return $text;
}
add_filter('the_content', 'seesyntax');

?>