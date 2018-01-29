<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>订单</title>
    <script src="/cafe/Public/home/js/mui.min.js"></script>
    <link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/cafe/Public/home/css/footer/footer.css" />
    <!--<link rel="stylesheet" href="cs	s/public.css" />-->
    <link rel="stylesheet" href="/cafe/Public/home/css/order/order.css" />
    <script type="text/javascript" src="/cafe/Public/home/js/jquery-2.1.0.js" ></script>
    <script type="text/javascript" src="/cafe/Public/home/js/order/order.js" ></script>
    <!--<script type="text/javascript" src="js/hua-delete.          " ></script>-->
    <script type="text/javascript" charset="UTF-8">
      	mui.init();
    </script>
</head>
<body>
	<header class="mui-bar mui-bar-nav">
	    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	    <h1 class="mui-title">订单</h1>
	    <a class="mui-pull-right manage">管理</a>
	</header>
	<div class="mui-content" >
	     <ul id="OA_task" class="mui-table-view">
	     	<?php if(is_array($cart)): foreach($cart as $k=>$c): ?><li class="mui-table-view-cell" value="<?php echo ($c["id"]); ?>">
		    		<div class="mui-slider-right mui-disabled">
		    			<a class="mui-btn mui-btn-warning">删除</a>
		    		</div>
		    		<div class="mui-slider-handle">
		    			<div class="dd-box">
		    				<div class="dd-left mui-pull-left">
		    					<div class="yuan choose"></div>
		    				</div>
		    				<div class="dd-right mui-pull-right">
		    					<div class="dd-info-left mui-pull-left">
		    						<!--图片-->
		    						<div class="img-box">
		    							<img src="/cafe/Uploads/<?php echo ($c["minfo_img"]); ?>" />
		    						</div>
		    					</div>
		    					<div class="dd-info-right mui-pull-right">
		    						<div class="dd-top">
		    							<!--菜名-->
		    							<p class="dd-title"><?php echo ($c["minfo_name"]); ?></p>
		    						</div>
		    						<div class="dd-bottom">
		    							<div class="dd-bottom-left mui-pull-left">
		    								<!--单价-->
		    								<i>￥</i><span class="dd-price money<?php echo ($k); ?>"><?php echo ($c["minfo_price"]); ?></span>
		    							</div>
		    							<div class="dd-bottom-right mui-pull-right">
		    								<!--数量操作-->
		    								<div class="shu-jian jian<?php echo ($k); ?>">-</div>
		    								<input type="text" value="1" class="number<?php echo ($k); ?>" class="num" />
		    								<div class="shu-jia jia<?php echo ($k); ?>">+</div>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
		    			</div>
		    		</div>
		    	</li><?php endforeach; endif; ?>
		</ul>
		<div id="pay-box" class="mui-popover mui-popover-action mui-popover-bottom">
			<ul class="mui-table-view">
				<p class="zhifu-tit">请选择支付方式</p>
				<li class="mui-table-view-cell mui-media">
					<a href="#" class="mui-navigate-right">
						<img class="mui-media-object mui-pull-left" src="/cafe/Public/home/img/icon/zhhifubao.png"/>
						<div class="mui-media-body">支付宝支付</div>
					</a>
				</li>
				<li class="mui-table-view-cell mui-media">
					<a href="#" class="mui-navigate-right">
						<img class="mui-media-object mui-pull-left" src="/cafe/Public/home/img/icon/weixin.png"/>
						<div class="mui-media-body">微信支付</div>
					</a>
				</li>
				<li class="mui-table-view-cell mui-media">
					<a href="#" class="mui-navigate-right">
						<img class="mui-media-object mui-pull-left" src="/cafe/Public/home/img/icon/qq.png"/>
						<div class="mui-media-body">QQ支付</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!--底部计算-->
	<nav class="mui-bar mui-bar-tab" style="background: white !important;">
	    <div class="dd-show mui-pull-left">
			<div class="show-left mui-pull-left">
				<div class="all-choose flo choose"></div>
				<span class="flo ml">全选</span>
			</div>
			<div class="show-right mui-pull-right">
				<span style="color: #B00808 !important; ">合计：</span>
				<i  style="color: #B00808 !important; ">￥</i><span class="dd-total-price"  style="color: #B00808 !important; ">25</span>
			</div>
		</div>
		<a href="#pay-box"><div class="dd-btn mui-pull-right">结算(<span class="d-num"><?php echo $count;?></span>)</div></a>
	</nav>

	<!--底部-->
		<div class="footer">
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
</div>
	
</body>
<script type="text/javascript" src="/cafe/Public/home/js/jquery-1.11.0.js" ></script>
<script>
	$(function(){
		// 获取价钱
		
		$count = <?php echo $count;?>;
		$price = new Array();
		$sum = 0; 
		for(var i=0;i<$count;i++)
		{
			show(i);
		}
		
		//显示某个菜品总价
		function show(i){
			//循环获取菜品价格
			$price[i] = parseInt($('.money'+i).text());
			$sum = parseInt(eval($price.join("+")));
			//添加菜品数量
			$('.jia'+i).click(function(){
				$('.money'+i).text($price[i]*parseInt($('.number'+i).val()));
				$sum += $price[i];
				$(".dd-total-price").text($sum);
			})
			
			//减少菜品数量
			$('.jian'+i).click(function(){
				if(parseInt($('.number'+i).val()) <= 1){
					$('.money'+i).text($price[i]);
					$sum = parseInt(eval($price.join("+")));
					$(".dd-total-price").text($sum);
					return false;
				}else{
					$('.money'+i).text($price[i]*parseInt($('.number'+i).val()));
					$sum -= $price[i];
					$(".dd-total-price").text($sum);
				}
			})
			$(".dd-total-price").text($sum);
		}
		//点击全选
		$(".all-choose").click(function() {
			$(this).toggleClass("choose");
			//得到所有商品勾选框
			var box = $("ul li .yuan");
			if($(this).hasClass("choose")) {
				box.addClass("choose");
				$('.dd-total-price').text($sum);	
				$('.d-num').text($('.choose').length-1);
			} else {
				box.removeClass("choose");

				$('.dd-total-price').text(0);	
				$('.d-num').text(0);
			}

		})
		
	})
	
	
</script>
</html>