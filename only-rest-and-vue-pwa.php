<?php
/**
 * @package REST Only & VueJS PWA
 * @version 1.0
 */
/*
Plugin Name: REST Only & VueJS PWA
Plugin URI: https://merakii.co/rest-only-wp
Description: REST Only & VueJS PWA Wordpress Project
Author: Team Merakii
Version: 1.0
Author URI: https://merakii.co
*/

if ( ! defined( 'WPINC' ) ) {
	die();
}

class REST_Only_And_Vue_PWA {

	public function __construct(){

		add_action( 'template_redirect', array( $this, 'hander_redirect' ) );
	}

	public function hander_redirect(){

		if ( ! is_front_page() ) {
			wp_redirect( home_url() );
			exit;
		} else {
			wp_redirect(home_url('/public'));
			// $this->render_UI();
			exit;
		}
	}

	public function render_UI(){
		echo file_get_contents( plugin_dir_path( __FILE__ ) . "dist/index.html");
	}
	
}

new REST_Only_And_Vue_PWA();