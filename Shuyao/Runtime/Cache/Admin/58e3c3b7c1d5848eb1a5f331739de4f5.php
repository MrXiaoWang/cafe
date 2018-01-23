<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="/cafe/Public/css/pintuer.css">
    <link rel="stylesheet" href="/cafe/Public/css/admin.css">
    <link rel="stylesheet" href="/cafe/Public/css/iconfont.css" />
    <script src="/cafe/Public/js/jquery.js"></script>   
    <script type="text/javascript" src="/cafe/Public/js/iconfont.js" ></script>
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
    <h1><img src="/cafe/Public/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />蜀肴后台管理</h1>
  </div>
  <div class="head-l">
  <a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo U('Login/logout');?>"><span class="icon-power-off"></span> 退出登录</a> </div>

  <div style="width: 600px;color: white;height: 50px; float: left; margin-left: 300px; 
    line-height: 45px; font-size: 20px; margin-top: 10px;"> 
  <span style="margin-right: 50px; margin-left: 20px;">管理员：<?php echo ($adm_name); ?></span> 
  <span>登陆时间：<?php echo ($adm_lasttime); ?></span>
  </div>
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
    <li><a href="<?php echo U('User/index');?>" target="right"><span class="icon-caret-right"></span>用户信息</a></li>       
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
  </ul>  
   
  <h2>
    <svg class="icon" aria-hidden="true">
      <use xlink:href="#icon-zhuotaiguanli"></use>
  </svg>
    桌台管理
  </h2>
  <ul>
    <li><a href="<?php echo U('table/index');?>" target="right"><span class="icon-caret-right"></span>桌台详情</a></li>    
  </ul>  
  <h2>
    <svg class="icon" aria-hidden="true">
      <use xlink:href="#icon-diancan"></use>
  </svg>
    点菜与消费
  </h2>
  <ul>
    <li><a href="<?php echo U('Orderdishes/issue');?>" target="right"><span class="icon-caret-right"></span>打印订单</a></li> 
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
      <use xlink:href="#icon-id-95"></use>
  </svg>
    系统管理
  </h2>
  <ul>
    <li><a href="<?php echo U('Admin/index');?>" target="right"><span class="icon-caret-right"></span>管理员信息</a></li>
    <li><a href="<?php echo U('Action/index');?>" target="right"><span class="icon-caret-right"></span>管理员操作记录</a></li>
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