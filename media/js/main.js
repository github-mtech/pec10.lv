jQuery(function($) {

	


	//smooth scroll
	$('.scrl').click(function(event) {
		var target = $(this).prop('hash');
		position = (target == '#steps') ? $(target).offset().top-150 : $(target).offset().top;
		
		
		event.preventDefault();
		
		$('html, body').stop().animate({
			scrollTop: position
		}, 500);
	});

	//scrollspy
	$('[data-spy="scroll"]').each(function () {
		var $spy = $(this).scrollspy('refresh')
	})

	

	
});