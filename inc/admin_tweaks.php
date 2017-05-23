<?php
/* --------------------------------------------- */
/* ADMIN TWEAKS
/* --------------------------------------------- */
	// set the post revisions unless the constant was set in wp-config.php
	add_filter( 'wp_revisions_to_keep', 'desq_limit_revisions', 10, 2 );

	function desq_limit_revisions( $num ) { 
	 $num = 3;
	 return $num;
	}

	// redirect users to front page after login
	add_filter( 'login_redirect', 'desq_login_redirect' );
	function desq_login_redirect() {
        return home_url();
	}

	// enable shortcodes in text widgets
	add_filter('widget_text','do_shortcode');


/* --------------------------------------------- */
/* EXTRA MENU ITEMS UNDER SITE NAME
/* --------------------------------------------- */
	add_action( 'admin_bar_menu', 'desq_more_admin', 900 );
	function desq_more_admin($wp_admin_bar) {
		$args = array(
			'id'     => 'shortcuts',
			'title'  => 'Shortcuts',
			'href'   => '#'
		);
		$wp_admin_bar->add_node( $args );	

				$args = array();
		
				array_push($args,array(
					'id'		=>	'desqpages',
					'title'		=>	'All Pages',
					'href'		=>	'/wp-admin/edit.php?post_type=page',
					'parent'	=>	'shortcuts',
				));

				array_push($args,array(
					'id'		=>	'desqposts',
					'title'		=>	'All Posts',
					'href'		=>	'/wp-admin/edit.php',
					'parent'	=>	'shortcuts',
				));

				array_push($args,array(
					'id'		=>	'desq_gensettings',
					'title'		=>	'General Settings',
					'href'		=>	'/wp-admin/options-general.php',
					'parent'	=>	'shortcuts',
				));

				array_push($args,array(
					'id'		=>	'desq_plugins',
					'title'		=>	'Plugins',
					'href'		=>	'/wp-admin/plugins.php',
					'parent'	=>	'shortcuts',
				));

				array_push($args,array(
					'id'		=>	'desq_plugins_install',
					'title'		=>	'Plugins (Install)',
					'href'		=>	'/wp-admin/plugin-install.php',
					'parent'	=>	'shortcuts',
				));

				array_push($args,array(
					'id'		=>	'desqthemes',
					'title'		=>	'Themes',
					'href'		=>	'/wp-admin/themes.php',
					'parent'	=>	'shortcuts',
				));

				array_push($args,array(
					'id'		=>	'desqwidgets',
					'title'		=>	'Widgets',
					'href'		=>	'/wp-admin/widgets.php',
					'parent'	=>	'shortcuts',
				));

				array_push($args,array(
					'id'		=>	'desqmenus',
					'title'		=>	'Menus',
					'href'		=>	'/wp-admin/nav-menus.php',
					'parent'	=>	'shortcuts',
				));

				array_push($args,array(
					'id'		=>	'desq_users',
					'title'		=>	'Users',
					'href'		=>	'/wp-admin/users.php',
					'parent'	=>	'shortcuts',
				));

				array_push($args,array(
					'id'		=>	'desq_edit_css',
					'title'		=>	'Edit Theme CSS',
					'href'		=>	'/wp-admin/theme-editor.php',
					'parent'	=>	'shortcuts',
				));


				// sort($args);
				for($a=0;$a<sizeOf($args);$a++)
				{
					$wp_admin_bar->add_node($args[$a]);
				}	
	} 

/* --------------------------------------------- */
/* REMOVE WP LOGO MENU
/* --------------------------------------------- */
	add_action( 'admin_bar_menu', 'desq_hide_unwanted', 999 );

	function desq_hide_unwanted( $wp_admin_bar ) {
		$wp_admin_bar->remove_node( 'wp-logo' );
		$wp_admin_bar->remove_node( 'customize' );
		$wp_admin_bar->remove_node( 'comments' );
	}

/* --------------------------------------------- */
/* REMOVE EMOJI
/* --------------------------------------------- */
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');


/* --------------------------------------------- */
/* DISABLE RSS FEEDS
/* --------------------------------------------- */
	function itsme_disable_feed() {
	 wp_die( __( 'No feed available, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">homepage</a>!' ) );
	}

	add_action('do_feed', 'itsme_disable_feed', 1);
	add_action('do_feed_rdf', 'itsme_disable_feed', 1);
	add_action('do_feed_rss', 'itsme_disable_feed', 1);
	add_action('do_feed_rss2', 'itsme_disable_feed', 1);
	add_action('do_feed_atom', 'itsme_disable_feed', 1);
	add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
	add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);