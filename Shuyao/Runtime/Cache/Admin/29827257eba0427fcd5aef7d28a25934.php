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
<link rel="stylesheet" href="/Shuyao/Public/css/bs/bootstrap.css">
<script src="/Shuyao/Public/js/jquery.js"></script>
<script src="/Shuyao/Public/js/bs/bootstrap.min.js"></script>
<script src="/Shuyao/Public/js/pintuer.js"></script>
<style type="text/css">
.tu{width: 100%;height: 500px;background-color: red;}
.hh{height: 200px;width: 160px; float: left;}
.tianjia{margin-bottom: 10px;}
.menuname{width: 150px;height: 30px;text-align: center;}
.cname{line-height: 30px;font-size: 20px;}
.fenye{float: left; width: 100%; background: pink;} 
a{text-decoration:none}
</style>
</head>
<body>

  <!-- 顶部添加 -->
<div class="tianjia">
   <ul class="search" style="padding-left:10px;">
        <li> 
        <a class="button border-main icon-plus-square-o" onclick="window.location.href='#add'" >
         添加更多菜品 </a> 
        </li>
      </ul>
</div>

<div class="tu">
<!-- <div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div> -->
<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>
<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>
<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>
<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>
<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>

<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>
<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>
<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>
<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>

<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>
<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>
<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>
<div class="hh">
<img src="/Shuyao/Public/images/bs/3.png" class="img-thumbnail">
<div class="menuname"><span class="cname">辣子鸡丁ssss</span></div>
</div>
    <div class="fenye">
    <tr>
        <td colspan="8">
        <div class="pagelist"> 
        <a href="">上一页</a> 
        <span class="current">1</span>
        <a href="">2</a><a href="">3</a>
        <a href="">下一页</a>
        <a href="">尾页</a> </div>
        </td>
    </tr>
    </div>
</div>

<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head" id="add">
  <strong><span class="icon-pencil-square-o"></span> 添加菜品</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">    
      <div class="form-group">
        <div class="label">
          <label>菜品名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>菜品图：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value="" data-toggle="hover" data-place="right" data-image="" />
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：1920*500</div>
        </div>
      </div>

      <div class="form-group">
          <div class="label">
            <label>菜品所属类型：</label>
          </div>
          <div class="field">
            <select name="cid" class="input w50">
              <option value="">请选择分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
            </select>
            <div class="tips"></div>
          </div>
        </div>
      <div class="form-group">
        <div class="label">
          <label>菜品价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sort" value=""  data-validate="required:,number:排序必须为数字" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>菜品数量：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sort" value=""  data-validate="required:,number:排序必须为数字" />
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
              <input name="isshow" value="1" type="radio" checked="checked">是             
          </label>             
        
          <label class="button active"><span class="icon icon-times"></span>            
              <input name="isshow" value="0"  type="radio" checked="checked">否
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
              <input name="isshow" value="1" type="radio" checked="checked">是             
          </label>             
        
          <label class="button active"><span class="icon icon-times"></span>            
              <input name="isshow" value="0"  type="radio" checked="checked">否
          </label>         
           </div>       
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

<script type="text/javascript">

//搜索
function changesearch(){	
		
}

//单个删除
function del(id,mid,iscid){
	if(confirm("您确定要删除吗?")){
		
	}
}

//全选
$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

//批量删除
function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false;		
		$("#listform").submit();		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

//批量排序
function sorts(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		return false;
	}
}


//批量首页显示
function changeishome(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}

//批量推荐
function changeisvouch(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");	
		
		return false;
	}
}

//批量置顶
function changeistop(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}


//批量移动
function changecate(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		
		return false;
	}
}

//批量复制
function changecopy(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		var i = 0;
	    $("input[name='id[]']").each(function(){
	  		if (this.checked==true) {
				i++;
			}		
	    });
		if(i>1){ 
	    	alert("只能选择一条信息!");
			$(o).find("option:first").prop("selected","selected");
		}else{
		
			$("#listform").submit();		
		}	
	}
	else{
		alert("请选择要复制的内容!");
		$(o).find("option:first").prop("selected","selected");
		return false;
	}
}

</script>
</body>
</html>