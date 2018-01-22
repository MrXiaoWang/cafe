$(function($) {
	$('#sidebar ul li').click(function() {
		$(this).addClass('active').siblings('li').removeClass('active');
		var index = $(this).index();
		$('.j-content').eq(index).show().siblings('.j-content').hide();
	})
})