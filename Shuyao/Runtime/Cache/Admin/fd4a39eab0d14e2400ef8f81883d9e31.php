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
    <div class="panel-head"><strong class="icon-reorder"> 菜品列表</strong> </div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> 
        <a class="button border-main icon-plus-square-o" onclick="window.location.href='#add'" > 添加内容
        </a> 
        </li>
        <form action="<?php echo U('Menu/menuinfomohu');?>" method='post'>
        <li style="margin-left: 600px;">
          <input type="text" placeholder="请输入搜索菜品名称" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
        <input type="submit" class="button border-main icon-search" value="输入并搜索"></li>
        </form>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <th>菜品图</th>
        <th>菜品名称</th>
        <th>菜品所属系列</th>
        <th>菜品价格</th>
        <th width="310">操作</th>
      </tr>
      <?php if(is_array($data)): foreach($data as $key=>$minfo): ?><tr>
          <td style="text-align:left; padding-left:20px;"><?php echo ($minfo["id"]); ?></td>
          <td width="10%"><img src="/cafe/Uploads/<?php echo ($minfo["minfo_img"]); ?>" alt="" width="70" height="50" /></td>
          <td><?php echo ($minfo["minfo_name"]); ?></td>
          <td><font color="#00CC99"><?php echo ($minfo["mtype_name"]); ?></font></td>
          <td><?php echo ($minfo["minfo_price"]); ?>￥</td>
          <td><div class="button-group"> <a class="button border-main" 
          href="<?php echo U('Menu/updminfo');?>?id=<?php echo ($minfo["id"]); ?>"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="<?php echo U('Menu/delminfo');?>?id=<?php echo ($minfo["id"]); ?>" 
          onclick="return confirm('您确认要将此菜品删除吗?');"><span class="icon-trash-o"></span> 删除</a> </div></td>
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
  <strong><span class="icon-pencil-square-o"></span> 添加更多菜品</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('Menu/addminfo');?>" enctype="multipart/form-data">    
      <div class="form-group">
        <div class="label">
          <label>菜品名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="minfo_name" 
          data-validate="required:请输入菜品名称" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>菜品图：</label>
        </div>
        <div class="field">
          <input type="file"  name="minfo_img" style="float:left;" data-validate="required:请选择菜品图">
          <div class="tipss">菜品图片仅支持.jpg, .gif, .png, .jpeg 格式</div>
        </div>
      </div>

      <div class="form-group">
          <div class="label">
            <label>菜品所属类型：</label>
          </div>
          <div class="field">
            <select name="mtype_id" class="input w50">
              <option value="">请选择菜品类型</option>
              <?php if(is_array($data1)): foreach($data1 as $key=>$t): ?><option value="<?php echo ($t["mtype_id"]); ?>"><?php echo ($t["mtype_name"]); ?></option><?php endforeach; endif; ?>
            </select>
            <div class="tips"></div>
          </div>
        </div>
      <div class="form-group">
        <div class="label">
          <label>菜品价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="minfo_price" value=""  data-validate="required:,number:菜品单价必须为数字" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>菜品原价：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="minfo_original" value=""  data-validate="required:,number:菜品原价必须为数字" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>菜品数量：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="minfo_count" value=""  data-validate="required:,number:菜品数量必须为数字" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>是否推荐：</label>
        </div>
        <div class="field">
          <div class="button-group radio">
          <label class="button active">
            <span class="icon icon-check"></span>             
              <input name="minfo_istuijian" value="1" type="radio" checked="checked">是             
          </label>             
        
          <label class="button active"><span class="icon icon-times"></span>            
              <input name="minfo_istuijian" value="0"  type="radio" checked="checked">否
          </label>         
           </div>       
        </div>
     </div>

      <div class="form-group">
        <div class="label">
          <label>是否新菜：</label>
        </div>
        <div class="field">
          <div class="button-group radio">
          
          <label class="button active">
            <span class="icon icon-check"></span>             
              <input name="minfo_isnew" value="1" type="radio" checked="checked">是             
          </label>             
        
          <label class="button active"><span class="icon icon-times"></span>            
              <input name="minfo_isnew" value="0"  type="radio" checked="checked">否
          </label>         
           </div>       
        </div>
     </div>
      
      <div class="form-group">
        <div class="label">
          <label>菜品描述：</label>
        </div>
        <div class="field">
          <textarea name="minfo_remark" data-validate="required:菜品简介不能为空" class="input" style="height:450px; border:1px solid #ddd;"></textarea>
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 确认添加此菜</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body>
</html>