<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CheckController {
	//用户管理
    public function index(){

    	// 实例化User对象
    	$User = M("userinfo");
    	// 查询满足要求的总记录数
    	$count = $User->count();
    	//导入分页类
    	import('ORG.Util.Page');
    	// 实例化分页类 传入总记录数和每页显示的记录数(25)
    	$per_page = 3;
    	$page = new \Think\Page($count,$per_page);

    	$page->setConfig('header','条记录');
    	$now = "<span class='now'>当前:<b>%NOW_PAGE%</b>/%TOTAL_PAGE%页</span>";
    	$total = "<span class='total'>共<b>%TOTAL_ROW%</b>条记录</span>";
    	$pg = "%UP_PAGE% %END% %DOWN_PAGE%";
    	$str = $now." ".$total." ".$pg;

    	$page->setConfig('theme', $str);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');

    	//分页输出
    	$show = $page->show();
    	//进行分页数据查询
    	$list=$User->limit($page->firstRow.','.$page->listRows)->select();
    	
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display('index');
    }

}

?>