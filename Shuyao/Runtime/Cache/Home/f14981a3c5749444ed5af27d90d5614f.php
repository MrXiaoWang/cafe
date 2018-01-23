<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>更改签名</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/cafe/Public/home/css/public.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/signature/signature.css" />
	</head>

	<body>
		<script src="/cafe/Public/home/js/mui.min.js"></script>
		<script type="text/javascript">
			mui.init()
		</script>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">更改签名</h1>
		</header>
		<div class="mui-content">
			<!--文本框-->
			<form class="text" action="<?php echo U('Our/upsiga');?>" method='post'>

				<div class="area">
					<textarea class="txt" name='txt' placeholder="我不懒，但是我什么也不说~"><?php echo ($result["u_gexing"]); ?></textarea>
					<div class="jishu">您还可以输入<span id="word">30</span>个字</div>
				</div>

				<div class="b-btn"><input type="submit" value="提交" class="btnYes" /></div>

			</form>

		</div>
	</body>
	<script type="text/javascript" src="/cafe/Public/home/js/jquery-1.11.0.js"></script>

	<script language="javascript" type="text/javascript">
		$(".txt").keyup(function() {
			//         	alert("dfg");
			if($(".txt").val().length > 30) {
				$(".txt").val($(".txt").val().substring(0, 30));
				//                 alert("30");
			}
			$("#word").text(30 - $(".txt").val().length);
		});
	</script>

</html>