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
  <div class="panel-head"><strong class="icon-reorder"> 用户列表</strong></div>
    <table class="table table-hover text-center">
      <tr>
        <th width="5%">ID</th>
        <th width="8%">用户姓名</th>
        <th width="5%">性别</th>
        <th width="10%">手机号</th>
        <th width="10%">邮箱</th>
        <th width="15%">联系地址</th>
        <th width="15%">头像</th>
        <th width="10%">操作</th>
      </tr>
      <?php if(is_array($list)): foreach($list as $key=>$list): ?><tr>
        <td><?php echo ($list["id"]); ?></td>
        <td><?php echo ($list["u_name"]); ?></td>
        <td>
            <?php if($list["u_sex"] == 0): ?>男
            <?php elseif($list["u_sex"] == 1): ?>女<?php endif; ?>
        </td>
        <td><?php echo ($list["u_phone"]); ?></td>
        <td><?php echo ($list["u_email"]); ?></td>
        <td><?php echo ($list["u_address"]); ?></td>
        <td><img src="/cafe/Public/images/<?php echo ($list["u_img"]); ?>" class="radius-circle" height="50" alt="" /></td>
        <td>
        <div class="button-group">
        <a class="button border-main" href="cateedit.html"><span class="icon-edit"></span> 修改</a>
        </div>
        </td>
      </tr><?php endforeach; endif; ?>
      <tr>
        <td colspan="8">

          <div class="pagelist"><?php echo ($page); ?></div>
        </td>
      </tr>

    </table>
</div>

</body>
</html>