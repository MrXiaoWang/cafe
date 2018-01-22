$(function(){
	//定义判断变量
	var flag = true;
	
	//订单勾选
	$(".dd-left .yuan").click(function(){
		$(this).toggleClass("choose");
		//获取所有商品
		var goods = $(this).closest("ul").find(".yuan");
		//获取被选中d商品
		var goodsc = $(this).closest("ul").find(".choose");
//		alert(goods.length+","+goodsc.length);
		//判断所有商品是否等于被选中商品
		if(goods.length==goodsc.length){
			$(".all-choose").addClass("choose");
		}else{
			$(".all-choose").removeClass("choose");
		}
	})
	//点击全选
	$(".all-choose").click(function(){
		$(this).toggleClass("choose");
		//得到所有商品勾选框
		var box = $("ul li .yuan");
		if(flag){
			box.addClass("choose");
			flag = false;
		}else{
			box.removeClass("choose");
			flag = true;
		}
		
	})
	
	//	管理操作
	$(".manage").click(function(){
		if(flag){
			$(".mui-table-view .mui-slider-handle").css({"transform":"translate(-88px,0px)","transition":"transform 300ms"});
			$(".mui-table-view .mui-btn-warning").css({"transform":"translate(-88px,0px)","transition":"transform 300ms"});
			flag = false;
		}else{
			$(".mui-table-view .mui-slider-handle").css({"transform":"translate(px,0px)","transition":"transform 300ms"});
			$(".mui-table-view .mui-btn-warning").css({"transform":"translate(px,0px)","transition":"transform 300ms"});
			flag = true;
		}
	})
})

