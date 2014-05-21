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

function cthulusyntaxhelper($posttext) {

  preg_match_all('@<pre(?:\sclass\=.*?)?><code(?:\sclass\=.*?)?>@iU', $posttext, $openingregex, PREG_OFFSET_CAPTURE);
  preg_match_all('@</code>(?:\s*\n*)*</pre>@i', $posttext, $closingregex, PREG_OFFSET_CAPTURE);

  $numberofopenblocks = count($openingregex[0]);
  $numberofclosedblocks = count($closingregex[0]);

  if ($numberofopenblocks !== $numberofclosedblocks OR $numberofopenblocks == 0){
    return "ERROR" . $posttext;
  }
  else {
   $i = 1;
   while($i <= $numberofopenblocks){
     $offsetkey = $openingregex[0][$i-1][1];
     $orderedarray[$offsetkey] = array($openingregex[0][$i-1][0], 1);
     $i++;
   }
   $i = 1;
   while($i <= $numberofclosedblocks){
     $offsetkey = $closingregex[0][$i-1][1];
     $orderedarray[$offsetkey] = array($closingregex[0][$i-1][0],-1);
     $i++;
   }

   ksort($orderedarray);

   $blocks = array();
   $blockcounter = 0;
   $blocknumber = 1;

   foreach($orderedarray as $key => $match){
      $blockcounter = $blockcounter + $match[1];
      if($blockcounter == 1 && $match[1] == 1){
       $blocks[$blocknumber][0] = $key+strlen($orderedarray[$key][0]);
      }
      if($blockcounter == 0 && $match[1] == -1) {
        $blocks[$blocknumber][1] = $key;
        $blocknumber++;
      }
    }

    $arraytext = array();
    foreach($blocks as $key => $block){
     $blocks[$key][2] = $blocks[$key][1]-$blocks[$key][0];
     $blocks[$key][3] = htmlspecialchars(htmlspecialchars_decode(substr($posttext,$blocks[$key][0],$blocks[$key][2])));

     $arraytext[] = substr($posttext, 0, $blocks[$key][0]);
     $arraytext[] = $blocks[$key][3];
     if(empty($blocks[($key+1)])){
      $arraytext[] = substr($posttext, $blocks[$key][1]);
     }
     else{
      $arraytext[] = substr($posttext, $blocks[$key][1], $blocks[$key][0]);
     }
    }

    $newtext = implode($arraytext);

    return $newtext;
  }

}
add_filter( 'content_save_pre', 'cthulusyntaxhelper');

?>