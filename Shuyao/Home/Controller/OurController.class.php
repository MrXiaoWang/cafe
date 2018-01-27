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

    public function file(){
        $minfo=M('userinfo');
        if($_FILES){//修改
            $id= I("session.u_phone");
            $data=$minfo->create();
            $flag = 0; // 标记一下图片有没有被修改
            $data["u_phone"] = $id;
            //如果用户从新选择了图像
            if($_FILES["headimg"]["name"] != ""){
                $upload = new \Think\Upload(); // 实例化上传类
                $upload->maxSize = 3145728; // 设置附件上传大小
                $upload->exts = array('jpg', 'gif','png','jpeg'); // 设置附件上传类型
                $upload->rootPath = './Public/';
                $upload->savePath = './u_img/'; // 设置附件上传目录
                $info = $upload->upload();
                if (! $info) {
                    // 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {
                    $flag = 10;
                    // 保存文件的名称 方便使用时直接调
                    $data["u_img"] = $info["headimg"]["savepath"] . $info["headimg"]["savename"];
                }
            }
            $result=$minfo->where("u_phone='%s'",$id)->save($data);
            if($result){
               
                $this->success("修改成功",U("Our/management")); 
                
            }else{
                $this->error("修改失败",U("Our/management"));
            }
        }
    }
}