<?php
namespace Admin\Controller;
use Think\Controller;
class ActionController extends CheckController {
	//商品类型管理查询
    public function index(){
    	$act=M('action');
    	$count=$act->count();//总记录条数
    	//实例化分页类
    	$Page=new \Think\ Page($count,10);//总记录数和显示的条数
    	$show=$Page->show();
    	$data=$act->limit($Page->firstRow.','.$Page->listRows)->order("id")->select();
    	//赋值
    	$this->assign('data',$data);
    	$this->assign('page',$show);
        $this->display();
    }

    
}