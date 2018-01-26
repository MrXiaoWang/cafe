<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>搜索</title>
    <script src="/cafe/Public/home/js/mui.min.js"></script>
    <link href="/cafe/Public/home/css/mui.min.css" rel="stylesheet"/>
    <!--<link rel="stylesheet" href="css/public.css" />-->
    <link rel="stylesheet" href="/cafe/Public/home/css/seach/seach.css" />
    <script type="text/javascript" charset="UTF-8">
      	mui.init();
    </script>
</head>
<body>
	<header class="mui-bar mui-bar-nav">
	    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	     <form method="post" action="<?php echo U('Shach/seachxq');?>" name="tijiao">
		    <div class="mui-title">
		    	<span>搜菜谱</span>
		    	<input type="text" name="mohu" placeholder="想找什么，这里输入..."/>
		    </div>
		    <a class="mui-icon mui-pull-right wod"><img src="/cafe/Public/home/img/home/Cable.png" class="sea" onclick="tijiao.submit()" /></a>

	     </form>
	     
	</header>
	<div class="mui-content mui-content-padded">
	    <div class="seach-top">
	    	<span class="sea-yuan"><img src="/cafe/Public/home/img/icon/huan.png"/></span>
	    	<span>热门搜索</span>
	    </div>
	    <div class="mui-row">

	    	<?php if(is_array($rm)): foreach($rm as $key=>$m): ?><div class="mui-col-xs-4 mui-col-lg-4">
	    		<span><a href="<?php echo U('Classifi/detail');?>?id=<?php echo ($m["id"]); ?>"><?php echo (substr($m["minfo_name"],0,12)); ?></a></span>
	    	</div><?php endforeach; endif; ?>

	    	
	    </div>
	    <div class="seach-all"><a href="<?php echo U('Menu/menu');?>">查看全部菜谱分类</a></div>
	</div>
</body>
<script>
mui.init({
        statusBarBackground:"#FF0000"
    });
	function setStatusbarRed(){
        // 设置系统状态栏背景色为红色
        plus.navigator.setStatusBarBackground("#FF0000");
//		plus.navigator.setStatusBarBackground("#b00808");
}
</script>
</html>