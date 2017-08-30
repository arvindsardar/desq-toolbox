<?php
add_action( 'admin_menu', 'desq_add_admin_menu' );
add_action( 'admin_init', 'desq_settings_init' );

/* --------------------------------------------- */
/* Create the Menu Item
/* --------------------------------------------- */
function desq_add_admin_menu() { 
	add_options_page( 
		'DeSQ Toolbox', 	// Page Title
		'DeSQ Toolbox',  	// Menu Name
		'manage_options', 	// Limit Capabilities
		'desq_toolbox', 	// Menu Slug
		'desq_options_page' // Function Name
	);
}

/* --------------------------------------------- */
/* The Field Settings
/* --------------------------------------------- */
function desq_settings_init() { 
	register_setting( 'pluginPage', 'desq_settings' );

//  MAKE A SECTION
	add_settings_section(
		'desq_options_section01', 
		__( '', 'wordpress' ), 
		'desq_settings_section_callback', 
		'pluginPage'
	);

// DEV TOOLS
	add_settings_field( 
		'desq_dev_tools', 
		__( 'Display Performance in Source Code?', 'wordpress' ), 
		'desq_dev_tools_markup', 
		'pluginPage', 
		'desq_options_section01' 
	);

// DESQ BREAKPOINTS
	add_settings_field( 
		'desq_breakpoints', 
		__( 'Enable Screen Ruler and Breakpoints?', 'wordpress' ), 
		'desq_breakpoints_markup', 
		'pluginPage', 
		'desq_options_section01' 
	);

// DESQ FLEXBOXGRID
	add_settings_field( 
		'desq_flexboxgrid', 
		__( 'Load the flexBox Grid Layout. <a target="_blank" href="http://flexboxgrid.com/">More info.</a>', 'wordpress' ), 
		'desq_flexboxgrid_markup', 
		'pluginPage', 
		'desq_options_section01' 
	);

// ADMIN TWEAKS
	add_settings_field( 
		'desq_admin_tweaks', 
		__( 'Admin Enhancements<br><small>Limit revisions | Redirect Login | ExtraMenu Items | Remove WP Logo, Emoji code | Enable Shortcodes in Widgets</small>', 'wordpress' ), 
		'desq_admin_tweaks_markup', 
		'pluginPage', 
		'desq_options_section01' 
	);

// KEEP WORDPRESS UPDATED
	add_settings_field( 
		'desq_wp_updates', 
		__( 'Keep WordPress &amp; Plugins Updated?', 'wordpress' ), 
		'desq_wp_updates_markup', 
		'pluginPage', 
		'desq_options_section01' 
	);

// CUSTOM MOBILE MENU
	add_settings_field( 
		'desq_mobile_menu', 
		__( 'Custom Mobile menu', 'wordpress' ), 
		'desq_mobile_menu_markup', 
		'pluginPage', 
		'desq_options_section01' 
	);

// ACCORDIONS & TABS
	add_settings_field( 
		'desq_jqui', 
		__( 'Enable JQUI Accordions & Tabs', 'wordpress' ), 
		'desq_jqui_markup', 
		'pluginPage', 
		'desq_options_section01' 
	);

// SLICK SLIDER
	add_settings_field( 
		'desq_slickslider', 
		__( 'Enable Slick Slider', 'wordpress' ), 
		'desq_slickslider_markup', 
		'pluginPage', 
		'desq_options_section01' 
	);
}

/* --------------------------------------------- */
/* Field Markup
/* --------------------------------------------- */
function desq_dev_tools_markup() { 
	$options = get_option( 'desq_settings' ); ?>
	<input type='checkbox' class="desq-setting-field" name='desq_settings[desq_dev_tools]' <?php checked( $options['desq_dev_tools'], 1 ); ?> value='1'>
<?php }


function desq_breakpoints_markup() { 
	$options = get_option( 'desq_settings' ); ?>
	<input type='checkbox' class="desq-setting-field" name='desq_settings[desq_breakpoints]' <?php checked( $options['desq_breakpoints'], 1 ); ?> value='1'>
<?php }


function desq_flexboxgrid_markup() { 
	$options = get_option( 'desq_settings' ); ?>
	<input type='checkbox' class="desq-setting-field" name='desq_settings[desq_flexboxgrid]' <?php checked( $options['desq_flexboxgrid'], 1 ); ?> value='1'>
<?php }


