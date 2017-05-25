<?php
/**
	* Plugin Name: DeSQ ToolBox
	* Plugin URI: https://github.com/arvindsardar/desq-toolbox
	* Description: Wordpress Snippets
	* Version: 1.2
	* Author: Arvind Sardar
	* Author URI: http://designsupport.com.au
	* License: GPL2
	*/
	
/*	---------------------------------------------------
	MODULES
	--------------------------------------------------- */
	// Load values from the settings page
	$desq_setting = get_option('desq_settings');

/*	settings page */
	require_once plugin_dir_path( __FILE__ ) . 'inc/settings.php';

/*	Load Custom Admin Styles */
	require_once plugin_dir_path( __FILE__ ) . 'inc/admin-styles/admin-styles.php';

/*	dev tools */
	if( $desq_setting['desq_dev_tools'] == '1' ) {
		require_once plugin_dir_path( __FILE__ ) . 'inc/dev_tools.php';
	}

/*	breakpoints */
	if( $desq_setting['desq_breakpoints'] == '1' ) {
		require_once plugin_dir_path( __FILE__ ) . 'inc/breakpoints/breakpoints.php';
	}

/*	admin tweaks */
	if( $desq_setting['desq_admin_tweaks'] == '1' ) {
		require_once plugin_dir_path( __FILE__ ) . 'inc/admin_tweaks.php';
	}

/*	Keep WP Updated */
	if( $desq_setting['desq_wp_updates'] == '1' ) {
		require_once plugin_dir_path( __FILE__ ) . 'inc/wp_updates.php';
	}

/*	Load flexBoxGrid */
	if( $desq_setting['desq_flexboxgrid'] == '1' ) {
		require_once plugin_dir_path( __FILE__ ) . 'inc/flexboxgrid/desq-flexboxgrid.php';
	}

/*	Add a Mobile Menu */
	if( $desq_setting['desq_mobile_menu'] == '1' ) {
		require_once plugin_dir_path( __FILE__ ) . 'inc/desq-mobilemenu/desq-mobile-menu.php';
	}

/*	Add JQUI Accordions & Tabs */
	if( $desq_setting['desq_jqui'] == '1' ) {
		require_once plugin_dir_path( __FILE__ ) . 'inc/desq-jqueryui-tabs-accordions/desq-jqueryui-tabs-accordions.php';
	}

/*	Enable Slick Slider */
	if( $desq_setting['desq_slickslider'] == '1' ) {
		require_once plugin_dir_path( __FILE__ ) . 'inc/dsq-slick-slider/dsq-slick-slider.php';
	}



//Add a link to the Settings Page
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'desq_action_links' );

function desq_action_links( $links ) {
   $links[] = '<a href="'. esc_url( get_admin_url(null, 'options-general.php?page=desq_toolbox&tab=settings') ) .'">Settings</a>';
   return $links;
}

// UPDATER
require_once( 'BFIGitHubPluginUploader.php' );
if ( is_admin() ) {
    new BFIGitHubPluginUpdater( __FILE__, 'arvindsardar', "desq-toolbox" );
}




