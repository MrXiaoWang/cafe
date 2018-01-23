<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>我的</title>
    <script src="/cafe/Public/home/js/mui.min.js"></script>
    <link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet"/>
    <!--<link rel="stylesheet" href="css/public.css" />-->
    <link rel="stylesheet" href="/cafe/Public/home/css/mine.css" />
    <link rel="stylesheet" href="/cafe/Public/home/css/footer/footer.css" />
    <script type="text/javascript" charset="UTF-8">
      	mui.init();
    </script>
</head>
<body>
	<header class="mui-bar mui-bar-nav">
	    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	    <h1 class="mui-title">我的</h1>
	    <a class="mui-pull-right wod" href="management.html"><img src="/cafe/Public/home/img/icon/shezhi.png" style="width: 40px; margin-top: 5px;"/></a>
	</header>
	<div class="mui-content">
		<!--用户信息-->
	    <div class="user">
	    	<div class="user-info">
	    		<div class="user-top">
	    			<div class="user-pic">
	    				<!--头像-->
	    				<img src="/cafe/Public<?php echo ($result["u_img"]); ?>" alt='加载中'/>
	    			</div>
	    		</div>
	    		<div class="user-bottom">
	    			<div class="user-nichen"><?php echo ($result["u_name"]); ?></div>
	    			<div class="user-qianming"><?php echo ($result["u_gexing"]); ?></div>
	    		</div>
	    	</div>
	    </div>
	    <!--订单信息-->
	    <ul class="mui-table-view">
			<li class="mui-table-view-cell mui-media">
				<a href="#" class="mui-navigate-right">
					<img class="mui-media-object mui-pull-left" src="/cafe/Public/home/img/icon/tb1.png"/>
					<div class="mui-media-body">菜谱</div>
				</a>
			</li>
			<li class="mui-table-view-cell mui-media">
				<a href="#" class="mui-navigate-right">
					<img class="mui-media-object mui-pull-left" src="/cafe/Public/home/img/icon/tb2.png"/>
					<div class="mui-media-body">订单</div>
				</a>
			</li>
			<li class="mui-table-view-cell mui-media">
				<a href="#" class="mui-navigate-right">
					<img class="mui-media-object mui-pull-left" src="/cafe/Public/home/img/icon/tb4.png"/>
					<div class="mui-media-body">优惠</div>
				</a>
			</li>
		</ul>
		<!--优惠信息-->
	    <ul class="mui-table-view">
			<li class="mui-table-view-cell mui-media">
				<a href="#" class="mui-navigate-right">
					<img class="mui-media-object mui-pull-left" src="/cafe/Public/home/img/icon/tb5.png"/>
					<div class="mui-media-body">热门</div>
				</a>
			</li>
			<li class="mui-table-view-cell mui-media">
				<a href="#" class="mui-navigate-right">
					<img class="mui-media-object mui-pull-left" src="/cafe/Public/home/img/icon/tb3.png"/>
					<div class="mui-media-body">设置</div>
				</a>
			</li>
		</ul>
	</div>
	<!--底部-->
	<!--<iframe src="footer.html" width="100%" frameborder="0" height="49px" style="position: fixed; bottom: 0px;"></iframe>-->
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
</body>
</html>