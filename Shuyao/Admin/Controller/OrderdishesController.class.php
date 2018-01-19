<?php
namespace Admin\Controller;
use Think\Controller;
class OrderdishesController extends CheckController {
	/*查询*/
       public function issue(){
         //创建新模板
        $dz=M("order");
        //显示
        $count=$dz->where("o_chudan=1")->count();
        //查询满足要求的总记录数
        $page=new \Think\Page($count,1);
        //实列化分页类
        //导入分页类
        $page->lastSuffix=false;
        $page->setConfig('theme','%FIRST% %UP_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $page->setConfig('header','<li class="rows" style="list-style:none;">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;每页<b>2</b>条&nbsp;&nbsp;第<b class="current">%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $page->setConfig('first','首页');
        // 分页显示输出
        $show = $page->show();
        //查询数据 字段出单字段为1的数据  o_chudan
        $list=$dz->table("sy_order a,sy_menuinfo b ")->where("a.menuinfo_id=b.id and a.o_chudan=1")->limit($page->firstRow.','.$page->listRows)->select();
        //赋值
        $this->assign("list",$list);
        //赋值分页输出
       
        $this->assign('page',$show);
        //分页显示输出
        $this->display(); 
       }
        



}