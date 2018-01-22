$(function() {
	$(".n_btn").click(function() {
		var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
		if($("#email").val() == "" || $("#email").val() == null) {
			mui.toast('请填写您的邮箱', {
				duration: 'short',
				type: 'div'
			});
			$("#email").focus();
		} else if(!$("#email").val().match(reg)) {

			mui.toast('邮箱输入错误', {
				duration: 'short',
				type: 'div'
			});
			$("#email").focus();

		}
	})

})