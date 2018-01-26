<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title>操作记录</title>
<link rel="stylesheet" href="/cafe/Public/css/pintuer.css">
<link rel="stylesheet" href="/cafe/Public/css/admin.css">
<script src="/cafe/Public/js/jquery.js"></script>
<script src="/cafe/Public/js/pintuer.js"></script>
</head>

<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 操作记录</strong></div>
    <table class="table table-hover text-center">
      <tr>
        <th>ID</th>
        <th>操作人</th>
        <th>操作内容</th>
        <th>操作时间</th>
        <th>操作主机</th>
      </tr>
      <?php if(is_array($data)): foreach($data as $key=>$ac): ?><tr>
        <td><?php echo ($ac["id"]); ?></td>
        <td><?php echo ($ac["adm_name"]); ?></td>
        <td><?php echo ($ac["a_info"]); ?></td>
        <td><?php echo ($ac["a_time"]); ?></td>
        <td><?php echo ($ac["adm_server"]); ?></td>
      </tr><?php endforeach; endif; ?>
      <!-- 分页 -->
    <tr>
        <td colspan="5">
        <div class="pagelist"><span><?php echo ($page); ?></span> </div>
        </td>
    </tr>
    </table>
</div>

</body>
</html>