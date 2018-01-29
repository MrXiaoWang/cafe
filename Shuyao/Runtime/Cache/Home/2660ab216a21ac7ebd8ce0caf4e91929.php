<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>登录,注册</title>
		<link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/cafe/Public/home/css/login/login.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/public.css" />
		<script type="text/javascript" src="/cafe/Public/home/js/jquery.js"></script>
		<script language="javascript">
			var iTime = 59;
			var Account;
			function RemainTime(){
				document.getElementById('zphone').disabled = true;
				var iSecond,sSecond="",sTime="";
				if (iTime >= 0){
					iSecond = parseInt(iTime%60);
					iMinute = parseInt(iTime/60)
					if (iSecond >= 0){
						if(iMinute>0){
							sSecond = iMinute + "分" + iSecond + "秒";
						}else{
							sSecond = iSecond + "秒";
						}
					}
					sTime=sSecond;
					if(iTime==0){
						clearTimeout(Account);
						sTime='获取手机验证码';
						iTime = 59;
						document.getElementById('zphone').disabled = false;
					}else{
						Account = setTimeout("RemainTime()",1000);
						iTime=iTime-1;
					}
				}else{
					sTime='没有倒计时';
				}
				document.getElementById('zphone').value = sTime;
			}	

			function get_mobile_code(){
				$url = "<?php echo U('Login/send');?>";
		        $.post($url, {mobile:jQuery.trim($('#mobile').val()),send_code:<?php echo $_SESSION['send_code'];?>}, function(msg) {
					if(jQuery.trim(unescape(msg))=='提交成功'){
						RemainTime();
					}
		        });
			};
			
		</script>
		<script src="/cafe/Public/home/js/mui.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			mui.init();
		</script>
		<style>
			.span{display: none;}
		</style>
	</head>

	<body>

		<div class="mui-content">
			<!--登录注册切换-->
			<div class="box">
				<div class="d-btnlu">
					<ul>
						<li>登录</li>
						<li>注册</li>
					</ul>
				</div>
				<!--登录-->
				<div class="denglu">
					<!--输入框-->
					<form action="<?php echo U('Login/index');?>" method="post">
						<div class="input input-username ">
							<input type="text" class="userName d_username" name="adm_name" placeholder="请输入用户名/手机号" />
						</div>
						<div class="input input-userPwd ">
							<input type="password" class="userPwd d_userpwd" name="adm_pwd" placeholder="请输入密码" />
						</div>
						<!--登录按钮-->
						<div class="d-btn ">
							<input type="submit" value="登录" class="b-yes" />
						</div>
						<!--第三方登录按钮-->
						<div class="three mui-text-center">
							<!--QQ-->
							<a href="<?php echo U('Login/qqlogin');?>"><img src="/cafe/Public/home/img/login/11_11.png" /></a>
						</div>
					</form>
				</div>

				<!--注册-->

				<div class="zhuce">
					<form action="<?php echo U('Login/register');?>" method="post" name="formUser">
						<div class="input input-username">
							<input id="mobile" name="mobile" type="text" placeholder="请输入手机号" class="userName z_username inputBg" /><span style="color:#FF0000" class="span"> *</span> 
						</div>
						<div class="input input-userPwd">
							<input type="password" class="userPwd z_userpwd" name="pass" placeholder="请输入密码" />
						</div>
						<!--获取验证码-->
						<div class="h-YZM">
							<input type="text" name="mobile_code" class="inputBg yzm" placeholder="请输入验证码" />
							<input id="zphone" type="button" class="hq" value="获取验证码" onClick="get_mobile_code();"></td>
						</div>
						<!--登录按钮-->
						<div class="d-btn">
							<input type="submit" value="注册" class="z_btn"/>
						</div>
					</form>	

				</div>
			</div>
	</body>
	<script type="text/javascript" src="/cafe/Public/home/js/jquery-1.11.0.js"></script>
	<script type="text/javascript" src="/cafe/Public/home/js/login/login.js"></script>

	<script type="text/javascript">
		$('#mobile').blur(function(){
			$apiUrl = '<?php echo U("API/IsZhuce");?>';
			$.post($apiUrl,{mobile:$(this).val()},function(dd){
				if(dd.trim()=="0"){
					$('.span').text('该手机号已存在').css("color","#FF0000").css("display","block");
					$('#zphone').disabled=true;
				}else{
					$('.span').text('可以注册');
					$('.span').css("color","green").css("display","block");
				}
			})
		})
	</script>

</html>