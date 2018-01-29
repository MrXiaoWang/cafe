<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>优惠活动</title>
		<script src="/cafe/Public/home/js/mui.min.js"></script>
		<link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/cafe/Public/home/css/discount/Discount.css" />
		<link rel="stylesheet" href="/cafe/Public/home/css/Share.css" />
		<script type="text/javascript" charset="utf-8">
			mui.init();
		</script>
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">优惠活动</h1>
		</header>

		<div id="slider" class="mui-slider">
			<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
				<a class="mui-control-item mui-active" href="#item1mobile">
				限时折扣
			</a>
				<a class="mui-control-item" href="#item2mobile">
				周年庆
			</a>
				<a class="mui-control-item" href="#item3mobile">
				生日折扣
			</a>
			</div>
			<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-4"></div>
			<div class="mui-slider-group">
				<div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
					<div id="scroll1" class="mui-scroll-wrapper">

						<div class="mui-scroll">
							<div class="Slogan">
								<img src="/cafe/Public/home/img/Discount/2.jpg" />
							</div>
							<div class="datatime">
								<p>剩余时间：<span>02:00</span>
								</p>
							</div>
							<div class="p-box">
								<ul>
								<!-- one -->
								<?php if(is_array($onedata)): $i = 0; $__LIST__ = $onedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?><li>
										<div class="p-big">
											<img src="/cafe/Uploads/<?php echo ($one["minfo_img"]); ?>" />
											<div class="n-div">
												<div class="n-pone"><a class="x-name"><?php echo ($one["minfo_name"]); ?></a><a class="x-money">￥<?php echo ($one["minfo_price"]); ?></a></div>
												<div class="n-ptwo"><a><?php echo ($one["mtype_name"]); ?></a> <s>￥<?php echo ($one["minfo_original"]); ?></s> </div>
												<div class="n-btn">
								<form action='<?php echo U("Order/addOrder");?>' method="post">
									<input type="hidden" value="<?php echo ($one["id"]); ?>" name="menu_id"/>
									<input type="submit" style="color: #fff; border: 1px solid #b00808; background-color: #B00808;border-radius: 15px;font-size: 12px;    line-height: 12px; margin: 0px 7px;border: 0px;margin-left: 30px;" id="add-dd" value="加入订单"/> 
								</form>
													<!-- <input type="button" value="加入订单" /> -->
												</div>
											</div>
										</div>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
								<!-- one==== -->
								</ul>

								<ul>
								<!-- two -->
									<?php if(is_array($twodata)): $i = 0; $__LIST__ = $twodata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$two): $mod = ($i % 2 );++$i;?><li>
										<div class="p-big">
											<img src="/cafe/Uploads/<?php echo ($two["minfo_img"]); ?>" />
											<div class="n-div">
												<div class="n-pone"><a class="x-name"><?php echo ($two["minfo_name"]); ?></a><a class="x-money">￥<?php echo ($two["minfo_price"]); ?></a></div>
												<div class="n-ptwo"><a><?php echo ($two["mtype_name"]); ?></a> <s>￥<?php echo ($two["minfo_original"]); ?></s> </div>
												<div class="n-btn">
										<form action='<?php echo U("Order/addOrder");?>' method="post">
									<input type="hidden" value="<?php echo ($two["id"]); ?>" name="menu_id"/>
									<input type="submit" style="color: #fff; border: 1px solid #b00808; background-color: #B00808;border-radius: 15px;font-size: 12px;    line-height: 12px; margin: 0px 7px;border: 0px;margin-left: 30px;" id="add-dd" value="加入订单"/> 
								</form>
													<!-- <input type="button" value="加入订单" /> -->
												</div>
											</div>
										</div>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
								<!-- two ===-->
								</ul>
								<ul>
								<!-- three -->
								<?php if(is_array($threedata)): $i = 0; $__LIST__ = $threedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$three): $mod = ($i % 2 );++$i;?><li>
										<div class="p-big">
											<img src="/cafe/Uploads/<?php echo ($three["minfo_img"]); ?>" />
											<div class="n-div">
												<div class="n-pone"><a class="x-name"><?php echo ($three["minfo_name"]); ?></a><a class="x-money">￥<?php echo ($three["minfo_price"]); ?></a></div>
												<div class="n-ptwo"><a><?php echo ($three["mtype_name"]); ?></a> <s>￥<?php echo ($three["minfo_original"]); ?></s> </div>
												<div class="n-btn">
									<form action='<?php echo U("Order/addOrder");?>' method="post">
									<input type="hidden" value="<?php echo ($three["id"]); ?>" name="menu_id"/>
									<input type="submit" style="color: #fff; border: 1px solid #b00808; background-color: #B00808;border-radius: 15px;font-size: 12px;    line-height: 12px; margin: 0px 7px;border: 0px;margin-left: 30px;" id="add-dd" value="加入订单"/> 
								</form>
													<!-- <input type="button" value="加入订单" /> -->
												</div>
											</div>
										</div>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
								<!-- three=== -->
								</ul>

							</div>
						</div>
					</div>
				</div>
				<div id="item2mobile" class="mui-slider-item mui-control-content">
					<div id="scroll2" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<div class="Slogan">
								<img src="/cafe/Public/home/img/Discount/4.jpg" />
							</div>
							<div class="datatime">
								<p>新品优惠大放送</p>
							</div>
							<div class="p-boxs">
								<ul>
								<?php if(is_array($fourdata)): $i = 0; $__LIST__ = $fourdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$four): $mod = ($i % 2 );++$i;?><li>
										<div class="p-bigs">
											<img src="/cafe/Uploads/<?php echo ($four["minfo_img"]); ?>" />
											<div class="n-divs">
												<div class="n-pones"><a class="x-names"><?php echo ($four["minfo_name"]); ?></a></div>
												<div class="n-ptwos"><a><?php echo ($four["mtype_name"]); ?></a> </div>
												<div id="as">
													<a class="x-money"><span>现价：￥<?php echo ($four["minfo_price"]); ?></span><p>原价：<s>￥<?php echo ($four["minfo_original"]); ?></s> </p></a>
												</div>
												<div class="n-btns">
												<form action='<?php echo U("Order/addOrder");?>' method="post">
									<input type="hidden" value="<?php echo ($four["id"]); ?>" name="menu_id"/>
									<input type="submit" style="color: #fff; border: 1px solid #b00808; background-color: #B00808;border-radius: 15px;font-size: 12px;    line-height: 12px; margin: 0px 7px;    border: 0px; margin-left: 30px; margin: -10px 9px; float: right;" id="add-dd" value="加入订单"/> </form>
													<!-- <input type="button" value="加入订单" /> -->
												</div>
											</div>
										</div>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div id="item3mobile" class="mui-slider-item mui-control-content">
					<div id="scroll3" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<div class="Slogan">
								<img src="/cafe/Public/home/img/Discount/2.jpg" />
							</div>
							<div class="datatime">
								<p>生日优惠大放送</p>
							</div>
							<div class="p-box">
								<ul>
								<?php if(is_array($fivedata)): $i = 0; $__LIST__ = $fivedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$five): $mod = ($i % 2 );++$i;?><li>
										<div class="p-big">
											<img src="/cafe/Uploads/<?php echo ($five["minfo_img"]); ?>" />
											<div class="n-div">
												<div class="n-pone"><a class="x-name"><?php echo ($five["minfo_name"]); ?></a><a class="x-money">￥<?php echo ($five["minfo_price"]); ?></a></div>
												<div class="n-ptwo"><a><?php echo ($five["mtype_name"]); ?></a> <s>￥<?php echo ($five["minfo_original"]); ?></s> </div>
												<div class="n-btn">
									<form action='<?php echo U("Order/addOrder");?>' method="post">
									<input type="hidden" value="<?php echo ($five["id"]); ?>" name="menu_id"/>
									<input type="submit" style="color: #fff; border: 1px solid #b00808; background-color: #B00808;border-radius: 15px;font-size: 12px;    line-height: 12px; margin: 0px 7px;border: 0px;margin-left: 30px;" id="add-dd" value="加入订单"/> 
								</form>
													<!-- <input type="button" value="加入订单" /> -->
												</div>
											</div>
										</div>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
									
								</ul>

								<ul>
									<?php if(is_array($sixdata)): $i = 0; $__LIST__ = $sixdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$six): $mod = ($i % 2 );++$i;?><li>
										<div class="p-big">
											<img src="/cafe/Uploads/<?php echo ($six["minfo_img"]); ?>" />
											<div class="n-div">
												<div class="n-pone"><a class="x-name"><?php echo ($six["minfo_name"]); ?></a><a class="x-money">￥<?php echo ($six["minfo_price"]); ?></a></div>
												<div class="n-ptwo"><a><?php echo ($six["mtype_name"]); ?></a> <s>￥<?php echo ($six["minfo_original"]); ?></s> </div>
												<div class="n-btn">
									<form action='<?php echo U("Order/addOrder");?>' method="post">
									<input type="hidden" value="<?php echo ($six["id"]); ?>" name="menu_id"/>
									<input type="submit" style="color: #fff; border: 1px solid #b00808; background-color: #B00808;border-radius: 15px;font-size: 12px;    line-height: 12px; margin: 0px 7px;border: 0px;margin-left: 30px;" id="add-dd" value="加入订单"/> 
								</form>
													<!-- <input type="button" value="加入订单" /> -->
												</div>
											</div>
										</div>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
								<ul>
									<?php if(is_array($sevendata)): $i = 0; $__LIST__ = $sevendata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$seven): $mod = ($i % 2 );++$i;?><li>
										<div class="p-big">
											<img src="/cafe/Uploads/<?php echo ($seven["minfo_img"]); ?>" />
											<div class="n-div">
												<div class="n-pone"><a class="x-name"><?php echo ($seven["minfo_name"]); ?></a><a class="x-money">￥<?php echo ($seven["minfo_price"]); ?></a></div>
												<div class="n-ptwo"><a><?php echo ($seven["mtype_name"]); ?></a> <s>￥<?php echo ($seven["minfo_original"]); ?></s> </div>
												<div class="n-btn">
									<form action='<?php echo U("Order/addOrder");?>' method="post">
									<input type="hidden" value="<?php echo ($seven["id"]); ?>" name="menu_id"/>
									<input type="submit" style="color: #fff; border: 1px solid #b00808; background-color: #B00808;border-radius: 15px;font-size: 12px;    line-height: 12px; margin: 0px 7px;border: 0px;margin-left: 30px;" id="add-dd" value="加入订单"/> 
								</form>
													<!-- <input type="button" value="加入订单" /> -->
												</div>
											</div>
										</div>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</body>
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

</html>