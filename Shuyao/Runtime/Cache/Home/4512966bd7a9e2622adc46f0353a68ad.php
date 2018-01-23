<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>修改密码</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/cafe/Public/home/css/public.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/Modifypassword/Modifypassword.css" />
	</head>

	<body>
		<script src="/cafe/Public/home/js/mui.min.js"></script>
		<script type="text/javascript">
			mui.init()
		</script>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">修改密码</h1>
		</header>
		<div class="mui-content">
			<div class="box">
				<div class="M-input">
					<label>请输入原密码：</label><input type="password" class="oldpwd" />
				</div>
				<div class="M-input">
					<label>请输入新密码：</label><input type="password" class="newpwd" />
				</div>
				<div class="M-input">
					<label>请确认密码：</label><input type="password" class="yespwd" />
				</div>
			</div>
			<div class="M-btn">
				<input type="button" value="确定" class="b-btnyes" />
			</div>
		</div>
	</body>
	<script type="text/javascript" src="/cafe/Public/home/js/jquery-1.11.0.js"></script>
	
	<script type="text/javascript">
			$('.b-btnyes').click(function(){

				//检测密码由6-21字母和数字组成
				var regExp = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/;
				if($(".oldpwd").val() == "" || $(".oldpwd").val() == null) {
					mui.toast('请输入您的原密码', {
						duration: 'short',
						type: 'div'
					});
					$(".oldpwd").focus();
					return false;
				} else if($(".newpwd").val() == "" || $(".newpwd").val() == null) {
					mui.toast('请输入您的新密码', {
						duration: 'short',
						type: 'div'
					});
					$(".oldpwd").focus();
					return false;
				} else if($(".yespwd").val() == "" || $(".yespwd").val() == null) {
					mui.toast('请再次输入密码', {
						duration: 'short',
						type: 'div'
					});
					$(".oldpwd").focus();
					return false;
				} else if(!($(".newpwd").val() == $(".yespwd").val())) {
					mui.toast('两次密码不一致，请重新输入', {
						duration: 'short',
						type: 'div'
					});
					//清空两次输入的密码
					$(".newpwd").val("");
					$(".yespwd").val("");
					$(".newpwd").focus();
					return false;
				}


				$url = "<?php echo U('API/Oldpass');?>";

				$.post($url,{oldPass:$(".oldpwd").val(),newPass:$(".yespwd").val()},function(dd){
					if(dd.trim()=="1"){
						mui.toast('密码输入错误', {
							duration: 'short',
							type: 'div'
						});
					}else if(dd.trim()=="2"){
						mui.toast('密码修改失败', {
							duration: 'short',
							type: 'div'
						});
					}else{
						mui.toast('修改成功', {
							duration: 'short',
							type: 'div'
						});
					}
				})
			})
	</script>

</html>