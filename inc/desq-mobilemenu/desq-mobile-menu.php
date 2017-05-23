<?php
/**
	* Plugin Name: DeSQ Mobile Menu
	* Plugin URI: 
	* Description: A lightweight Mobile Menu - edit freely to make changes to Hooks, JS & CSS
	* Version: 3.0
	* Author: A/S
	* Author URI: 
	* License: GPL2
	*/

//add js
	function desq_mobilemenu_script() {
		wp_register_script('desq-mobile-menu', plugins_url('desq-mobile-menu.js', __FILE__), array('jquery'), '', '1.1', true);
		wp_enqueue_script('desq-mobile-menu');
	}
	add_action( 'wp_enqueue_scripts', 'desq_mobilemenu_script' );  

//add css	
	function desq_mobilemenu_styles() {
		wp_enqueue_style( 'desq_mobilemenu_styles', plugin_dir_url( __FILE__ ) . 'desq-mobile-menu.css' );
	}
	add_action( 'wp_enqueue_scripts', 'desq_mobilemenu_styles' );

// add menu html
	function desq_mobilemenu_markup() {
		echo '<div class="desq-mobilemenu-button">&#9776; Menu</div>';
		echo '<div class="desq-mobilemenu-overlay hidden">';
		echo '<div class="desq-mobilemenu-overlay-content">';
		wp_nav_menu(  array('menu' => 'MainMenu' ) );
		echo '</div></div>';
	}
	add_action( 'get_header', 'desq_mobilemenu_markup', 30 );
