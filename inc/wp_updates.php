<?php
/*	---------------------------------------------------
	ENABLE AUTO UPDATES
	--------------------------------------------------- */
	add_filter( 'allow_dev_auto_core_updates', '__return_true' );       // Enable development updates 
	add_filter( 'allow_minor_auto_core_updates', '__return_true' );     // Enable minor updates
	add_filter( 'allow_major_auto_core_updates', '__return_false' );    // Enable major updates
	add_filter( 'auto_update_plugin', '__return_true' );				// Enable Plugin Updates
	add_filter( 'auto_update_theme', '__return_true' );					// Enable Theme UPdates