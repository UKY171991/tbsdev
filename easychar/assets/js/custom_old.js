//Design by Nitin Saxena

$(document).ready(function(){	
    //alert(3);
//    $('.nit-count-no').counterUp({
//          delay: 10,
//          time: 2000
//        });
    
    $('.nit-counter .nit-counter-box ul li .nit-count').click(function(){
        var getVal = $(this).attr('nit-value');
        var dd = $(this).offset().top;
    });
    
    $('.nit-signup .nit-signup-box .nit-tab-btn ul li').click(function(){
        alert(3);
        $('.s-box').removeClass('active');
        $(this).addClass('active');
    });
    $('.nit-sub-categories ul span').click(function(){
        var chkActive = $(this).attr('class');
        
        if(chkActive == 'active'){
           $(this).attr('class','');
            $(this).children('i').attr('class','fas fa-plus');
            $(this).siblings('ol').removeClass('show');
            $(this).parent('li').siblings().children('span').removeClass('active'); 
            $(this).parent('li').siblings().children('span').children('i').attr('class','fas fa-plus'); $(this).parent('li').siblings().children('ol').removeClass('show');
            
           }else if(chkActive == ''){
                $(this).attr('class','active');
                $(this).children('i').attr('class','fas fa-minus');
                $(this).siblings('ol').addClass('show'); $(this).parent('li').siblings().children('span').removeClass('active');
               $(this).parent('li').siblings().children('span').children('i').attr('class','fas fa-plus'); 
            $(this).parent('li').siblings().children('ol').removeClass('show');
                    }
    });
    
    $('.slider-carousel').owlCarousel({
		items:1,
		loop:true,
		autoplay:true,
		slideSpeed : 200,
		paginationSpeed : 800,
    rewindSpeed : 1000,
		slideSpeed : 200,
		dots:true
	});
	$('.projects-carousel').owlCarousel({
		items:4,
		loop:true,
		autoplay:true,
		responsiveClass:true,
    autoplay:200,
		slideSpeed : 200,
		paginationSpeed : 800,
    rewindSpeed : 1000,
		slideSpeed : 200,
		dots:false,
        nav:true,
        responsive:{
			1080:{items:4},
			768:{items:3},
			600:{items:2},
			425:{items:1},
			360:{items:1},
			30:{items:1}
			
		}
	});
    $('.products-carousel').owlCarousel({
		items:4,
		loop:true,
		autoplay:true,
		responsiveClass:true,
    autoplay:200,
		slideSpeed : 200,
		paginationSpeed : 800,
    rewindSpeed : 1000,
		slideSpeed : 200,
		dots:false,
        nav:true,
        responsive:{
			1080:{items:4},
			768:{items:3},
			600:{items:2},
			425:{items:1},
			360:{items:1},
			30:{items:1}
			
		}
	});
	$('.partners-carousel').owlCarousel({
		items:4,
		loop:true,
		autoplay:true,
		responsiveClass:true,
    autoplay:200,
		slideSpeed : 200,
		paginationSpeed : 800,
    rewindSpeed : 1000,
		slideSpeed : 200,
		dots:false,
        nav:true,
        responsive:{
			1080:{items:4},
			768:{items:3},
			600:{items:2},
			425:{items:1},
			360:{items:1},
			30:{items:1}
			
		}
	});
    $('.blog-carousel').owlCarousel({
		items:3,
		loop:true,
		autoplay:true,
		responsiveClass:true,
    autoplay:200,
		slideSpeed : 200,
		paginationSpeed : 800,
    rewindSpeed : 1000,
		slideSpeed : 200,
		dots:false,
        nav:true,
        responsive:{
			1080:{items:3},
			768:{items:3},
			600:{items:2},
			425:{items:1},
			360:{items:1},
			30:{items:1}
			
		}
	});
    




var blankp = $('p').text();    
if(blankp == ''){
    $(this).hide();
}	
	
    $('body').on('click','.nit-pwd-show i.fa-eye',function(){
        $(this).attr('class','fas fa-eye-slash');
        $('.nit-pwd-in input[type="password"]').attr('type','text');
    });
    $('body').on('click','.nit-pwd-show i.fa-eye-slash',function(){
        $(this).attr('class','fas fa-eye');
        $('.nit-pwd-in input[type="text"]').attr('type','password');
    });
    $('header .side-menu .inner-wrapper .btn-close i').click(function(){
        $('header .side-menu').css('right','-100%');
    });
    $('.nit-menubtn,.navbar-light .navbar-toggler-icon').click(function(){
        $('header .side-menu').css('right','0');
    });
    
    $('body').on('mouseenter','.nit-slider .item .item-content .content-box .nit-down-arrow,.nit-abt .nit-abt-box .nit-flex .nit-box .nit-down-arrow,.nit-contact .nit-contact-box .nit-flex .nit-con-form .nit-form-box .nit-group .tbtn',function(e){
        x = e.pageX - $(this).offset().left;
        y = e.pageY - $(this).offset().top;
        $(this).find('b').css({top:y,left:x});
    });
    $('body').on('mouseout','.nit-slider .item .item-content .content-box .nit-down-arrow,.nit-abt .nit-abt-box .nit-flex .nit-box .nit-down-arrow,.nit-contact .nit-contact-box .nit-flex .nit-con-form .nit-form-box .nit-group .tbtn',function(e){
        x = e.pageX - $(this).offset().left;
        y = e.pageY - $(this).offset().top;
        $(this).find('b').css({top:y,left:x});
    });
    
    $('.nit-abt .nit-abt-box .nit-flex').append('<span id="marker"></span>');
    $('.nit-products .nit-products-box .nit-flex,.nit-benefits .nit-benefits-box .nit-flex').append('<span class="marker2"></span>');
    $('body').on('mouseenter','.nit-abt .nit-abt-box .nit-flex .nit-box',function(e){
            
            var marker = $('#marker');
            var ssa = $('.nit-abt .nit-abt-box .nit-flex .nit-box,.nit-benefits .nit-benefits-box .nit-flex .nit-box').get(0);
            var ss = $(this).get(0);
            var nav = document.querySelector('.nit-abt .nit-abt-box .nit-flex');
            var width = ss.offsetWidth;
            var left = ss.offsetLeft;
            marker.css('left',left+'px');
            marker.css('width',width+'px');
            marker.css('opacity','1');
        });
        $('body').on('mouseleave','.nit-abt .nit-abt-box .nit-flex .nit-box',function(e){
           var marker = $('#marker');
            var ssa = $('.nit-abt .nit-abt-box .nit-flex .nit-box').get(0);
            var ss = $(this).get(0);
            var nav = document.querySelector('.nit-abt .nit-abt-box .nit-flex .nit-box');
            var width = ss.offsetWidth;
            var left = ss.offsetLeft;
            marker.css('left',' ');
            marker.css('opacity','0');
//            marker.css('width','0');
            });
    $('body').on('mouseenter','.nit-products .nit-products-box .nit-flex .nit-box,.nit-benefits .nit-benefits-box .nit-flex .nit-box',function(e){
            
            var marker = $('.marker2');
            var ssa = $('.nit-products .nit-products-box .nit-flex .nit-box,.nit-benefits .nit-benefits-box .nit-flex .nit-box').get(0);
            var ss = $(this).get(0);
            var nav = document.querySelector('.nit-products .nit-products-box .nit-flex,.nit-benefits .nit-benefits-box .nit-flex');
            var width = ss.offsetWidth;
            var left = ss.offsetLeft;
            marker.css('left',left+'px');
            marker.css('width',width+'px');
            marker.css('opacity','1');
        });
        $('body').on('mouseleave','.nit-products .nit-products-box .nit-flex .nit-box,.nit-benefits .nit-benefits-box .nit-flex .nit-box',function(e){
           var marker = $('.marker2');
            var ssa = $('.nit-products .nit-products-box .nit-flex .nit-box,.nit-benefits .nit-benefits-box .nit-flex .nit-box').get(0);
            var ss = $(this).get(0);
            var nav = document.querySelector('.nit-products .nit-products-box .nit-flex .nit-box,.nit-benefits .nit-benefits-box .nit-flex .nit-box');
            var width = ss.offsetWidth;
            var left = ss.offsetLeft;
            marker.css('left',' ');
            marker.css('opacity','0');
//            marker.css('width','0');
            });
    
		
 AOS.init({
     offset: 80,
     easing: 'ease-in-out-sine',
     //once: true
 });
});

$(window).scroll(function(){

		if ($(window).scrollTop() >= 200) {

			$('header').addClass('fixed-header');

		}

		else {

			$('header').removeClass('fixed-header');

		}


    
var windscroll = $(window).scrollTop();
    var sle = $('#pro').scrollTop();
    var sle2 = $('#pro').position().top;
    //alert(windscroll);
    //alert(sle);
//    if (sle2 = windscroll - 100) {
//        alert(4);
//    }
    if (windscroll >= 100) {
//        $('nav').addClass('fixed');
        $('section').each(function(i) {
            if ($(this).position().top <= windscroll - (-100)) {
                var getId = $(this).attr('id');
                var getIdhash = '#' + getId;
                $('.nit-navigation ul li.active').removeClass('active');
                $('.nit-navigation ul li').each(function(){
                    var atag = $(this).children('a').attr('href');
                    if(getIdhash == atag){
                        $(this).addClass('active');
                    }
                });
                //$('#mynavbar li').eq(i).addClass('active');
            }
        });

    } else {

//        $('nav').removeClass('fixed');
        $('.nit-navigation ul  li.active').removeClass('active');
        $('.nit-navigation ul  li:first').addClass('active');
    }    
    





	});
