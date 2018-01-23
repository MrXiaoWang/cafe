<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $adm=M("userinfo");
    	if($_POST){
    		//得到表单里面的数据
    		$adm_name=$_POST["adm_name"];
    		$adm_pwd=md5($_POST["adm_pwd"]);

    		//判断用户账号手机号登陆
    		if(strlen($_POST["adm_name"]) == 11 && is_numeric($adm_name)){
    			$sql["u_phone"]=$adm_name;
    			$sql["u_pass"]=$adm_pwd;
    		} else {
    			$sql["U_lname"]=$adm_name;
    			$sql["u_pass"]=$adm_pwd;
    		}
    		//根据数据库的数据查询
    		$result=$adm->where($sql)->select();
    		//判断
    		if(count($result)>0){
    			$this->success("登录成功!",U('Index/index'));
    		}else{
                $this->error("登录失败!",U('Login/index'));
            }
    	}else{
    		$this->display();//显示模板
    	}
    }
}