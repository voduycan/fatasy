$(function() {
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
		focusOnSelect: true
	});
	$('.slick-next').addClass('icon-right');
   	$('.slick-prev').addClass('icon-left');
   	$('.slick-dots').addClass('d-none');
   	$('.slider-for').addClass('zzzzzz');
});