	jQuery(document).ready(function($) {
	
		// Multiple Tabs with id starting with jqui_tabs
		$('[id^=jqui_tabs]').each(function() {
			id = $(this).attr('id')
			$('#' + id ).tabs();
		})
		
		// or single Tab instance per page
		$('#jqui_tabs').tabs();
	
		//hover states on the static widgets
		$('#dialog_link, ul#icons li').hover(
		function() { $(this).addClass('ui-state-hover'); },
		function() { $(this).removeClass('ui-state-hover'); }
		);
	
		// Multiple Accordions with id starting with jqui_accordion
		$('[id^=jqui_accordion]').each(function() {
			id = $(this).attr('id')
			$('#' + id ).accordion({
				heightStyle: "content", 
				collapsible: true,
				active: false 
			});
		})
		
		// or single Accordion instance per page
		jQuery("#jqui_accordion").accordion({
		    autoHeight: false,
		    collapsible: true,
		    active: false
		});
	});
