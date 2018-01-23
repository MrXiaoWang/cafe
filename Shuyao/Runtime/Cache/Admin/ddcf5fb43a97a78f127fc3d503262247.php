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
<style type="text/css">
.tu{width: 260px; height: 160px;} 
.tutu{margin-left: -340px; float: left; width: 100px; height: 100px;}
.fi{float: left; margin-left: 165px; width: 200px; margin-top: 40px;}
</style>
</head>
<body>

<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head" id="add">
  <strong><span class="icon-pencil-square-o"></span> 修改菜品</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('Menu/updminfo');?>" enctype="multipart/form-data"> 
    <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">   
      <div class="form-group">
        <div class="label">
          <label>菜品名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo ($data["minfo_name"]); ?>" name="minfo_name" 
          data-validate="required:请输入菜品名称" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>菜品图：</label>
        </div>
        <div class="field">
          <input type="file"  name="minfo_img" class="fi"  ><!-- data-validate="required:请选择菜品图" -->
          <?php if($data != null): ?><img class="tutu" width="100" 
            src="/cafe/Uploads/<?php echo ($data["minfo_img"]); ?>">
            <input type="hidden" name="h_minfo_img" value="<?php echo ($data["minfo_img"]); ?>"/><?php endif; ?>
          <div class="tipss">菜品图片仅支持.jpg, .gif, .png, .jpeg 格式</div>
        </div>
      </div>

      <div class="form-group">
          <div class="label">
            <label>菜品所属类型：</label>
          </div>
          <div class="field">
            <select name="mtype_id" class="input w50">
             <!--  <option value="<?php echo ($data["mtype_id"]); ?>"><?php echo ($data["mtype_name"]); ?></option> -->
              <?php if(is_array($data2)): foreach($data2 as $key=>$t): ?><option value="<?php echo ($t["mtype_id"]); ?>"><?php echo ($t["mtype_name"]); ?></option><?php endforeach; endif; ?>
            </select>
            <div class="tips"></div>
          </div>
        </div>
      <div class="form-group">
        <div class="label">
          <label>菜品价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="minfo_price" value="<?php echo ($data["minfo_price"]); ?>"  data-validate="required:,number:菜品单价必须为数字" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>菜品原价：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="minfo_original" value="<?php echo ($data["minfo_original"]); ?>"  data-validate="required:,number:菜品原价必须为数字" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>菜品数量：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="minfo_count" value="<?php echo ($data["minfo_count"]); ?>"  data-validate="required:,number:菜品数量必须为数字" />
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
          <textarea name="minfo_remark" data-validate="required:菜品简介不能为空" class="input" style="height:450px; border:1px solid #ddd;"><?php echo ($data["minfo_remark"]); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 确认修改此菜</button>
        </div>
      </div>
    </form>
  </div>
</div>


</body>
</html>