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
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add">
  <strong><span class="icon-pencil-square-o"></span>修改菜品类型</strong></div>
  <div class="body-content">
    <form class="form-x" action="<?php echo U('Menu/updtype');?>" method="post">
    <input type="hidden" name="mtype_id" value="<?php echo ($data["mtype_id"]); ?>">
      <div class="form-group">
        <div class="label">
          <label>菜品类型名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="mtype_name" value="<?php echo ($data["mtype_name"]); ?>" data-validate="required:请输入菜品类型名称"/>
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit" > 修改此菜品系列</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>