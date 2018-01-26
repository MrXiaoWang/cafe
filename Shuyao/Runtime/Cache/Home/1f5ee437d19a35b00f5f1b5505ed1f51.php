<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/cafe/Public/home/css/Share.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/Ranking/Ranking.css" />
	</head>

	<body>
		<script src="/cafe/Public/home/js/mui.min.js"></script>
		<script type="text/javascript">
			mui.init()
		</script>
		<style>
			ul {
				overflow: scroll;
			}
			
			::-webkit-scrollbar {
				width: 0px
			}
		</style>
		<div id="wrapper">
			<!--overflow:hidden;-->
			<div id="first">
				<!-- <div class="Slogan">
					<img src="/cafe/Public/home/img/1.png" />
					<p>新秀菜谱，快来get新姿势~</p>
				</div> -->
				<ul>
				<?php if(is_array($list)): foreach($list as $key=>$m): ?><li>
						<a href="#">
							<div class="commodity">
								<div class="commodity_img">
									<a href="<?php echo U("Menu/detail");?>?id=<?php echo ($m["id"]); ?>">
										<img src="/cafe/Uploads/<?php echo ($m["minfo_img"]); ?>">
									</a>
								</div>
								<div class="describe">
									<!-- //菜品名称 -->
									<p><?php echo ($m["minfo_name"]); ?></p>
									<!-- 菜品原料 -->
									<p><?php echo (substr($m["minfo_remark"],0,42)); ?>.....</p>
									<!-- 下单人数 -->
									<p>下单：<span><?php echo ($m["minfo_num"]); ?></span></p>
									<!-- 下单价格 -->
									<p>价格：
									<h5 class="h5">￥<span><?php echo ($m["minfo_price"]); ?></span></h5></p>
									<!-- <a href="#">
										<div class="Button">
											加入订单
										</div>
									</a> -->

									<form action='<?php echo U("Order/addOrder");?>' method="post" >
									<div class="Button">
										<input type="hidden" value="<?php echo ($m["id"]); ?>" name="menu_id" />
										<input type="submit" id="add-dd" value="加入订单"/>
										</div>
									</form>


								</div>

							</div>
						</a>
					</li><?php endforeach; endif; ?>
				</ul>
			</div>
		</div>

	</body>
	
</html>