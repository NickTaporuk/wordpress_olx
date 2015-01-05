$(document).ready(function(){
	$.fn.exists = function(){return this.length > 0;}
	if ($('.data-swith').exists()) {
		$('.data-swith li').click(function(){
			$(this).parent().find('.active').removeClass('active');
			$(this).toggleClass("active");
			return false;
		})
	}
	if ($('.scrolldown').exists()) {
		$(function() {
			$('a.scrolldown[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 500);
					return false;
					}
				}
			});
		});
	}
});