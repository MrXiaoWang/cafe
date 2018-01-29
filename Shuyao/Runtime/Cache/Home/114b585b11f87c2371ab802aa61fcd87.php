<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>一周热门</title>
		<script src="/cafe/Public/home/js/mui.min.js"></script>
		<link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/cafe/Public/home/css/Share.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/Ranking/Ranking.css" />
		<script type="text/javascript" charset="UTF-8">
			mui.init();
		</script>
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">
				<p>菜单</p>
				<div class="circular"></div>
				<p>排行</p>
			</h1>
		</header>
		<div id="slider" class="mui-slider">
			<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
				<a class="mui-control-item mui-active" href="#item1mobile">
				最新发布
			</a>
				<a class="mui-control-item" href="#item2mobile">
				一周热门
			</a>
				<a class="mui-control-item" href="#item3mobile">
				人气菜肴
			</a>
				<a class="mui-control-item" href="#item4mobile">
				明星菜肴
			</a>
				<a class="mui-control-item" href="#item5mobile">
				食神菜谱
			</a>
			</div>
			<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-4"></div>

			<div class="mui-slider-group">
				<!-- 最新发布 -->
				<div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
					<div class="Slogan">
						<img src="/cafe/Public/home/img/1.png" />
						<p>新秀菜谱，快来get新姿势~</p>
					</div>
					<div id="scroll1" class="mui-scroll-wrapper">
						<div class="mui-scroll">
						<?php if(is_array($onedata)): $i = 0; $__LIST__ = $onedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?><a href="#">
								<div class="commodity">
									<div class="commodity_img">
										<img src="/cafe/Uploads/<?php echo ($one["minfo_img"]); ?>" />
									</div>
									<div class="describe">
										<p><?php echo ($one["minfo_name"]); ?></p>
										<p style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1; overflow: hidden;"><?php echo ($one["minfo_remark"]); ?></p> <p>类型：<span><?php echo ($one["mtype_name"]); ?></span></p> <p>价格：
											<h5 class="h5">￥<span><?php echo ($one["minfo_price"]); ?></span></h5></p>
										<a href="">
								<form action='<?php echo U("Order/addOrder");?>' method="post">
									<input type="hidden" value="<?php echo ($seven["id"]); ?>" name="menu_id"/>
									<input type="submit" style="color: #fff; border: 1px solid #b00808; background-color: #B00808;border-radius: 15px;font-size: 12px;    line-height: 12px; margin: -30px 8px;border: 0px;float: right;margin-right: -40px;;" id="add-dd" value="加入订单"/> 
								</form>
											<!-- <div class="Button">
												加入订单
											</div> -->
										</a>
									</div>

								</div>
							</a><?php endforeach; endif; else: echo "" ;endif; ?>	
						</div>
					</div>
				</div>
				<!-- =======最新发布结束==== -->
				<div id="item2mobile" class="mui-slider-item mui-control-content">
					<div class="Slogan">
						<img src="/cafe/Public/home/img/1.png" />
						<p>近7天来最受欢迎的菜品，不容错过。</p>
					</div>
					<div id="scroll1" class="mui-scroll-wrapper">
						<div class="mui-scroll">
						<?php if(is_array($twodata)): $i = 0; $__LIST__ = $twodata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$two): $mod = ($i % 2 );++$i;?><a href="#">
								<div class="commodity">
									<div class="commodity_img">
										<img src="/cafe/Uploads/<?php echo ($two["minfo_img"]); ?>" />
									</div>
									<div class="describe">
										<p><?php echo ($two["minfo_name"]); ?></p>
										<p style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1; overflow: hidden;"><?php echo ($two["minfo_remark"]); ?></p> <p>类型：<span><?php echo ($two["mtype_name"]); ?></span></p> <p>价格：
											<h5 class="h5">￥<span><?php echo ($two["minfo_price"]); ?></span></h5></p>
										<a href="">
								<form action='<?php echo U("Order/addOrder");?>' method="post">
									<input type="hidden" value="<?php echo ($two["id"]); ?>" name="menu_id"/>
									<input type="submit" style="color: #fff; border: 1px solid #b00808; background-color: #B00808;border-radius: 15px;font-size: 12px;    line-height: 12px; margin: -30px 8px;border: 0px;float: right;margin-right: -40px;" id="add-dd" value="加入订单"/> 
								</form>
											<!-- <div class="Button">
												加入订单
											</div> -->
										</a>
									</div>

								</div>
							</a><?php endforeach; endif; else: echo "" ;endif; ?>	
						</div>
					</div>

				</div>
				<div id="item3mobile" class="mui-slider-item mui-control-content">
					<div class="Slogan">
						<img src="/cafe/Public/home/img/1.png" />
						<p>超过50人下单的菜品都超赞。</p>
					</div>
					<div id="scroll1" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<?php if(is_array($threedata)): $i = 0; $__LIST__ = $threedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$three): $mod = ($i % 2 );++$i;?><a href="#">
								<div class="commodity">
									<div class="commodity_img">
										<img src="/cafe/Uploads/<?php echo ($three["minfo_img"]); ?>" />
									</div>
									<div class="describe">
										<p><?php echo ($three["minfo_name"]); ?></p>
										<p style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1; overflow: hidden;"><?php echo ($three["minfo_remark"]); ?></p> <p>类型：<span><?php echo ($three["mtype_name"]); ?></span></p> <p>价格：
											<h5 class="h5">￥<span><?php echo ($three["minfo_price"]); ?></span></h5></p>
										<a href="">
								<form action='<?php echo U("Order/addOrder");?>' method="post">
									<input type="hidden" value="<?php echo ($three["id"]); ?>" name="menu_id"/>
									<input type="submit" style="color: #fff; border: 1px solid #b00808; background-color: #B00808;border-radius: 15px;font-size: 12px;    line-height: 12px; margin: -30px 8px;border: 0px;float: right;margin-right: -40px;" id="add-dd" value="加入订单"/> 
								</form>
											<!-- <div class="Button">
												加入订单
											</div> -->
										</a>
									</div>

								</div>
							</a><?php endforeach; endif; else: echo "" ;endif; ?>	
							
						</div>
					</div>
				</div>
				<div id="item4mobile" class="mui-slider-item mui-control-content">
					<div class="Slogan">
						<img src="/cafe/Public/home/img/1.png" />
						<p>超过百人下单的菜品都是菜品中的超级巨星。</p>
					</div>
					<div id="scroll1" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<?php if(is_array($fourdata)): $i = 0; $__LIST__ = $fourdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$four): $mod = ($i % 2 );++$i;?><a href="#">
								<div class="commodity">
									<div class="commodity_img">
										<img src="/cafe/Uploads/<?php echo ($four["minfo_img"]); ?>" />
									</div>
									<div class="describe">
										<p><?php echo ($four["minfo_name"]); ?></p>
										<p style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1; overflow: hidden;"><?php echo ($four["minfo_remark"]); ?></p> <p>类型：<span><?php echo ($four["mtype_name"]); ?></span></p> <p>价格：
											<h5 class="h5">￥<span><?php echo ($four["minfo_price"]); ?></span></h5></p>
										<a href="">
								<form action='<?php echo U("Order/addOrder");?>' method="post">
									<input type="hidden" value="<?php echo ($four["id"]); ?>" name="menu_id"/>
									<input type="submit" style="color: #fff; border: 1px solid #b00808; background-color: #B00808;border-radius: 15px;font-size: 12px;    line-height: 12px; margin: -30px 8px;border: 0px;float: right;margin-right: -40px;" id="add-dd" value="加入订单"/> 
								</form>
											<!-- <div class="Button">
												加入订单
											</div> -->
										</a>
									</div>

								</div>
							</a><?php endforeach; endif; else: echo "" ;endif; ?>	
							
						</div>
					</div>
				</div>
				<div id="item5mobile" class="mui-slider-item mui-control-content">
					<div class="Slogan">
						<img src="/cafe/Public/home/img/1.png" />
						<p>超过200百人下单的菜品绝对非凡！</p>
					</div>
					<div id="scroll1" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<?php if(is_array($fivedata)): $i = 0; $__LIST__ = $fivedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$five): $mod = ($i % 2 );++$i;?><a href="#">
								<div class="commodity">
									<div class="commodity_img">
										<img src="/cafe/Uploads/<?php echo ($five["minfo_img"]); ?>" />
									</div>
									<div class="describe">
										<p><?php echo ($five["minfo_name"]); ?></p>
										<p style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1; overflow: hidden;"><?php echo ($five["minfo_remark"]); ?></p> <p>类型：<span><?php echo ($five["mtype_name"]); ?></span></p> <p>价格：
											<h5 class="h5">￥<span><?php echo ($five["minfo_price"]); ?></span></h5></p>
										<a href="">
								<form action='<?php echo U("Order/addOrder");?>' method="post">
									<input type="hidden" value="<?php echo ($five["id"]); ?>" name="menu_id"/>
									<input type="submit" style="color: #fff; border: 1px solid #b00808; background-color: #B00808;border-radius: 15px;font-size: 12px;    line-height: 12px; margin: -30px 8px;border: 0px;float: right;margin-right: -40px;" id="add-dd" value="加入订单"/> 
								</form>
											<!-- <div class="Button">
												加入订单
											</div> -->
										</a>
									</div>

								</div>
							</a><?php endforeach; endif; else: echo "" ;endif; ?>
							
						</div>
					</div>

				</div>

			</div>
		</div>

	</body>
	<script type="text/javascript" src="/cafe/Public/home/js/Share.js"></script>

</html>