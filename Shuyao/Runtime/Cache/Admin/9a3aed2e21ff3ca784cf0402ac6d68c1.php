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
<!-- <link href="/cafe/Public/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <link href="/cafe/Public/css/bootstrap-fileinput.css" rel="stylesheet"> -->
<script src="/cafe/Public/js/jquery.js"></script>
<script src="/cafe/Public/js/pintuer.js"></script>
<style type="text/css">
.tu{width: 260px; height: 160px;} 
</style>
</head>
<body>
	
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 餐桌列表</strong></div>
  <div class="padding border-bottom">
    <a href="<?php echo U('Table/add');?>" class="button border-yellow"><span class="icon-plus-square-o"></span> 添加餐桌</a>
  </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">餐桌编号</th>
        <th>是否空闲</th>
        <th>操作</th>
      </tr>
      <?php if(is_array($result)): foreach($result as $key=>$r): ?><tr>
          <td><?php echo ($r["id"]); ?></td>
          <td>
          	<?php if($r['is_time'] ==0 ): ?>空闲
				<?php else: ?>
				有人<?php endif; ?>
      		</td><td><div><a href='<?php echo U("Table/showPage",array("id"=>$r["id"],"is_time"=>$r["is_time"]));?>' class="button border-green'">查看详情</a><a href='<?php echo U("Table/upd",array("id"=>$r["id"]));?>' class="button border-main">修改状态</a><a href='<?php echo U("Table/del",array("id"=>$r["id"]));?>' class="button border-red" onclick="return confirm('你确定要删除嘛？');" >删除餐桌</a></div></td>
        </tr><?php endforeach; endif; ?>
      <tr>
      	<tr>
	        <td colspan="3">
	        	<div class="pagelist"><span><?php echo ($page); ?></span> </div>
	        </td>
	    </tr>
    </table>
  </div>
</div>
</body>
</html>