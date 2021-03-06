<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/cafe/Public/css/pintuer.css">
<link rel="stylesheet" href="/cafe/Public/css/admin.css">
<script src="/cafe/Public/js/jquery.js"></script>
<script src="/cafe/Public/js/pintuer.js"></script>

</head>

<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 商品类型列表</strong></div>
  <div class="padding border-bottom">
  <ul class="search" style="padding-left:10px;">
  <li>
    <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加商品类型</button></li>
       <!--  <form action="" method="post">
        &nbsp;&nbsp;
          菜品查询：
          <select name="s_isvouch" class="input" onchange="changesearch()"  style="width:150px; line-height:17px;display:inline-block">
            <option value="">请选择菜品类型</option>
            <?php if(is_array($data1)): foreach($data1 as $key=>$ty): ?><option value="<?php echo ($ty["mtype_name"]); ?>"><?php echo ($ty["mtype_name"]); ?></option><?php endforeach; endif; ?>
          </select>
        &nbsp;&nbsp;  
        </form> -->
    <form action="<?php echo U('Menu/menutypemohu');?>" method='post'>
        <li style="margin-left: 600px; width: 400px; float: left; margin-top: -40px;">
        <input type="text" placeholder="请输入搜索类型名称" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
        <input type="submit" class="button border-main icon-search" value="输入并搜索"></li>
        </form>
</ul>

  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="15%">菜品类型编号</th>
      <th width="10%">类型名称</th>
      <th width="10%">操作</th>
    </tr>
    <?php if(is_array($data)): foreach($data as $key=>$type): ?><tr>
      <td><?php echo ($type["mtype_id"]); ?></td>
      <td><a href="<?php echo U('Menu/menuinfo');?>?id=<?php echo ($type["mtype_id"]); ?>" style="color: #00AAEE;font-size: 15px;"><?php echo ($type["mtype_name"]); ?></a></td>
      <td>
      <div class="button-group">
      <a class="button border-main" href="<?php echo U('Menu/updtype');?>?id=<?php echo ($type["mtype_id"]); ?>">
      <span class="icon-edit"></span> 修改</a>
      <a class="button border-red" href="<?php echo U('Menu/deltype');?>?id=<?php echo ($type["mtype_id"]); ?>" onclick="return confirm('您确认要将此菜品类型删除吗?');">
      <span class="icon-trash-o"></span> 删除</a> 
      </div>
      </td>
    </tr><?php endforeach; endif; ?>
    <!-- 分页 -->
    <tr>
        <td colspan="3">
        <div class="pagelist"><span><?php echo ($page); ?></span> </div>
        </td>
    </tr>
     
  </table>
</div>

<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add">
  <strong><span class="icon-pencil-square-o"></span>添加菜品类型</strong></div>
  <div class="body-content">
    <form class="form-x" action="<?php echo U('Menu/addtype');?>" method="post">
      <div class="form-group">
        <div class="label">
          <label>菜品类型名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="mtype_name" id="mtype_name" data-validate="required:请输入菜品类型名称"/>
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit" id="submit"> 添加此菜品系列</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>