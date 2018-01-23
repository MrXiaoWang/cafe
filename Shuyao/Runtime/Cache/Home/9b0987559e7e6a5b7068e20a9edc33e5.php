<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <script src="/cafe/Public/home/js/mui.min.js"></script>
    <link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="/cafe/Public/home/css/classify/classify.css" />
	<link rel="stylesheet" href="/cafe/Public/home/css/footer/footer.css" />
    <script type="text/javascript" charset="UTF-8">
      	mui.init();
    </script>
</head>
<body>
	<section class="menu-right padding-all j-content">
		<div class="mui-row">
		<?php if(is_array($data)): foreach($data as $key=>$m): ?><div class="mui-col-xs-4 mui-col-lg-4">
				<a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($m["id"]); ?>" target="_blank">
					<div class="img_pic">
						<img src="/cafe/Uploads/<?php echo ($m["minfo_img"]); ?>" />
					</div>
					<p class="cl-tit"><?php echo ($m["minfo_name"]); ?></p>
				</a>
			</div><?php endforeach; endif; ?>	
		</div>
	</section>
</body>
</html>