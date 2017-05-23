<?php
/**
	* Plugin Name: DSQ Slick Slider & Carousel
	* Plugin URI: http://designsupport.com.au
	* Description: Quick implementation of Slick Slider from <a href="http://kenwheeler.github.io/slick/">kenwheeler.github.io/slick/</a>
	* Version: 1.0
	* Author: Arvind Sardar
	* Author URI: http://designsupport.com.au
	* License: GPL2
	* Settings: http://designsupport.com.au
	*/
	
//add initialisation js
	add_action( 'wp_enqueue_scripts', 'dsq_slick_slider_js' );
	function dsq_slick_slider_js() {
		wp_enqueue_script( 'dsq-slick-slider-js', plugin_dir_url( __FILE__ ) . 'dsq-slick-slider.js','', '1.0', true );
		wp_enqueue_script( 'source-slick-slider-js', plugin_dir_url( __FILE__ ) . 'slick/slick.min.js', '', '1.0', true );
	}

//add css
	add_action( 'wp_enqueue_scripts', 'dsq_slick_slider_css' );
	function dsq_slick_slider_css() {
		wp_enqueue_style( 'slick-slider-style', plugin_dir_url( __FILE__ ) . 'slick/slick.css' );
		wp_enqueue_style( 'slick-slider-theme', plugin_dir_url( __FILE__ ) . 'slick/slick-theme.css' );
	}

