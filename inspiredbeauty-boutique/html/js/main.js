$(document).ready(function($){

	$(window).scroll(function(){
		if($(window).scrollTop()>=200){
			$('.upper-header').addClass('fixed-header')
		}
		 else{
			$('.upper-header').removeClass('fixed-header')
			}
	});
	
	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$('#back-to-top').fadeIn(1200);
		} else {
			$('#back-to-top').fadeOut(1200);
		}
	});
	
	$('#back-to-top').click(function(event) {
		event.preventDefault();
		
		$('html, body').animate({scrollTop: 0}, 1200);
	});	
	
	
	$('.testimonials').owlCarousel( {
		loop:true,
		margin:0,
		dots:false,
		items:1,
		smartspeed:800,
		autoplay:true,
		autoplayTimeout:5000,
		autoHeight:true,
		nav:true,
        navText : ['<i class="fal fa-chevron-left"></i>','<i class="fal fa-chevron-right"></i>'],
	  responsive:{
		0: {
			items: 1
		},
		600: {
			items: 1
		},
		992: {
			items: 1
		},		
		1200: {
			items: 1
		}			
	}
	});	


	$('.fancybox1').fancybox({});

	
});
