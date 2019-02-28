<?php
/**
 * @package erobbins Helper
 * @version 1.0
 */
/*
Plugin Name: erobbins-toolkit
Plugin URI: http://perthizweb.com.au/plugin
Description: This is a helper plugin for all erobbins
Version: 1.0
Author Name: Fajle Rabbi
Author URI: http:/perthbizweb.com.au/
Text Domain: erobbins
*/


function erobbins_toolkit_scripts(){
	wp_enqueue_style( 'owl-carousel', plugins_url( '/assets/css/owl.carousel.min.css', __FILE__ ), array(), 'v2.2.1', 'all' );
	wp_enqueue_style( 'slickslider', plugins_url( '/assets/css/slick.css', __FILE__ ), array(), '1.8.1', 'all' );
	wp_enqueue_style( 'animate-css', plugins_url( '/assets/css/animate.css', __FILE__ ), array(), 'v2.2.1', 'all' );
	wp_enqueue_style( 'erobbins-toolkit', plugins_url( '/assets/css/erobbins-toolkit.css', __FILE__ ), array(), '1.0', 'all' );

	wp_enqueue_script( 'owl-carousel', plugins_url( '/assets/js/owl.carousel.min.js', __FILE__ ), array('jquery'), 'v2.2.1', true );
	wp_enqueue_script( 'slickslider-js', plugins_url( '/assets/js/slick.min.js', __FILE__ ), (__FILE__ ), array('jquery'), '1.8.1', true );
	wp_enqueue_script( 'main-script', plugins_url( '/assets/js/main.js', __FILE__ ), array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'erobbins_toolkit_scripts' );









include_once('inc/erobbins-shortcodes.php');
include_once('inc/erobbins-kc-addons.php');

