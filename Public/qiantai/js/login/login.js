$(function() {
	$(".d-btnlu>ul>li:first-child").click(function() {
		$(".denglu").css("display", "block");
		$(".zhuce").css("display", "none")
	})
	$(".d-btnlu>ul>li:nth-of-type(2)").click(function() {
		$(".denglu").css("display", "none");
		$(".zhuce").css("display", "block")
	})
	//判断非空
	//登录非空  点击登录按钮
	$(".b-yes").click(function() {
		//判断登录用户名非空
		if($(".d_username").val() == "" || $(".d_username").val() == null) {
			mui.toast('请输入用户名或手机号', {
				duration: 'short',
				type: 'div'
			});
			$(".d_username").focus();
		}else if($(".d_userpwd").val() == "" || $(".d_userpwd").val() == null) {
			mui.toast('请输入密码', {
				duration: 'short',
				type: 'div'
			});
			$(".d_userpwd").focus();
		}

	})
	
	//注册非空  点击注册按钮
	$(".z_btn").click(function() {
		//判断注册用户名非空
		if($(".z_username").val() == "" || $(".z_username").val() == null) {
			mui.toast('请输入手机号', {
				duration: 'short',
				type: 'div'
			});
			$(".z_username").focus();
		}else if($(".z_userpwd").val() == "" || $(".z_userpwd").val() == null) {
			mui.toast('请输入密码', {
				duration: 'short',
				type: 'div'
			});
			$(".z_userpwd").focus();
		}else if($(".yzm").val() == "" || $(".yzm").val() == null) {
			mui.toast('请输入验证码', {
				duration: 'short',
				type: 'div'
			});
			$(".yzm").focus();
		}

	})
})