<?php

function sM_banner_text_setting_init() {
	register_setting( 'general', 'sM_banner_text' );
	add_settings_field( 'sM_banner_text', 'Header Text for sousMazin Theme', 'sM_banner_text_setting_callback', 'general');
}
add_action( 'admin_init', 'sM_banner_text_setting_init' );

function sM_banner_text_setting_callback(){
	echo '<input name="sM_banner_text" id="sM_banner_text" type="text" class="regular-text" value="' . esc_attr(get_option('sM_banner_text')) . '"> <p class="description">The text in this box will be used in the sousMazin banner. Allows HTML for styling.</p>';
}

function sM_banner_text($echo = true){
	$banner_text = get_option('sM_banner_text');
  $banner_text = $banner_text ? $banner_text : get_bloginfo('name');
	if($echo && $banner_text) {
		echo $banner_text;
	}
	return $banner_text;
}

?>
