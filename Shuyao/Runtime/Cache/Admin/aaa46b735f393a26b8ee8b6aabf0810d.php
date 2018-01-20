<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title>订单管理</title>
<link rel="stylesheet" href="/cafe/Public/css/pintuer.css">
<link rel="stylesheet" href="/cafe/Public/css/admin.css">
<script src="/cafe/Public/js/jquery.js"></script>
<script src="/cafe/Public/js/pintuer.js"></script>
</head>

<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 订单列表</strong></div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>
      <th width="5%">用户名</th>
      <th width="10%">桌子编号</th>
      <th width="10%">订单编号</th>
      <th width="10%">所点菜品</th>
      <th width="10%">菜品数量</th>
      <th width="5%">原价</th>
      <th width="5%">折扣</th>
      <th width="10%">折后价</th>
      <th width="10%">是否出菜</th>
      <th width="30%">操作</th>
    </tr>
    <?php if(is_array($order)): foreach($order as $key=>$o): ?><tr>
	      <td><?php echo ($o["id"]); ?></td>
	      <td><?php echo ($o["u_id"]); ?></td>
	      <td><?php echo ($o["cz_id"]); ?></td>
	      <td><?php echo ($o["or_num"]); ?></td>
	      <td><?php echo ($o["minfo_name"]); ?></td>
	      <td><?php echo ($o["menuinfo_count"]); ?></td>
	      <td><?php echo ($o["menuinfo_beforedis"]); ?></td>
	      <td><?php echo ($o["menuinfo_discount"]); ?></td>
	      <td><?php echo ($o["menuinfo_afterdis"]); ?></td>
	      <td><?php echo ($o["o_chucai"]); ?></td>
	      <td>
			      <div class="button-group">
			      	<?php if($o["o_chucai"] == 0): ?><a class="button border-main" href='<?php echo U("Order/updatezhuangtai",array("id"=>$o["id"]));?>'><span class="icon-edit">设为出菜完毕</span></a>
			      	<?php else: ?>
			      		<a class="button border-main" href='#'><span class="icon-edit">没有任何操作</span></a><?php endif; ?>
			      </div>
	      </td>
	    </tr><?php endforeach; endif; ?>
  	
    <tr>
        <td colspan="13">
        <div class="pagelist"> 
        	<?php echo ($page); ?>
        </div>
        </td>
      </tr>

  </table>
</div>
</body>
</html>