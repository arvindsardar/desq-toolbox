jQuery(document).ready(function() {

	//show mobilemenu
	jQuery(".desq-mobilemenu-button").click(function() {
		jQuery(".desq-mobilemenu-overlay").toggleClass( "active" ).toggleClass("hidden");
		jQuery('body').toggleClass("mobilemenu-active");
	});

	//submenu
	jQuery( ".desq-mobilemenu-overlay li.menu-item-has-children > a" ).click(function(e) {
		//	e.preventDefault();
		jQuery(this).siblings( ".desq-mobilemenu-overlay .sub-menu" ).slideToggle();
	});

});