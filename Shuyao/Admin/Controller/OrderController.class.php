<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller {
	//查询所有订单管理
    public function index(){
        //创建模型
        $order=M("order");
        //查询满足要求的总记录数
        $count = $order->join("sy_userinfo ON sy_userinfo.u_id = sy_order.user_id")->
        join("sy_menuinfo ON FIND_IN_SET(sy_menuinfo.id , sy_order.menuinfo_id)")->
        join("sy_canzhou ON sy_canzhou.id = sy_order.cz_id")->order("sy_userinfo.u_id")->count();
        //实例化分页类 传入总记录数和每页显示的记录数(2)
        $page = new \Think\Page($count,7);
        //设置分页样式
        $page->lastSuffix=false;
        $page->setConfig('theme','%FIRST% %UP_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $page->setConfig('header','<li class="rows" style="list-style:none;">每页<b>2</b>条&nbsp;&nbsp;第<b class="current">%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $page->setConfig('first','首页');
        // 分页显示输出
        $show = $page->show();
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $order->join("sy_userinfo ON sy_userinfo.u_id = sy_order.user_id")->
        join("sy_menuinfo ON FIND_IN_SET(sy_menuinfo.id , sy_order.menuinfo_id)")->
        join("sy_canzhou ON sy_canzhou.id = sy_order.cz_id")->order("sy_userinfo.u_id")->limit($page->firstRow.','.$page->listRows)->select();
        //判断结果
        if($list){
            //传值
            $this->assign("order",$list);
            // 赋值分页输出
            $this->assign('page',$show);
            //跳转页面
            $this->display();
        }else{
            $this->error("查询失败");
        }
    }
    
    
    //修改出菜状态
    public function updatezhuangtai(){
        if($_GET){
            //获取id
            $order_id=$_GET["id"];
            $order=M("order");
            $o["o_chucai"]=1;
            $re=$order->where("id=".$order_id)->setField($o);
            dump($re);
            
            if($re){
                $url=U("Order/index");
                $this->success("设置成功",$url);
            }else{
                $this->error("设置失败");
            }
        }else{
            $this->error("请以正确的方式打开页面");
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}