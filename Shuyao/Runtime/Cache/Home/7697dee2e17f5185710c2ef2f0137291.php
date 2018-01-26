<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>菜谱</title>
		<script src="/cafe/Public/qiantai/js/mui.min.js"></script>
		<link href="/cafe/Public/qiantai/css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/cafe/Public/qiantai/css/Share.css" />
		<link rel="stylesheet" href="/cafe/Public/qiantai/css/menu/menu.css" />
		<link rel="stylesheet" href="/cafe/Public/qiantai/css/footer/footer.css" />
		<script type="text/javascript" charset="UTF-8">
			mui.init();
		</script>
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">菜谱</h1>
		</header>

		<div id="slider" class="mui-slider">
			<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
				<a class="mui-control-item mui-active" href="#item1mobile">
					菜品
				</a>
				<a class="mui-control-item" href="#item2mobile">
					酒水
				</a>
			</div>
			<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-4"></div>
			<div class="mui-slider-group">
				<div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
					<div id="scroll1" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<div class="box">
								<ul>
									       <!-- 遍历数据库数据 --> 
        								<?php if(is_array($list)): foreach($list as $key=>$b): ?><li>
										<div class="box-a">
											<a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($b["id"]); ?>">
												<img src="/cafe/Uploads/<?php echo ($b["minfo_img"]); ?>">
											</a>
											<div class="pox-b">
												<p class="p1"><?php echo ($b["minfo_name"]); ?></a>
													<div class="n-btn">
														<p class="p2">￥<span><?php echo ($b["minfo_price"]); ?></span><s class="mst">￥<?php echo ($b["minfo_original"]); ?></s></p>
														<!-- <input type="button" value="加入订单" /> -->

										<form action='<?php echo U("Order/addOrder");?>' method="post">
										<input type="hidden" value="<?php echo ($b["id"]); ?>" name="menu_id"/>
										<input type="submit" id="add-dd" value="加入订单"/>
										</form>

													</div>
											</div>
										</div>
										</li><?php endforeach; endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div id="item2mobile" class="mui-slider-item mui-control-content">
					<div id="scroll2" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<div class="box">
								<ul>
								<?php if(is_array($lists)): foreach($lists as $key=>$c): ?><li>
										<div class="box-a">
											<a href="<?php echo U("detail");?>?id=<?php echo ($c["id"]); ?>">
												<img src="/cafe/Uploads/<?php echo ($c["minfo_img"]); ?>">
											</a>
											<div class="pox-b">
												<p class="p1"><?php echo ($c["minfo_name"]); ?></a>
													<div class="n-btn">
														<p class="p2">￥<span><?php echo ($c["minfo_price"]); ?></span><s class="mst">￥<?php echo ($c["minfo_original"]); ?></s></p>
														<!-- <input type="button" value="加入订单" />
														 -->
														 <form action='<?php echo U("Order/addOrder");?>' method="post">
										<input type="hidden" value="<?php echo ($c["id"]); ?>" name="menu_id"/>
										<input type="submit" id="add-dd" value="加入订单"/>
										</form>
													</div>
											</div>

										</div>
									</li><?php endforeach; endif; ?>
									
								</ul>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
		<!--<iframe src="footer.html" width="100%" frameborder="0" height="49px" style="position: fixed; bottom: 0px;"></iframe>-->
		<!--底部-->
		<div class="footer">
			<a href="<?php echo U('Index/index');?>"><img src="/cafe/Public/home/images/home.png" />
				<p>首页</p>
			</a>
			<a href="<?php echo U('Classifi/index');?>"><img src="/cafe/Public/home/img/footer/fenlei.png" />
				<p>分类</p>
			</a>
			<a href="<?php echo U('Menu/menu');?>"><img src="/cafe/Public/home/images/order.png" />
				<p>菜谱</p>
			</a>
			<a href="<?php echo U('Order/index');?>"><img src="/cafe/Public/home/images/addcart.png" />
				<p>订单</p>
			</a>
			<a href="<?php echo U('Our/index');?>"><img src="/cafe/Public/home/images/personalcenter.png" />
				<p>我的</p>
			</a>
		</div>
	</body>

	<script type="text/javascript" src="/cafe/Public/qiantai/js/Share.js"></script>

</html>