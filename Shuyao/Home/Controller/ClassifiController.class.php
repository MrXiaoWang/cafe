<?php
namespace Home\Controller;
use Think\Controller;
class ClassifiController extends Controller {
	//分类页面查询
    public function index(){
    	//查询菜品类型名称
    	$cls=M('menutype');
    	$data=$cls->field('mtype_name')->order('mtype_id')->select();
    	$this->assign('data',$data);
    	// dump($data);
    	// die();
        $this->display();
    }


}