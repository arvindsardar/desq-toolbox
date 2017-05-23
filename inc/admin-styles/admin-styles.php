<?php
	// ADMIN STYLESHEET
	function load_desq_admin_styles() {
        wp_register_style( 'desq_admin_styles', plugin_dir_url( __FILE__ ) .'/admin-styles.css', false, '1.0.0' );
        wp_enqueue_style( 'desq_admin_styles' );
	}
	add_action( 'admin_enqueue_scripts', 'load_desq_admin_styles' );