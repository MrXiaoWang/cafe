$(function() {
	//定义判断变量
	var flag = true;

	//订单勾选
	$(".dd-left .yuan").click(function() {
		
		$(this).toggleClass("choose");
		//获取所有商品
		var goods = $(this).closest("ul").find(".yuan");
		//获取被选中d商品
		var goodsc = $(this).closest("ul").find(".choose");
		//		alert(goods.length+","+goodsc.length);

		if($(this).hasClass('choose')){
			var str=parseInt($(this).parent().parent().children(".dd-right").find(".dd-price").html());
			$sum = parseInt($('.dd-total-price').text());
			$('.dd-total-price').text($sum+str);	
			$num = parseInt($('.d-num').text());
			$('.d-num').text($num+1);


		}else{
			var str=parseInt($(this).parent().parent().children(".dd-right").find(".dd-price").html());
			$sum = parseInt($('.dd-total-price').text());
			$('.dd-total-price').text($sum-str);	
			$num = parseInt($('.d-num').text());
			$('.d-num').text($num-1);
		}
		//判断所有商品是否等于被选中商品
		if(goods.length == goodsc.length) {
			$(".all-choose").addClass("choose");
		} else {
			$(".all-choose").removeClass("choose");
		}
	})
	

	//购物车数量的增减
	$(".shu-jia").click(function() {
		var n = parseFloat($(this).siblings("input").val()); //得到数量值
		$(this).siblings("input").val(n + 1); //数量值增加
	})

	$(".shu-jian").click(function() {
		var n = parseFloat($(this).siblings("input").val()); //得到数量值
		n--;
		if(n <= 1) {
			n = 1;
		}
		//数量值减少
		$(this).siblings("input").val(n);
	})

	//左滑动自动触发删除
	mui.init();
	(function($) {
		$('#OA_task').on('tap', '.mui-btn', function(event) {
			var elem = this;
			var li = elem.parentNode.parentNode;
			mui.confirm('您确定要删除该订单吗？', '', btnArray, function(e) {
				if(e.index == 0) {
					

					$.post("/cafe/index.php/Home/Order/del",{id:li.value},function(d){
						if(d.trim()=="1"){
							li.parentNode.removeChild(li);
							location.reload();
						}
					});
					
				} else {
					setTimeout(function() {
						$.swipeoutClose(li);
					}, 0);
				}
			});
		});
		var btnArray = ['确认', '取消'];
	})(mui);

	//	管理操作
	$(".manage").click(function() {
		if(flag) {
			$(".mui-table-view .mui-slider-handle").css({
				"transform": "translate(-88px,0px)",
				"transition": "transform 300ms"
			});
			$(".mui-table-view .mui-btn-warning").css({
				"transform": "translate(-88px,0px)",
				"transition": "transform 300ms"
			});
			flag = false;
		} else {
			$(".mui-table-view .mui-slider-handle").css({
				"transform": "translate(px,0px)",
				"transition": "transform 300ms"
			});
			$(".mui-table-view .mui-btn-warning").css({
				"transform": "translate(px,0px)",
				"transition": "transform 300ms"
			});
			flag = true;
		}
	})
})