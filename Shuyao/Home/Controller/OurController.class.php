<?php
namespace Home\Controller;
use Think\Controller;
class OurController extends Controller {
    //初始化页面
    public function index(){

        //根据用户存的session查询出用户的数据
        $_SESSION["u_phone"] = '13896324414';

        $u_phone = I('session.u_phone');

        $user = M('userinfo');

        //查询出一条数据
        $result = $user->where("u_phone = %s",$u_phone)->select()[0];


        $this->assign('result',$result);

        $this->display();

    }

    public function management(){

        $u_phone = I('session.u_phone');

        $user = M('userinfo');

        //查询出一条数据
        $result = $user->where("u_phone = %s",$u_phone)->select()[0];

        $this->assign('result',$result);
        
        $this->display();

    }

    public function nickname(){

        $u_phone = I('session.u_phone');

        $user = M('userinfo');

        //查询出一条数据
        $result = $user->where("u_phone = %s",$u_phone)->select()[0];

        $this->assign('result',$result);
        
        $this->display();
    }

    public function upname(){

        $u_name = I('post.u_name');

        $u_phone = I('session.u_phone');

        $user = M('userinfo');

        $user->create();

        $user->u_name = $u_name;

        if($user->where('u_phone = %s',$u_phone)->save()){
            $this->success("修改成功",U('Our/index'));
        }else{
            $this->error("修改失败");
        }
    }

    public function signature(){
        $u_phone = I('session.u_phone');

        $user = M('userinfo');

        //查询出一条数据
        $result = $user->where("u_phone = %s",$u_phone)->select()[0];

        $this->assign('result',$result);
        
        $this->display();
    }

    public function upsiga(){
        $u_gexing = I('post.txt');

        $u_phone = I('session.u_phone');

        $user = M('userinfo');

        $user->create();

        $user->u_gexing = $u_gexing;

        if($user->where('u_phone = %s',$u_phone)->save()){
            $this->success("修改成功",U('Our/index'));
        }else{
            $this->error("修改失败");
        }
    }

    public function mailbox(){
        $u_phone = I('session.u_phone');

        $user = M('userinfo');

        //查询出一条数据
        $result = $user->where("u_phone = %s",$u_phone)->select()[0];

        $this->assign('result',$result);
        
        $this->display();
    }

    public function upemail(){
        $u_gexing = I('post.email');

        $u_phone = I('session.u_phone');

        $user = M('userinfo');

        $user->create();

        $user->u_email = $u_gexing;

        if($user->where('u_phone = %s',$u_phone)->save()){
            $this->success("修改成功",U('Our/index'));
        }else{
            $this->error("修改失败");
        }
    }


    public function modifypassword(){

        $u_phone = I('session.u_phone');

        $user = M('userinfo');

        $pass = $user->where('u_phone = %s',$u_phone)->getField('u_pass');

        $this->assign('u_pass',$pass);

        $this->display();

    }

    public function birthday(){

        $u_phone = I('session.u_phone');

        $user = M('userinfo');

        //查询出一条数据
        $result = $user->where("u_phone = %s",$u_phone)->select()[0];

        $this->assign('result',$result);
        
        $this->display();

    }

    public function upbir(){
        $u_phone = I('session.u_phone');

        $birthday = I("post.birthday");

        $user = M('userinfo');

        $user->create();

        $user->u_birthday = $birthday;

        if($user->where('u_phone = %s',$u_phone)->save()){
            echo 1;
        }else{
            echo 0;
        }
        

    }
}