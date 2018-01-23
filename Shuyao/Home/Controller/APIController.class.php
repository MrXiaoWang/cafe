<?php
namespace Home\Controller;
use Think\Controller;
class APIController extends Controller {

	//判断用户输入的手机号是否注册
	public function IsZhuce(){

		$phone = I('post.mobile');

		$user = M('userinfo');

		if($user->where('u_phone = $s',$phone)->getFiled('u_phone')){
			//失败返回0
			echo 0;

		}else{
			//成功返回1
			echo 1;

		}
	}

	//验证用户输入的密码
	public function Oldpass(){
		$u_phone = I('session.u_phone');

		$u_pass = md5(I('post.oldPass'));

		$user = M('userinfo');

		if($user->where("u_phone = '%s' and u_pass = '%s'",$u_phone,$u_pass)->select()){
			$pass = I('post.newPass');
			
			$user->create();

			$user->u_pass = md5($pass);

			if($user->where("u_phone = %s",$u_phone)->save()){
			//成功返回1
				echo 0;

			}else{
				//失败返回0
				echo 2;
			}

		}else{
			echo 1;
		}
	}

	//用户找回密码，修改功能
	public function UpPassWord(){
		/*取到用户从前台传过来的信息*/

		$u_phone = I('session.u_phone');

		$pass = I('post.newPass');

		$user = M('userinfo');

		$user->create();

		$user->u_pass = md5($pass);

		if($usre->where('u_phone = $s',$u_phone)->save()){
			//成功返回1
			echo 1;

		}else{
			//失败返回0
			echo 0;

		}

	}

}