function desq_admin_tweaks_markup() { 
	$options = get_option( 'desq_settings' ); ?>
	<input type='checkbox' class="desq-setting-field" name='desq_settings[desq_admin_tweaks]' <?php checked( $options['desq_admin_tweaks'], 1 ); ?> value='1'>
<?php }


function desq_wp_updates_markup() { 
	$options = get_option( 'desq_settings' ); ?>
	<input type='checkbox' class="desq-setting-field" name='desq_settings[desq_wp_updates]' <?php checked( $options['desq_wp_updates'], 1 ); ?> value='1'>
<?php }


function desq_mobile_menu_markup() { 
	$options = get_option( 'desq_settings' ); ?>
	<input type='checkbox' class="desq-setting-field" name='desq_settings[desq_mobile_menu]' <?php checked( $options['desq_mobile_menu'], 1 ); ?> value='1'>
<?php }


function desq_jqui_markup() { 
	$options = get_option( 'desq_settings' ); ?>
	<input type='checkbox' class="desq-setting-field" name='desq_settings[desq_jqui]' <?php checked( $options['desq_jqui'], 1 ); ?> value='1'>
<?php }


function desq_slickslider_markup() { 
	$options = get_option( 'desq_settings' ); ?>
	<input type='checkbox' class="desq-setting-field" name='desq_settings[desq_slickslider]' <?php checked( $options['desq_slickslider'], 1 ); ?> value='1'>
<?php }


function desq_settings_section_callback() { 
	echo __( '', 'wordpress' );
}


/* --------------------------------------------- */
/* Settings Page Markup & Form
/* --------------------------------------------- */
function desq_options_page() { ?>
	<?php
 $active_tab = "settings";
        if( isset( $_GET[ 'tab' ] ) ) {
            $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'settings';
        } // end if
	?>
	<style type="text/css">
		h1{margin-bottom: 30px;}
		.options-section{padding:30px;}
		.form-table{width: auto;}
		.form-table tr:hover{background-color: #ececec;}
		.form-table th{border: solid #dddbdb 1px;width: 350px; font-weight: 200; padding:10px 10px 0;}
		.form-table td{border: solid #dddbdb 1px;padding: 10px;}
		.form-table input[type="checkbox"]{margin: 0}
		pre{max-width: 80%; padding:15px;border: dotted #CCCCCC 1px;white-space: pre-wrap;background-color:#E5E5E5;}
	</style>

	<h1>DeSQ Toolbox</h1>
	<h2 class="nav-tab-wrapper">
	    <a href="?page=desq_toolbox&tab=settings" class="nav-tab <?php echo $active_tab == 'settings' ? 'nav-tab-active' : ''; ?>">Settings</a>
	    <a href="?page=desq_toolbox&tab=reference" class="nav-tab <?php echo $active_tab == 'reference' ? 'nav-tab-active' : ''; ?>">Reference</a>
	    <a href="?page=desq_toolbox&tab=more-plugins" class="nav-tab <?php echo $active_tab == 'more-plugins' ? 'nav-tab-active' : ''; ?>">More Plugins</a>
	</h2>

	<?php if( $active_tab == 'settings' ) { ?>
		<form class="options-section" action='options.php' method='post'>
			<?php
				settings_fields( 'pluginPage' );
				do_settings_sections( 'pluginPage' );
				submit_button();
			?>
		</form>

	<?php } else if( $active_tab == 'reference' ){ ?>
		<div class="options-section">
			<?php include 'reference.html'; ?>
		</div>

	<?php } else if( $active_tab == 'more-plugins' ){ ?>
		<div class="options-section">
			<h2>Other Useful Plugins</h2>
			<a href="/wp-admin/plugin-install.php?s=Sticky+Menu+(or+Anything!)+on+Scroll+&tab=search&type=term">Sticky Menu</a><br>
			<a href="/wp-admin/plugin-install.php?s=Custom+Content+Shortcode&tab=search&type=term">Custom Content Shortcode</a><br>
			<a href="/wp-admin/plugin-install.php?s=Duplicator&tab=search&type=term">Duplicator</a><br>
			<a href="/wp-admin/plugin-install.php?s=Advanced+Custom+Fields&tab=search&type=term">Advanced Custom Fields</a><br>
			<a href="/wp-admin/plugin-install.php?s=+HTML+Editor+Syntax+Highlighter&tab=search&type=term">HTML Editor Syntax Highlighter</a>
		</div>
	<?php 
	}
}