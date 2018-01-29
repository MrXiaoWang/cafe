<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>菜品详情</title>
    <script src="/cafe/Public/home/js/mui.min.js"></script>
    <script src="/cafe/Public/home/js/jquery-1.11.0.js"></script>
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
		    	
		    </div>
	    </div>
	</div>
	<!--加入订单-->
	<d class="mui-bar mui-bar-tab" id="nav">
		<a class="check" href="<?php echo U('Order/index');?>">查看订单</a>
			<input type="hidden" value="<?php echo ($data["id"]); ?>" name="menu_id" id="menu_id"/>
			<input type="button" id="add-dd" value="加入订单"/>
	</nav>
</body>
<script>
	document.getElementById("add-dd").addEventListener('tap', function() {
		$url = '<?php echo U("Order/addOrder");?>';
		$.post($url,{menu_id:$('#menu_id').val()},function(dd){
			if(dd.trim()=="1"){
				mui.toast('加入成功');	
			}else if(dd.trim()=="0"){
				mui.toast('加入失败');	
			}else if(dd.trim()=="2"){
				mui.toast('菜品已存在');	
			}
			
		});
		
	});

</script> 
</html>