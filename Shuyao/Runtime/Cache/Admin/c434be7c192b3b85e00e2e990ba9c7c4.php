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
<script src="/Shuyao/Public/js/jquery.js"></script>
<script src="/Shuyao/Public/js/pintuer.js"></script>
</head>

<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 商品类型列表</strong></div>
  <div class="padding border-bottom">
    <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加商品类型</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>
      <th width="15%">类型编号</th>
      <th width="10%">类型名称</th>
      <th width="10%">操作</th>
    </tr>
    <tr>
      <td>1</td>
      <td>123</td>
      <td>逃犯洗列</td>
      <td>
      <div class="button-group">
      <a class="button border-main" href="cateedit.html"><span class="icon-edit"></span> 修改</a>
      <a class="button border-red" href="javascript:void(0)" onclick="return confirm('您确认要将此菜品类型删除吗?');">
      <span class="icon-trash-o"></span> 删除</a> 
      </div>
      </td>
    </tr>
   
    <tr>
        <td colspan="8">
        <div class="pagelist"> 
        <a href="">上一页</a> 
        <span class="current">1</span>
        <a href="">2</a>
        <a href="">3</a>
        <a href="">下一页</a>
        <a href="">尾页</a>
        </div>
        </td>
      </tr>

  </table>
</div>

<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add">
  <strong><span class="icon-pencil-square-o"></span>添加菜品类型</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
      
      <div class="form-group">
        <div class="label">
          <label>菜品类型名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="title" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>