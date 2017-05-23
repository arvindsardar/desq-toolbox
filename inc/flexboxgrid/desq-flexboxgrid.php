<?php
/**
	* Plugin Name: DeSQ Flex Box Grid
	* Plugin URI: http://designsupport.com.au
	* Description: A grid system based on the flex display property. <a href="http://flexboxgrid.com/">FlexBoxGrid Page</a>.
	* Version: 1.0
	* Author: Arvind Sardar
	* Author URI: http://designsupport.com.au
	* License: GPL2
	* Settings: http://designsupport.com.au
	*/
	
	add_action( 'wp_enqueue_scripts', 'desq_flexboxgrid_style' );
	function desq_flexboxgrid_style() {
		wp_enqueue_style( 'flexboxgrid-style', plugin_dir_url( __FILE__ ) . 'flexboxgrid.min.css' );
	}
