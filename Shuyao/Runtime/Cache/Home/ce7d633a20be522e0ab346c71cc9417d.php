<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>分类</title>
		<script src="/cafe/Public/home/js/mui.min.js"></script>
		<link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet" />
		<!-- <link rel="stylesheet" href="/cafe/Public/home/css/public.css" /> -->
		<link rel="stylesheet" href="/cafe/Public/home/css/classify/classify.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/footer/footer.css" />
		<script type="text/javascript" charset="UTF-8">
			mui.init();
		</script>
	</head>

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
		<div class="mui-content">
			<div class="box">
				<aside>
					<!--左列表-->
					<div class="menu-left scrollbar-none r-line" id="sidebar" style="height: auto;">
						<ul>
							<li class="active">推荐</li>
							<!-- 循环查询菜品分类开始 -->
							<?php if(is_array($data)): foreach($data as $key=>$cls): ?><li><?php echo ($cls["mtype_name"]); ?></li><?php endforeach; endif; ?>
							<!-- =======循环查询菜品分类结束====== -->
						</ul>
					</div>
				</aside>
				<!--右内容-->
				<!--推荐-->
				<section class="menu-right padding-all j-content">
					<div class="mui-row">
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="detail.html">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">推荐</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="detail.html">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">推荐</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="detail.html">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
					</div>
				</section>
				<!--肉类-->
				<section class="menu-right padding-all j-content" style="display:none">
					<div class="mui-row">
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">肉类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">肉类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
					</div>
				</section>
				<!--禽蛋类-->
				<section class="menu-right padding-all j-content" style="display:none">
					<div class="mui-row">
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">禽蛋类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">禽蛋类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
					</div>
				</section>
				<!--鱼类-->
				<section class="menu-right padding-all j-content" style="display:none">
					<div class="mui-row">
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">鱼类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">鱼类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
					</div>
				</section>
				<!--虾类-->
				<section class="menu-right padding-all j-content" style="display:none">
					<div class="mui-row">
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">虾类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">虾类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
					</div>
				</section>
				<!--蟹类-->
				<section class="menu-right padding-all j-content" style="display:none">
					<div class="mui-row">
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">蟹类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">蟹类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
					</div>
				</section>
				<!--蔬菜类-->
				<section class="menu-right padding-all j-content" style="display:none">
					<div class="mui-row">
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">蔬菜类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">蔬菜类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
					</div>
				</section>
				<!--菌类-->
				<section class="menu-right padding-all j-content" style="display:none">
					<div class="mui-row">
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">菌类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">菌类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">菌类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
					</div>
				</section>
				<!--鲜果类-->
				<section class="menu-right padding-all j-content" style="display:none">
					<div class="mui-row">
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">鲜果类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">鲜果类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
					</div>
				</section>
				<!--红酒类-->
				<section class="menu-right padding-all j-content" style="display:none">
					<div class="mui-row">
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">红酒类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">红酒类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
					</div>
				</section>
				<!--白酒类-->
				<section class="menu-right padding-all j-content" style="display:none">
					<div class="mui-row">
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">白酒类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">白酒类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
					</div>
				</section>
				<!--饮料类-->
				<section class="menu-right padding-all j-content" style="display:none">
					<div class="mui-row">
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">饮料类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">饮料类</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
					</div>
				</section>
				<!--矿泉水-->
				<section class="menu-right padding-all j-content" style="display:none">
					<div class="mui-row">
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">矿泉水</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">矿泉水</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
						<div class="mui-col-xs-4 mui-col-lg-4">
							<a href="#">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
								<p class="cl-tit">麻辣</p>
							</a>
						</div>
					</div>
				</section>
			</div>
		</div>
		<!--<iframe src="footer.html"  width="100%" frameborder="0" height="49px" style="position: fixed; bottom: 0px;"></iframe>-->
		<!--底部-->
		<div class="footer">
			<a href="index.html"><img src="/cafe/Public/home/images/home.png" />
				<p>首页</p>
			</a>
			<a href="classify.html"><img src="/cafe/Public/home/images/edit.png" />
				<p>分类</p>
			</a>
			<a href="menu.html"><img src="/cafe/Public/home/images/order.png" />
				<p>菜谱</p>
			</a>
			<a href="myOrder.html"><img src="/cafe/Public/home/images/addcart.png" />
				<p>订单</p>
			</a>
			<a href="mine.html"><img src="/cafe/Public/home/images/personalcenter.png" />
				<p>我的</p>
			</a>
		</div>
		<script type="text/javascript" src="/cafe/Public/home/js/jquery-2.1.0.js"></script>
		<script type="text/javascript" src="/cafe/Public/home/js/classify/classify.js" ></script>
		<script>
			mui.init({
				swipeBack: false
			});
			(function($) {
				$('.mui-scroll-wrapper').scroll({
					indicators: true //是否显示滚动条
				});
			})(mui);
		</script>
	</body>

</html>