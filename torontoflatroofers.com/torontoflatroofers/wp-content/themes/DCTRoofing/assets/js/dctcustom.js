(function($) {
 function setup_collapsible_submenus() {
 $( "<div class='sub-menu-toggle'></div>" ).insertBefore( "#main-header #mobile_menu.et_mobile_menu .menu-item-has-children > a" );
 $( "#main-header #mobile_menu.et_mobile_menu .sub-menu-toggle" ).click(function () {
 $(this).toggleClass("popped");
 });
 }
 jQuery(document).ready(function() {setup_collapsible_submenus();});
 jQuery(window).load(function() {setup_collapsible_submenus(); });
})(jQuery);

jQuery(document).ready(function(){
    jQuery("#dct_client").owlCarousel({
        items:6,
        itemsDesktop:[1000,6],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        pagination:false,
        navigation:true,
		nav:true,
		
		autoplay: true,
	autoplayTimeout: 5000,
	
rewind: false,
	navigationText:["",""]
		
      
        
    });
});


jQuery(function($){$('.cl-toggler').on('click',function(event){
		event.preventDefault();
		$(this).parent().parent().toggleClass('opened');});
		var presets=$('.cl-presets').find('li');
		presets.each(function(){
			$(this).find('a').on('click',function(event){
				event.preventDefault();
				var currentPreset=$(this).parent().data('preset');
				var currentColor = $(this).css( "background-color" );
				 $('#lblColorCode').text(rgba2hex( currentColor ));
				document.documentElement.style.setProperty("--color-1", currentColor);
				presets.removeClass('active');
				$(this).parent().addClass('active');
			});
	});
	
	$('#cl-boxed').on('change',function(){
		if($(this).is(':checked')){
			$('body').addClass('layout-boxed');
			}
			else{
				$('body').removeClass('layout-boxed').removeAttr('style');
				}
		});
	
	});

	function rgba2hex( color_value ) {
		if ( ! color_value ) return false;
		var parts = color_value.toLowerCase().match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+(?:\.\d+)?))?\)$/),
			length = color_value.indexOf('rgba') ? 3 : 2; // Fix for alpha values
		delete(parts[0]);
		for ( var i = 1; i <= length; i++ ) {
			parts[i] = parseInt( parts[i] ).toString(16);
			if ( parts[i].length == 1 ) parts[i] = '0' + parts[i];
		}
		return '#' + parts.join('').toUpperCase(); // #F7F7F7
	}