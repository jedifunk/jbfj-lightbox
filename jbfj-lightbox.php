<?php
/*
	Plugin Name: JBFJ Lightbox
	Author: Bryce Flory and Chad Sanda
	Author URI: http://bryceflory.com
	Version: 1.1
*/
//Add Javascript
add_action('wp_print_scripts', 'jbfj_lightbox_scripts');

function jbfj_lightbox_scripts() {
	//register
	wp_register_script('jbfj_lightbox', plugins_url('lib/jquery.magnific-popup.min-1.0.js', __FILE__), array('jquery'));
	
	wp_enqueue_script('jbfj_lightbox');
	
	wp_enqueue_style('lightbox', plugins_url('lib/lightbox.css', __FILE__));
}