<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CheckController {
	//查询所有管理员信息
    public function index(){
        $adm=M('admin');
        $count=$adm->count();//总记录条数
        //实例化分页类
        $Page=new \Think\ Page($count,5);//总记录数和显示的条数
        $show=$Page->show();
        $data=$adm->limit($Page->firstRow.','.$Page->listRows)->order("id")->select();
        //赋值
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display();
    }

    //添加管理员
    public function addadm(){
        $adm=M('admin');
        if($_POST){
            $adm->create();
            $data=$adm->add();
            if($data){
                $this->success('添加成功！',U('Admin/index'));
            }else{
                $this->error('添加失败！',U('Admin/index'));
            }
        }else{
            $this->display();
        }
    }

    //删除管理员
    public function deladm($id){
        $adm=M("admin");
        //查询管理员的状态
        $super=$adm->where('adm_issuper=0 and id=%d',$id)->select();
       
        //判断
        if($super){
            $data=$adm->delete($id);
            if($data){
                $this->success("删除成功！",U('Admin/index'));
            }
        }else{
            $this->error("你是超级管理员，不能删除！",U('Admin/index'));
        }
    }
    
}