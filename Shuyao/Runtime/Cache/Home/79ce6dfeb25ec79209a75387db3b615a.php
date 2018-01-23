<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>修改邮箱</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/cafe/Public/home/css/public.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/Nickname/Nickname.css" />
	</head>

	<body>
		<script src="/cafe/Public/home/js/mui.min.js"></script>
		<script type="text/javascript">
			mui.init()
		</script>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">修改邮箱</h1>
		</header>
		<div class="mui-content">
			<form action="<?php echo U('Our/upemail');?>" method="post">
				<!--input-->
				<div class="n_txt">
					<input type="text" placeholder="请输入您邮箱" id="email" name='email' value="<?php echo ($result["u_email"]); ?>"/>
				</div>
				<div class="btn">
					<input type="submit" class="n_btn" value="确定" />
				</div>
			</form>
		</div>
	</body>
	<script type="text/javascript" src="/cafe/Public/home/js/jquery-1.11.0.js"></script>
	<script type="text/javascript" src="/cafe/Public/home/js/Mailbox/Mailbox.js"></script>

</html>