<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="/Shuyao/Public/css/pintuer.css">
    <link rel="stylesheet" href="/Shuyao/Public/css/admin.css">
    <link rel="stylesheet" href="/Shuyao/Public/css/iconfont.css" />
    <script src="/Shuyao/Public/js/jquery.js"></script>   
    <script type="text/javascript" src="/Shuyao/Public/js/iconfont.js" ></script>
    <style type="text/css">
  .icon {
     width: 1em; height: 1em;
     vertical-align: -0.15em;
     fill: currentColor;
     overflow: hidden;
  }
    </style>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="/Shuyao/Public/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />蜀肴后台管理</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="login.html"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong>列表</strong></div>
  <h2>
    <svg class="icon" aria-hidden="true">
      <use xlink:href="#icon-yonghuguanli-"></use>
  </svg>
    用户管理
  </h2>
  
  <ul>
    <li><a href="list.html" target="right"><span class="icon-caret-right"></span>酒水xx</a></li>
    <li><a href="add.html" target="right"><span class="icon-caret-right"></span>酒水xx</a></li>
    <li><a href="cate.html" target="right"><span class="icon-caret-right"></span>酒水xx</a></li>        
  </ul>


  <h2>
    <svg class="icon" aria-hidden="true">
      <use xlink:href="#icon-icontscp"></use>
  </svg>
    商品管理
  </h2>
  <ul ><!-- style="display:block" -->
    <li><a href="<?php echo U('Menu/type');?>" target="right"><span class="icon-caret-right"></span>商品类型管理</a></li>
    <li><a href="<?php echo U('Menu/menu');?>" target="right"><span class="icon-caret-right"></span>菜品管理</a></li>
   <!--  <li><a href="<?php echo U('Menu/jiushui');?>" target="right"><span class="icon-caret-right"></span>酒水管理</a></li> -->
  </ul>  
   
  <h2>
    <svg class="icon" aria-hidden="true">
      <use xlink:href="#icon-zhuotaiguanli"></use>
  </svg>
    桌台管理
  </h2>
  <ul>
    <li><a href="list.html" target="right"><span class="icon-caret-right"></span>桌台xx</a></li>
    <li><a href="add.html" target="right"><span class="icon-caret-right"></span>桌台xx</a></li>
    <li><a href="cate.html" target="right"><span class="icon-caret-right"></span>桌台xx</a></li>        
  </ul>  
  <h2>
    <svg class="icon" aria-hidden="true">
      <use xlink:href="#icon-diancan"></use>
  </svg>
    点菜与消费
  </h2>
  <ul>
    <li><a href="list.html" target="right"><span class="icon-caret-right"></span>点菜xx</a></li>
    <li><a href="add.html" target="right"><span class="icon-caret-right"></span>点菜xx</a></li>
    <li><a href="cate.html" target="right"><span class="icon-caret-right"></span>点菜xx</a></li>        
  </ul>

  <h2>
    <svg class="icon" aria-hidden="true">
      <use xlink:href="#icon-jiezhang"></use>
  </svg>
    订单管理
   </h2>
  <ul>
    <li><a href="<?php echo U('Order/index');?>" target="right"><span class="icon-caret-right"></span>查看订单</a></li>      
  </ul> 

   <h2>
    <svg class="icon" aria-hidden="true">
      <use xlink:href="#icon-jiezhang"></use>
  </svg>
    结账操作
   </h2>
  <ul>
    <li><a href="list.html" target="right"><span class="icon-caret-right"></span>结账操作xx</a></li>
    <li><a href="add.html" target="right"><span class="icon-caret-right"></span>结账操作xx</a></li>
    <li><a href="cate.html" target="right"><span class="icon-caret-right"></span>结账操作xx</a></li>        
  </ul> 
  <h2>
    <svg class="icon" aria-hidden="true">
      <use xlink:href="#icon-id-95"></use>
  </svg>
    系统管理
  </h2>
  <ul>
    <li><a href="list.html" target="right"><span class="icon-caret-right"></span>内容管理</a></li>
    <li><a href="add.html" target="right"><span class="icon-caret-right"></span>添加内容</a></li>
    <li><a href="cate.html" target="right"><span class="icon-caret-right"></span>分类管理</a></li>        
  </ul> 

</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
    $(this).next().slideToggle(200);  
    $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
      $("#a_leader_txt").text($(this).text());
      $(".leftnav ul li a").removeClass("on");
    $(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="<?php echo U('Index/info');?>" target="right" class="icon-home"> 首页</a></li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="info.html" name="right" width="100%" height="100%"></iframe>
</div>
</body>
</html>