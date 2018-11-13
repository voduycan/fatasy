$(function() {
	$('.autoplay').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000,
	});
	$('.foundation').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000,
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
	$('.Practical').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000,
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
		autoplaySpeed: 4000,
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
		var hashcode = window.location.hash;
		if(hashcode){
			$('html,body').animate({scrollTop: $('section'+hashcode).offset().top + 600}, 800);
		}
		$('#submit .ajax-loader').addClass('icon-spinner');
		$('#submit').parent('p').addClass('text-center');
        $('#no-1').addClass('active');
        $('.foundation .slick-prev').append('<span class="icon-left-arrow"></span>');
        $('.foundation .slick-next').append('<span class="icon-right-arrow"></span>');
        $('.Practical .slick-prev').append('<span class="icon-left-arrow"></span>');
        $('.Practical .slick-next').append('<span class="icon-right-arrow"></span>');
     	$('.trips .slick-prev').append('<span class="icon-left-arrow"></span>');
        $('.trips .slick-next').append('<span class="icon-right-arrow"></span>');
        $('.btn-collapse').addClass('collapsed');
        document.addEventListener( 'wpcf7submit', function( event ) {
			setTimeout(function() {$('.wpcf7-response-output').fadeOut('1000','linear',true)}, 5 * 1000);
			$('.wpcf7-validation-errors').append('<span class="icon-error"></span>');
			$('.wpcf7-mail-sent-ng').append('<span class="icon-error"></span>');
			$('.wpcf7-mail-sent-ok').append('<span class="icon-success"></span>');
		}, false );
    });
    if($(document).scrollTop() >= $("header").height()){
    	$('header').addClass('to-fixed');
    }
    $(window).scroll(function(){
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
