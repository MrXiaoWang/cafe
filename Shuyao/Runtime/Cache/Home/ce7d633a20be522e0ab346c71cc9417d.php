<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>菜品分类</title>
		<script src="/cafe/Public/home/js/mui.min.js"></script>
		<link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/cafe/Public/home/css/public.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/classify/classify.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/footer/footer.css" />
		<script type="text/javascript" charset="UTF-8">
			mui.init();
		</script>
	</head>
	<style>
		html,
		body,
		.mui-content,
		.box,.j-content{
			height: 100%;
		}
	</style>

	<body>
		<!--头部-->
		<header class="mui-bar mui-bar-nav">
			<a href="seach.html">
				<div class="Cable">
					<img src="/cafe/Public/home/img/home/Cable.png" />
				</div>
			</a>
			<div class="Scan">
				<a><img src="/cafe/Public/home/img/home/Scan.png" /></a>
			</div>

		</header>
		<div class="mui-content" style="height: 100%; margin-bottom: 50px !important;">
			<div class="box" style="margin-bottom: 50px !important;">
				<aside>
					<!--左列表-->
					<div class="menu-left scrollbar-none r-line" id="sidebar" style="width: 25%;">
						<ul>
							<li class="active"><a href="<?php echo U('Classifi/index');?>">推荐</a></li>
							<!-- 循环查询菜品分类开始 -->
							<?php if(is_array($data)): foreach($data as $key=>$cls): ?><li><a target="right" href="<?php echo U('Classifi/menuinfo');?>?id=<?php echo ($cls["mtype_id"]); ?>"><?php echo ($cls["mtype_name"]); ?></a></li><?php endforeach; endif; ?>
							<!-- =======循环查询菜品分类结束====== -->
						</ul>
					</div>
				</aside>
				<!--右内容-->
				<!--推荐-->
				<iframe src="tuijian.html" name="right"  width="100%" height="100% " class="ifam"></iframe>

			</div>
		</div>
		<!--<iframe src="footer.html"  width="100%" frameborder="0" height="49px" style="position: fixed; bottom: 0px;"></iframe>-->
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
			<a href="myOrder.html"><img src="/cafe/Public/home/images/addcart.png" />
				<p>订单</p>
			</a>
			<a href="<?php echo U('Our/index');?>"><img src="/cafe/Public/home/images/personalcenter.png" />
				<p>我的</p>
			</a>
		</div>
		<script type="text/javascript" src="/cafe/Public/home/js/jquery-2.1.0.js"></script>
		<script type="text/javascript" src="/cafe/Public/home/js/classify/classify.js"></script>
		<script>
			mui.init({
				swipeBack: false
			});
			(function($) {
				$('.mui-scroll-wrapper').scroll({
					indicators: true //是否显示滚动条
				});
			})(mui);
			$(function() {
				$("#sidebar>ul>li:nth-of-type(2)").click(function() {
					$(".j-content").html("<iframe src='2.html' frameborder='0' width='100%' height='100%' class='ifam'></iframe>")
				})
				$("#sidebar>ul>li:nth-of-type(1)").click(function() {
					$(".j-content").html("<iframe src='1.html' frameborder='0' width='100%' height='100%' class='ifam'></iframe>")
				})
			})
		</script>
	</body>

</html>