<?php
/**
 *  This file notifies the admin of their error if they switch to sousMazin with an unsupported ( <4.3 ) version of WP.
 *  @package Wordpress
 *  @subpackage sousmazin
 *  @since sousmazin 1.0
 */

function sousmazin_when_to_warn() {
  add_action( 'admin_notices', 'sousmazin_theme_warning' );
}
add_action( 'after_switch_theme', 'sousmazin_when_to_warn' );

function sousmazin_theme_warning() {
	$message = sprintf( __( 'sousMazin requires at least WordPress 4.3. You are running version %s.', 'sousmazin' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}
