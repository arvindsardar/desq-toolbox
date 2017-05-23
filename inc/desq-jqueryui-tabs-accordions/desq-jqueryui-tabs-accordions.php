<?php
/**
	* Plugin Name: DeSQ Accordions & Tabs
	* Plugin URI: http://designsupport.com.au
	* Description: This plugin enables the built-in jQueryUI Tabs & Accordions.
	* Version: 1.0
	* Author: Arvind Sardar
	* Author URI: http://designsupport.com.au
	* License: GPL2
	*/
	
	add_action( 'wp_enqueue_scripts', 'desq_add_jqueryui_script' );
	function desq_add_jqueryui_script() {
		wp_enqueue_script( 'jqueryui_tabs_accordions', plugin_dir_url( __FILE__ ) . 'js/jqui_tabs_accordions.js', array( 'jquery-ui-core', 'jquery-ui-accordion', 'jquery-ui-tabs' ), '1.0', true );
	}
	
	add_action( 'wp_enqueue_scripts', 'desq_add_jqueryui_styles' );
	function desq_add_jqueryui_styles() {
		wp_enqueue_style( 'jqui-styles', plugin_dir_url( __FILE__ ) . 'css/jqui-style.css' );
	}
