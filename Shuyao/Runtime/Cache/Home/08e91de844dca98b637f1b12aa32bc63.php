<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>首页</title>
		<script src="/cafe/Public/home/js/mui.min.js"></script>
		<link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/cafe/Public/home/css/Home/home.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/public.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/footer/footer.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/icons-extra.css" />r
		<script type="text/javascript" charset="utf-8">
			mui.init();
		</script>
		<style>
			.mui-active{
				background: #B00808 !important;
			}
		</style>
	</head>

	<body>
		<!--头部-->
		<header class="mui-bar mui-bar-nav">
			<a href="<?php echo U('Shach/seach');?>">
				<div class="Cable">
					<img src="/cafe/Public/home/img/home/Cable.png" />
				</div>
			</a>
			<div class="Scan">
				<a><img src="/cafe/Public/home/img/home/Scan.png" /></a>
			</div>

		</header>
		<!--轮播-->
		<div class="mui-content">
			<div class="mui-slider mui-a">
				<div class="mui-slider-group mui-slider-loop mui-pic">
					<div class="mui-slider-item">
						<a href=""><img src="/cafe/Public/home/img/home/banner-5.jpg" /></a>
					</div>
					<div class="mui-slider-item">
						<a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($data["id"]); ?>"><img src="/cafe/Public/home/img/home/banner-3.jpg" /></a>
					</div>
					<div class="mui-slider-item">
						<a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($data["id"]); ?>"><img src="/cafe/Public/home/img/home/banner1.png" /></a>
					</div>
					<div class="mui-slider-item">
						<a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($data["id"]); ?>"><img src="/cafe/Public/home/img/home/banner-6.jpg" /></a>
					</div>
					<div class="mui-slider-item">
						<a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($data["id"]); ?>"><img src="/cafe/Public/home/img/home/banner-4.jpg" /></a>
					</div>
					<div class="mui-slider-item">
						<a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($data["id"]); ?>"><img src="/cafe/Public/home/img/home/banner-5.jpg" /></a>
					</div>

					<div class="mui-slider-item">
						<a href="detail.html"><img src="/cafe/Public/home/img/home/banner-3.jpg" /></a>
					</div>
				</div>
				<div class="mui-slider-indicator w_banner">
					<div class="mui-indicator mui-active"></div>
					<div class="mui-indicator"></div>
					<div class="mui-indicator"></div>
					<div class="mui-indicator"></div>
					<div class="mui-indicator"></div>
					<div class="mui-indicator"></div>
				</div>
			</div>
			<!--八个主题区-->
			<div class="H-box">
				<div class="eight-z">
					<ul>
						<li>
							<a href="Discount.html">
								<img src="/cafe/Public/home/img/home/1.gif" />
								<p class="mui-text-center">限时折扣</p>
							</a>
						</li>
						<li>
							<a>
								<img src="/cafe/Public/home/img/home/2.gif" />
								<p class="mui-text-center">热卖推荐</p>
							</a>
						</li>
						<li>
							<a>
								<img src="/cafe/Public/home/img/home/3.gif" />
								<p class="mui-text-center">明星菜品</p>
							</a>
						</li>
						<li>
							<a href="Ranking.html?id=12">
								<img src="/cafe/Public/home/img/home/4.gif" />
								<p class="mui-text-center">一周热门</p>
							</a>
						</li>
					</ul>
					<ul>
						<li>
							<a>
								<img src="/cafe/Public/home/img/home/5.gif" />
								<p class="mui-text-center">人气菜肴</p>
							</a>
						</li>
						<li>
							<a href="Ranking.html?id=10">
								<img src="/cafe/Public/home/img/home/6.gif" />
								<p class="mui-text-center">新品发布</p>
							</a>
						</li>
						<li>
							<a>
								<img src="/cafe/Public/home/img/home/7.gif" />
								<p class="mui-text-center">食神菜单</p>
							</a>
						</li>
						<li>
							<a href="Discount.html">
								<img src="/cafe/Public/home/img/home/8.png" />
								<p class="mui-text-center">优惠活动</p>
							</a>
						</li>
					</ul>
					<!--分割线-->
					<hr style="border: 0.5px solid gainsboro;" />
				</div>
				<!--广告位-->
				<div class="guanggaowei">
					<img src="/cafe/Public/home/img/home/banner1.png" />
				</div>
				<hr style="border: 0.5px solid gainsboro; margin-top: 5px;" />
				<!--限时折扣-->
				<div class="uls xianshizhekou">

					<!--主题名称-->
					<div class="z-name">
						<p><span>限时折扣</span> </p>
					</div>
					<!--限时折扣列表-->
					<ul class="mui-table-view">
						<?php if(is_array($mindata)): foreach($mindata as $key=>$min): ?><li class="mui-table-view-cell mui-media">
							<a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($min["id"]); ?>">
								<img class="mui-media-object mui-pull-left" src="/cafe/Uploads/<?php echo ($min["minfo_img"]); ?>">
								<div class="mui-media-body">
									<?php echo ($min["minfo_name"]); ?>
									<div class='ms'><?php echo ($min["minfo_remark"]); ?></div>
									<div class='bot-xq'>
										<div class="mui-text-left"><?php echo ($min["mtype_name"]); ?></div>
										<div class="mui-text-right">￥<?php echo ($min["minfo_price"]); ?></div>
									</div>
								</div>
							</a>
						</li><?php endforeach; endif; ?>
					</ul>
				</div>
				<!--bigpic  菜品大图广告-->
				<div class="big-pic">
					<div>麻辣小龙虾</div>
					<ul>
						<li>
							<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
						</li>
						<li>
							<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
						</li>
						<li>
							<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
						</li>
					</ul>
					<!--菜品大图-->
					<div class="c-bigimg">
						<img src="/cafe/Public/home/img/home/banner1.png" />
					</div>
				</div>

				<!--热卖推荐-->
				<div class="uls xianshizhekou">

					<!--主题名称-->
					<div class="z-name">
						<p><span>热卖推荐</span> </p>
					</div>
					<!--限时折扣列表-->
					<ul class="mui-table-view">
						<?php if(is_array($hotdata)): foreach($hotdata as $key=>$hot): ?><li class="mui-table-view-cell mui-media">
							<a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($hot["id"]); ?>">
								<img class="mui-media-object mui-pull-left" src="/cafe/Uploads/<?php echo ($hot["minfo_img"]); ?>">
								<div class="mui-media-body">
									<?php echo ($hot["minfo_name"]); ?>
									<div class='ms'><?php echo ($hot["minfo_remark"]); ?></div>
									<div class='bot-xq'>
										<div class="mui-text-left"><?php echo ($hot["mtype_name"]); ?></div>
										<div class="mui-text-right">￥<?php echo ($hot["minfo_price"]); ?></div>
									</div>
								</div>
							</a>
						</li><?php endforeach; endif; ?>
					</ul>

					<!--bigpic  菜品大图广告-->
					<div class="big-pic">
						<div>麻辣小龙虾</div>
						<ul>
							<li>
								<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
							</li>
							<li>
								<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
							</li>
							<li>
								<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
							</li>
						</ul>
						<!--菜品大图-->
						<div class="c-bigimg">
							<img src="/cafe/Public/home/img/home/banner1.png" />
						</div>
					</div>
				</div>
				<!--推荐菜品-->
				<div class="uls xianshizhekou">

					<!--主题名称-->
					<div class="z-name">
						<p><span>推荐菜品</span> </p>
					</div>
					<!--推荐菜品列表-->
					<ul class="mui-table-view">
						<?php if(is_array($tjdata)): foreach($tjdata as $key=>$tj): ?><li class="mui-table-view-cell mui-media">
							<a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($tj["id"]); ?>">
								<img class="mui-media-object mui-pull-left" src="/cafe/Uploads/<?php echo ($tj["minfo_img"]); ?>">
								<div class="mui-media-body">
									<?php echo ($tj["minfo_name"]); ?>
									<div class='ms'><?php echo ($tj["minfo_remark"]); ?></div>
									<div class='bot-xq'>
										<div class="mui-text-left"><?php echo ($tj["mtype_name"]); ?></div>
										<div class="mui-text-right">￥<?php echo ($tj["minfo_price"]); ?></div>
									</div>
								</div>
							</a>
						</li><?php endforeach; endif; ?>
					</ul>

					<!--bigpic  菜品大图广告-->
					<div class="big-pic">
						<div>麻辣小龙虾</div>
						<ul>
							<li>
								<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
							</li>
							<li>
								<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
							</li>
							<li>
								<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
							</li>
						</ul>
						<!--菜品大图-->
						<div class="c-bigimg">
							<img src="/cafe/Public/home/img/home/banner1.png" />
						</div>
					</div>
				</div>
				<!--一周热门-->
				<div class="uls xianshizhekou">

					<!--主题名称-->
					<div class="z-name">
						<p><span>一周热门</span> </p>
					</div>
					<!--限时折扣列表-->
					<ul class="mui-table-view">
						<?php if(is_array($yizhouhotdata)): foreach($yizhouhotdata as $key=>$tj): ?><li class="mui-table-view-cell mui-media">
							<a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($tj["id"]); ?>">
								<img class="mui-media-object mui-pull-left" src="/cafe/Uploads/<?php echo ($tj["minfo_img"]); ?>">
								<div class="mui-media-body">
									<?php echo ($tj["minfo_name"]); ?>
									<div class='ms'><?php echo ($tj["minfo_remark"]); ?></div>
									<div class='bot-xq'>
										<div class="mui-text-left"><?php echo ($tj["mtype_name"]); ?></div>
										<div class="mui-text-right">￥<?php echo ($tj["minfo_price"]); ?></div>
									</div>
								</div>
							</a>
						</li><?php endforeach; endif; ?>
					</ul>

					<!--bigpic  菜品大图广告-->
					<div class="big-pic">
						<div>麻辣小龙虾</div>
						<ul>
							<li>
								<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
							</li>
							<li>
								<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
							</li>
							<li>
								<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
							</li>
						</ul>
						<!--菜品大图-->
						<div class="c-bigimg">
							<img src="/cafe/Public/home/img/home/banner1.png" />
						</div>
					</div>
				</div>

				<!--人气菜肴-->
				<div class="uls xianshizhekou">

					<!--主题名称-->
					<div class="z-name">
						<p><span>人气菜肴</span> </p>
					</div>
					<!--限时折扣列表-->
					<ul class="mui-table-view">
						<?php if(is_array($renqidata)): foreach($renqidata as $key=>$tj): ?><li class="mui-table-view-cell mui-media">
							<a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($tj["id"]); ?>">
								<img class="mui-media-object mui-pull-left" src="/cafe/Uploads/<?php echo ($tj["minfo_img"]); ?>">
								<div class="mui-media-body">
									<?php echo ($tj["minfo_name"]); ?>
									<div class='ms'><?php echo ($tj["minfo_remark"]); ?></div>
									<div class='bot-xq'>
										<div class="mui-text-left"><?php echo ($tj["mtype_name"]); ?></div>
										<div class="mui-text-right">￥<?php echo ($tj["minfo_price"]); ?></div>
									</div>
								</div>
							</a>
						</li><?php endforeach; endif; ?>
					</ul>

					<!--bigpic  菜品大图广告-->
					<div class="big-pic">
						<div>麻辣小龙虾</div>
						<ul>
							<li>
								<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
							</li>
							<li>
								<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
							</li>
							<li>
								<a><img src="/cafe/Public/home/img/recommended/a7311388aaf2a7b25eb3c5efb23dba64cc0e3ed02be6a-9NjQnf_fw658.jpg" /> </a>
							</li>
						</ul>
						<!--菜品大图-->
						<div class="c-bigimg">
							<img src="/cafe/Public/home/img/home/banner1.png" />
						</div>
					</div>
				</div>

				<!--新品发布-->
				<div class="uls xianshizhekou">

					<!--主题名称-->
					<div class="z-name">
						<p><span>新品菜肴</span> </p>
					</div>
					<!--限时折扣列表-->
					<ul class="mui-table-view">
					<?php if(is_array($newdata)): foreach($newdata as $key=>$new): ?><li class="mui-table-view-cell mui-media">
							<a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($new["id"]); ?>">
								<img class="mui-media-object mui-pull-left" src="/cafe/Uploads/<?php echo ($new["minfo_img"]); ?>">
								<div class="mui-media-body">
									<?php echo ($new["minfo_name"]); ?>
									<div class='ms'><?php echo ($new["minfo_remark"]); ?></div>
									<div class='bot-xq'>
										<div class="mui-text-left"><?php echo ($new["mtype_name"]); ?></div>
										<div class="mui-text-right">￥<?php echo ($new["minfo_price"]); ?></div>
									</div>
								</div>
							</a>
						</li><?php endforeach; endif; ?>
						
					</ul>
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
	<a href="<?php echo U('Order/index');?>"><img src="/cafe/Public/home/images/addcart.png" />
		<p>订单</p>
	</a>
	<a href="<?php echo U('Our/index');?>"><img src="/cafe/Public/home/images/personalcenter.png" />
		<p>我的</p>
	</a>
</div>
		</div>
	</body>
	<script>
		var gallery = mui('.mui-a');
		gallery.slider({
			interval: 1500 //自动轮播周期，若为0则不自动播放，默认为0；
		});
	</script>

</html>