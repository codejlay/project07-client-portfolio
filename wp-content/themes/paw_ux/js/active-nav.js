// Active Nav

jQuery(function($) {
	$('#menu-item-112 a').addClass('active');

	$(window).on('scroll', function() {
	    $('section').each(function() {
	        if($(window).scrollTop() >= $(this).position().top -550) {
	            var id = $(this).attr('id');
	            $('.menu a').removeClass('active');
	            $('.menu a[href=#'+ id +']').addClass('active');
	        }
	    })
	})
});