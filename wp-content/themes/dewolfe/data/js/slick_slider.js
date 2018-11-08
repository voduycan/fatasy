$(function() {
	$('.autoplay').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
	});
	$('.foundation').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
   		responsive: [
	        {
	        	breakpoint: 992,
	            settings: {
	                slidesToShow: 3,
	            }
	        },
	        {
	        	breakpoint: 768,
	            settings: {
	                slidesToShow: 2,
	            }
	        },
	        {
	        	breakpoint: 576,
	            settings: {
	                slidesToShow: 1,
	            }
	        }
	    ]
	});
	$('.staff').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
   		responsive: [
	        {
	        	breakpoint: 768,
	            settings: {
	                slidesToShow: 2,
	            }
	        },
	        {
	        	breakpoint: 576,
	            settings: {
	                slidesToShow: 1,
	            }
	        }
	    ]
	});
	 $('.slider-for').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '.slider-for',
	  dots: true,
	  centerMode: true,
	  focusOnSelect: true,
	});
	

	$(document).ready(function (){
        $("#scroll-down").click(function() {
            $('html, body').animate({
                scrollTop: $(".our-client").offset().top
            }, 800);
        });
        $('#no-1').addClass('active');
        $('.foundation .slick-prev').append('<span class="icon-left-arrow"></span>');
        $('.foundation .slick-next').append('<span class="icon-right-arrow"></span>');
     	$('.trips .slick-prev').append('<span class="icon-left-arrow"></span>');
        $('.trips .slick-next').append('<span class="icon-right-arrow"></span>');
    });
    if($(document).scrollTop() >= $("header").height()){
    	$('header').addClass('to-fixed');
    }
    $(window).scroll(function(){
    	console.log();
	    if($(document).scrollTop() >= $("header").height()){
	    	$('header').addClass('to-fixed');
	    	$('header').removeClass('ha-header-hide');
	    	$('header').addClass('ha-header-show');
	    }
	    else{
	    	if($('header').hasClass('to-fixed')){
	    		$('header').removeClass('ha-header-show');
	    		$('header').addClass('ha-header-hide');
	    		
	    		setTimeout(function(){$('header').removeClass('to-fixed'); $('header').removeClass('ha-header-hide');}, 150);
	    		
	    	}
	    }
	});
});
