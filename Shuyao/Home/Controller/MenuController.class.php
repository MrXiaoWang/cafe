<?php
namespace Home\Controller;
use Think\Controller;
class MenuController extends Controller {
    /*菜谱/酒水信息*/
    public function menu(){
               // 实例化
        $t = M('menuinfo');
        // 调用查询方法
        /*查询菜品*/
        $caiping = $t->where('mtype_id in(1001,1002,1003,1004,1005,1006,1007,1008,1009,1010,1011,1012,1013,1014,1015,1016)')->select();
        /*查询酒水*/
        $jiushui = $t->where('mtype_id=1017')->select();
        // dump($data);
        // 复制给模板
        //把从数据库查询出来的菜品信息赋值给模板
        $this->assign("list",$caiping);
        //把从数据库查询出来的酒水信息赋值给模板
        $this->assign("lists",$jiushui);
        // 调用模板显示
        $this->display();
    }


    /*菜谱酒水详情*/
    public function detail(){
    	$xq=M('menuinfo');
    	// 根据菜品id查询数据库菜品酒水的详情
    	$caipingxq = $xq->where('id='.$_GET['id'])->select();
    	//把数据库查询出来的菜品\酒水详情赋值给模板
    	$this->assign("caiping",$caipingxq);
    	//调用模板显示
    	$this->display();
    }


}