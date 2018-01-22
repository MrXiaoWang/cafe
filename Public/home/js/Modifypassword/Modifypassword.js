$(function() {
			$(".b-btnyes").click(function() {
				//检测密码由6-21字母和数字组成
				var regExp = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/;
				if($(".oldpwd").val() == "" || $(".oldpwd").val() == null) {
					mui.toast('请输入您的原密码', {
						duration: 'short',
						type: 'div'
					});
					$(".oldpwd").focus();
				} else if($(".newpwd").val() == "" || $(".newpwd").val() == null) {
					mui.toast('请输入您的新密码', {
						duration: 'short',
						type: 'div'
					});
					$(".oldpwd").focus();
				} else if($(".yespwd").val() == "" || $(".yespwd").val() == null) {
					mui.toast('请再次输入密码', {
						duration: 'short',
						type: 'div'
					});
					$(".oldpwd").focus();
				} else if(!($(".newpwd").val() == $(".yespwd").val())) {
					mui.toast('两次密码不一致，请重新输入', {
						duration: 'short',
						type: 'div'
					});
					//清空两次输入的密码
					$(".newpwd").val("");
					$(".yespwd").val("");
					$(".newpwd").focus();
				}

			})
		})