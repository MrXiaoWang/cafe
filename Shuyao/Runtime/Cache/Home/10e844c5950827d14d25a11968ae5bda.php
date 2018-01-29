<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>我的订单</title>
    <script src="/cafe/Public/home/js/mui.min.js"></script>
    <link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet"/>
    <!--<link rel="stylesheet" href="css/public.css" />-->
    <link rel="stylesheet" href="/cafe/Public/home/css/myorder/myOrder.css" />
    <link rel="stylesheet" href="/cafe/Public/home/css/footer/footer.css" />
    <script type="text/javascript" charset="UTF-8">
      	mui.init();
    </script>
</head>
<body>
	<header class="mui-bar mui-bar-nav">
	    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	    <h1 class="mui-title">我的订单</h1>
	</header>
	<div class="mui-content">
	    <ul class="mui-table-view">

			<?php if(is_array($cart)): foreach($cart as $k=>$c): ?><li class="mui-table-view-cell">
				<div class="d-box">
					<div class="box-left mui-pull-left">
						<!--图片-->
						<div class="img-box">
							<img src="/cafe/Uploads/<?php echo ($c["minfo_img"]); ?>" />
						</div>
					</div>
					<div class="box-right mui-pull-right">
						<!--信息-->
						<div class="info-top">
							<div class="top-left">
								<!--食物名称-->
								<span><?php echo ($c["minfo_name"]); ?></span>
							</div>
							<div class="top-right mui-pull-right">
								<!--操作数量-->
								<input type="text" value="<?php echo ($c["cart_number"]); ?>" />
							</div>
						</div>
						<div class="info-center">
							<i>￥</i><span class="price"><?php echo ($c["menuinfo_afterdis"]); ?></span><span class="sta">状态：</span><span class="statusOn">
							<?php if($c["o_chudan"] == 0 ): ?>未出单<?php else: ?> 已出单<?php endif; ?>
							</span>
						</div>
						<?php if($c["o_chudan"] == 0 ): ?><div class="info-bottom">
								<div class="tuicai on" id="tui">退菜</div>
								<div class="cui on" id="cui">催一催</div>
							</div>
						<?php else: ?>
							 <div class="info-bottom">
								<div class="tuicai no">退菜</div>
								<div class="cui no">催一催</div>
							</div><?php endif; ?>
						
					</div>
				</div>
			</li><?php endforeach; endif; ?>

			
			
		</ul>
	</div>
	<!--<iframe src="footer.html" width="100%" frameborder="0" height="49px" style="position: fixed; bottom: 0px;"></iframe>-->
<!--底部-->
		<!-- <div class="footer">
	<a href="<?php echo U('Index/index');?>"><img src="/cafe/Public/home/images/home.png" />
		<p>首页</p>
	</a>
	<a href="<?php echo U('Classifi/index');?>"><img src="/cafe/Public/home/images/edit.png" />
		<p>分类</p>
	</a>
	<a href="<?php echo U('Menu/menu');?>"><img src="/cafe/Public/home/images/order.png" />
		<p>菜谱</p>
	</a>
	<a href="<?php echo U('Order/index');?>"><img src="/cafe/Public/home/img/footer/shopping.png" />
		<p>订单</p>
	</a>
	<a href="<?php echo U('Our/index');?>"><img src="/cafe/Public/home/images/personalcenter.png" />
		<p>我的</p>
	</a>
</div> -->
	<script type="text/javascript" src="/cafe/Public/home/js/jquery-2.1.0.js" ></script>
	<script type="text/javascript" src="/cafe/Public/home/js/myorder/myorder.js" ></script>
</body>
</html>