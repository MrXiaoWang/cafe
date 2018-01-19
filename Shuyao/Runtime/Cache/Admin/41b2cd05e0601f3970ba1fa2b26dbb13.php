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
  <div class="panel-head">待出菜订单</div>
  <!-- <div class="padding border-bottom">
    <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加商品类型</button>
  </div> -->
  <table class="table table-hover text-center">
    <tr>
      <th width="3%">订单编号</th>
      <th width="15%">菜品名称</th>
      <th width="5%">菜品数量</th>
      <th width="5%">桌号</th>
      <th width="10%">备注</th>
      <th width="10%">操作</th>
    </tr>

    <!-- 遍历数据库已经出单的数据   1 -->
    <?php if(is_array($list)): foreach($list as $key=>$c): ?><tr>
        <td><?php echo ($c["or_num"]); ?></td>
        <td><?php echo ($c["minfo_name"]); ?></td>
        <td><?php echo ($c["menuinfo_count"]); ?></td>
        <td><?php echo ($c["cz_id"]); ?></td>
        <td><?php echo ($c["o_remark"]); ?></td>
        <td>
        <div class="button-group">
        <!-- <a class="button border-main" href='<?php echo U("select_issue");?>?id=<?php echo ($c["id"]); ?>'>查看</a> -->
        <a class="button border-red" href="">打印</a> 
        </div>
        </td>
      </tr><?php endforeach; endif; ?>
    <!-- 结束遍历数据库已出单的数据  1 -->
   
    <tr>
        <td colspan="7">
        <div class="pagelist"> 
        <?php echo ($page); ?>
        </div>
        </td>
      </tr>

    <tr>
    </tr>
  </table>
</div>






</body>
</html>