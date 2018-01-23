<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>菜品详情</title>
    <script src="/cafe/Public/home/js/mui.min.js"></script>
    <link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/cafe/Public/home/css/xiangqing.css" />
    <link rel="stylesheet" href="/cafe/Public/home/css/detail/detail.css" />
    <script type="text/javascript" charset="UTF-8">
      	mui.init();
    </script>
</head>
<body>
	<header class="mui-bar mui-bar-nav">
	    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	    <h1 class="mui-title"><?php echo ($data["minfo_name"]); ?></h1>
	</header>
	<div class="mui-content">
		<!--详情图-->
	    <div class="detail-img">
	    	<img src="/cafe/Uploads/<?php echo ($data["minfo_img"]); ?>"/>
	    </div>
	    <div class="mui-content mui-content-padded">
	    	<div class="det-box">
		    	<div class="det-top">
		    		<div class="top-left mui-pull-left">
		    			<span class="det-tit"><?php echo ($data["minfo_name"]); ?></span>
		    		</div>
		    		<div class="top-right mui-pull-right">
		    			<i>现价：￥</i><span class="det-price"><?php echo ($data["minfo_price"]); ?></span>
		    		</div>
		    	</div>
		    	<div class="det-bottom">
		    		<div class="bottom-left mui-pull-left">
		    			
		    		</div>
		    		<div class="bottom-right mui-pull-right">
		    			<span>原价：</span><s><i>￥</i><span class="det-Oldprice"><?php echo ($data["minfo_original"]); ?></span></s>
		    		</div>
		    	</div>
		    </div>
		    <!--描述-->
		    <div class="describe">
		    	<!--用料-->
		    	<div class="liao">
		    		<p class="liao-tit">用料：</p>
		    		<p class="liao-content"><?php echo ($data["minfo_remark"]); ?></p>
		    	</div>
		    	<!--制作方法-->
		    	<!-- <div class="make">
		    		<p class="make-tit">制作：</p>
		    		<div class="make-step">
		    			<p class="step-div">
		    				<i class="step-num">1、</i>
		    				准备的里脊肉或者鸡胸肉切成丁状，切的时候可是有讲究
的哦～用切芒果的样子，轻轻在表皮划几刀。why?里脊肉
或者鸡胸肉上面的白膜会禁止味道进入！鸡胸肉放入料酒、
胡椒粉，再加一些水，让鸡胸肉吃饱水。
							<div class="box_pic">
								<img src="/cafe/Public/home/img/cai/s1.jpg" />
							</div>
		    			</p>
		    			<p class="step-div">
		    				<i class="step-num">2、</i>
		    				然后在加入盐、淀粉和蛋清，为什么要先加水再加盐、
淀粉和蛋清呢？因为蛋清预热会凝固，锁住水分～
							<div class="box_pic">
								<img src="/cafe/Public/home/img/cai/s2.jpg" />
							</div>
		    			</p>
		    			<p class="step-div">
		    				<i class="step-num">3、</i>
		    				锅中放入清油，4成热，再分别放入辣椒喝花椒，有
点香味再放入鸡胸肉一起炒。
							<div class="box_pic">
								<img src="/cafe/Public/home/img/cai/s3.jpg" />
							</div>
		    			</p>
		    			<p class="step-div">
		    				<i class="step-num">4、</i>
		    				调制酱汁：2勺料酒、2勺糖、3勺醋、4勺酱油、盐、水淀粉。
		    				<div class="box_pic">
			    				<img src="/cafe/Public/home/img/cai/s4.jpg" />
							</div>
		    			</p>
		    			<p class="step-div">
		    				<i class="step-num">5、</i>
		    				最后收锅的时候放入大葱段，爆香一下就可以啦～
		    				<div class="box_pic">
			    				<img src="/cafe/Public/home/img/cai/s5.jpg" />
							</div>
		    			</p>
		    			<p class="step-div">
		    				<i class="step-num">6、</i>
		    				放入花生米，翻炒几秒钟就起锅。
		    				<div class="box_pic">
			    				<img src="/cafe/Public/home/img/cai/s6.jpg" />
							</div>
		    			</p>
		    		</div>
		    	</div> -->
		    </div>
	    </div>
	</div>
	<!--加入订单-->
	<d class="mui-bar mui-bar-tab" id="nav">
		<a class="check" href="order.html">查看订单</a>
	    <input type="button" id="add-dd" value="加入订单"/>
	</nav>
</body>
<script>
	document.getElementById("add-dd").addEventListener('tap', function() {
		mui.toast('加入成功');
	});

</script>
</html>