<?php

function sM_Enable_Mobile_Buttons($item_output, $item, $depth, $args){
  if($args->theme_location == 'header-menu'){
    $item_output .= $depth ? '' : '<div class="outerbutton"></div>';
  }
  return $item_output;
}
add_filter('walker_nav_menu_start_el', 'sM_Enable_Mobile_Buttons', 10, 4);

?>
