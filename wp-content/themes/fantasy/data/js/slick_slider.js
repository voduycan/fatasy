$(function() {
	$('.autoplay').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2222000,
   		responsive: [
	        {
	        	breakpoint: 576,
	            settings: {
	                slidesToShow: 1,
	            }
	        }
	    ]
	});
});