<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/Shuyao/Public/css/pintuer.css">
<link rel="stylesheet" href="/Shuyao/Public/css/admin.css">
<link rel="stylesheet" href="/Shuyao/Public/css/bs/bootstrap.css">
<script src="/Shuyao/Public/js/jquery.js"></script>
<script src="/Shuyao/Public/js/bs/bootstrap.min.js"></script>
<script src="/Shuyao/Public/js/pintuer.js"></script>
<style type="text/css">
.tu{width: 100%;height: 500px;background-color: red;}
.hh{height: 200px;width: 160px; float: left;}
.tianjia{margin-bottom: 10px;}
.menuname{width: 150px;height: 30px;text-align: center;}
.cname{line-height: 30px;font-size: 20px;}
.fenye{float: left; width: 100%; background: pink;} 
a{text-decoration:none}
</style>
</head>
<body>

  <!-- 顶部添加 -->
<div class="tianjia">
   <ul class="search" style="padding-left:10px;">
        <li> 
        <a class="button border-main icon-plus-square-o" onclick="window.location.href='#add'" >
         添加更多菜品 </a> 
        </li>
      </ul>
</div>

<div class="tu">

<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>
<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>
    <div class="fenye">
    <tr>
        <td colspan="8">
        <div class="pagelist"> 
        <a href="">上一页</a> 
        <span class="current">1</span>
        <a href="">2</a><a href="">3</a>
        <a href="">下一页</a>
        <a href="">尾页</a> </div>
        </td>
    </tr>
    </div>
</div>


</body>
</html>