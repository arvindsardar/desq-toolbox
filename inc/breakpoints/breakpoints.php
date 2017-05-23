<?php
/*	---------------------------------------------------
	DEV: DISPLAY BREAKPOINTS
	--------------------------------------------------- */
	function desq_dev_styles() {
		wp_enqueue_style( 'desq-dev-styles', plugin_dir_url( __FILE__ ) . 'dev-styles.css' );
	}
	add_action( 'wp_enqueue_scripts', 'desq_dev_styles' );

