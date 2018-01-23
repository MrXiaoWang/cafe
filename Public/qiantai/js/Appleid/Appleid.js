$(function() {
			
			//点击判断
			$(".n-btnys").click(function() {
			//判断手机号
			//非空判断
			var pattern = /^1[34578]\d{9}$/;
			if($(".usesrPhone").val() == "" || $(".usesrPhone").val() == null) {
				mui.toast('手机号不能为空', {
					duration: 'short',
					type: 'div'
				});
				$(".usesrPhone").focus();
			} else if(!$(".usesrPhone").val().match(pattern)) {
				mui.toast('手机号输入错误', {
					duration: 'short',
					type: 'div'
				});
				$(".usesrPhone").focus();
				
			} else if($(".A-yzm").val() == "" || $(".A-yzm").val() == null) {
				mui.toast('验证码不能为空', {
					duration: 'short',
					type: 'div'
				});
				$(".A-yzm").focus();
				
			}
			})
		})