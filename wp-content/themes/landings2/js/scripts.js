$(document).ready(function(){
	$.fn.exists = function(){return this.length > 0;}
	if ($('.step').exists()) {
		$('.step .info-box .btn').click(function(){
			var tab_id = $(this).attr('href');
			$('.step.active').addClass('selected');
			$('.step').removeClass('active');
			$('' + tab_id).addClass('active');
			return false;
		})
	}
});