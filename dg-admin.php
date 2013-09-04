<?php
/*
Plugin Name: DG Admin Theme
Description: A custom admin theme and client logo
Author: Lewis Nixon and Ross Tweedie
Version: 1.0
Author URI: http://www.dachisgroup.com/
*/

function dg_admin() {
	wp_enqueue_style( 'dg-admin-styles', plugins_url( 'css/dg-admin-bar.css', __FILE__ ), array(), 1 );
}

add_action('admin_head', 'dg_admin');