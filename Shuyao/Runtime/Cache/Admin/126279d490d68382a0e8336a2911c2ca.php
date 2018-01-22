<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>菜品图</title>
	<link rel="stylesheet" href="/cafe/Public/css/bs/bootstrap.css">
	<script src="/cafe/Public/js/bs/bootstrap.min.js"></script>
	<style type="text/css">
     .tu{width: 100%;}
     .hh{height: 220px;width: 170px; float: left;margin-left: 13px;}
     .tianjia{margin-bottom: 10px;}
     .menuname{width: 150px;height: 30px;text-align: center;}
     .cname{line-height: 30px;font-size: 20px;}
     /*.fenye{float: left; width: 100%; background: black;margin-top: 10px;height: 80px;} */
     </style>

</head>
<body>
<!-- 顶部添加 -->
<div class="tianjia">
   <ul class="search" style="padding-left:10px;">
        <li> 
        <a href="<?php echo U('Menu/type');?>" class="button border-main icon-plus-square-o" >
         返回 </a> 
        </li>
      </ul>
</div>

<div class="tu">
<?php if(is_array($data)): foreach($data as $key=>$m): ?><div class="hh">
<a href="<?php echo U('Menu/updminfo');?>?id=<?php echo ($m["id"]); ?>"><img src="/cafe/Uploads/<?php echo ($m["minfo_img"]); ?>" class="img-thumbnail"></a>
<div class="menuname"><span class="cname"><?php echo ($m["minfo_name"]); ?></span></div>
</div><?php endforeach; endif; ?>

</div>
</body>
</html>