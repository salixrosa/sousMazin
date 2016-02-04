<?php

function sM_admin_email() {
  if(get_super_admins()) {
    $superadmins = get_users(array('role' => 'administrator'));
    $userdata = get_userdata($superadmins[0] -> data -> ID);
    return($userdata -> user_email);
  }
  else return "email@willowsells.com";
}

?>
