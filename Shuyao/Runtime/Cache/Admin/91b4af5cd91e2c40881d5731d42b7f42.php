<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title>管理员信息</title>
<link rel="stylesheet" href="/cafe/Public/css/pintuer.css">
<link rel="stylesheet" href="/cafe/Public/css/admin.css">
<script src="/cafe/Public/js/jquery.js"></script>
<script src="/cafe/Public/js/pintuer.js"></script>
<style type="text/css">
.tu{width: 260px; height: 160px;} 
</style>
</head>
<body>

  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 管理员列表</strong> </div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> 
        <a class="button border-main icon-plus-square-o" onclick="window.location.href='#add'" > 添加管理员
        </a> 
        </li>
        
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <th>管理员姓名</th>
        <th>上次登录时间</th>
        <th>是否超级管理员</th>
        <th>登录IP地址</th>
        <th width="310">操作</th>
      </tr>
      <?php if(is_array($data)): foreach($data as $key=>$adm): ?><tr>
          <td style="text-align:left; padding-left:20px;"><?php echo ($adm["id"]); ?></td>
          <td><?php echo ($adm["adm_name"]); ?></td>
          <td><font color="#00CC99"><?php echo ($adm["adm_lasttime"]); ?></font></td>
          <td><?php echo ($adm["adm_issuper"]); ?></td>
          <td><?php echo ($adm["adm_server"]); ?></td>
          <td><div class="button-group"> <a class="button border-red" href="<?php echo U('Admin/deladm');?>?id=<?php echo ($adm["id"]); ?>" 
          onclick="return confirm('您确认要将此管理员删除吗?');"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr><?php endforeach; endif; ?>
      <tr>
        <td colspan="6">
        <div class="pagelist"><span><?php echo ($page); ?></span> </div>
        </td>
    </tr>
    </table>
  </div>

<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head" id="add">
  <strong><span class="icon-pencil-square-o"></span> 添加管理员</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('Admin/addadm');?>" enctype="multipart/form-data">    
      <div class="form-group">
        <div class="label">
          <label>管理员名字：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="adm_name" 
          data-validate="required:请输入管理员名字" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 确认添加</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body>
</html>