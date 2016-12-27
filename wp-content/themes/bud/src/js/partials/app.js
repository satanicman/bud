jQuery(document).ready(function($) {
	$('.slick').slick({
		arrows: false,
		dots: true,
		// responsive: [
		// 	{
		// 		breakpoint: 991,
		// 		settings: {
		// 			dots: false
		// 		}
		// 	}
		// ]
	});


	// to top
	$(window).scroll(function () {
		if ($(this).scrollTop() > 0) {
			$('#scroller').fadeIn();
		} else {
			$('#scroller').fadeOut();
		}
	});
	$('#scroller').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
	// to top #END
});