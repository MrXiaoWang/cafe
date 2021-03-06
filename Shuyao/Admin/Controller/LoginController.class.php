<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	//登录
    public function index(){
        $adm=M("admin");
    	if($_POST){
            $yzm = $this->check_verify($_POST["code"],$id=$_SESSION["verify"]);
            if($yzm==false){
                die("<script>alert('请填写正确的验证码！');history.back(); </script>");
            }
    		//得到表单里面的数据
    		$adm_name=$_POST["adm_name"];
    		$adm_pwd=md5($_POST["adm_pwd"]);
    		$sql["adm_name"]=$adm_name;
    		$sql["adm_pwd"]=$adm_pwd;
    		//根据数据库的数据查询
    		$result=$adm->where($sql)->select();
    		//判断
    		if(count($result)>0){
    			$_SESSION["id"]=$result[0];//记录登录人的id
    			$_SESSION["adm_name"]=$_POST["adm_name"];//记录登录人的名字
                $_SESSION["adm_lasttime"]=$result[0]['adm_lasttime'];
    			$this->success("登录成功!",U('Index/index'));

                //得到登录的ip主机地址
                $ip = $_SERVER["REMOTE_ADDR"];
                $_SESSION['adm_server']=$ip;
                // dump($_SESSION['adm_server']);
                // die();
                //设置时区
                date_default_timezone_set("PRC"); 
                //获取当前时间
                $timer = date('y-m-d h:i:s', time());
                // 修改最后一次登录时间
                $re=$adm->execute("UPDATE `sy_admin` SET `adm_lasttime`='".$timer."',`adm_server`='".$ip."' WHERE id='".$result[0]['id']."'");
                // var_dump($ip);
                // die();
    		}else{
                $this->error("登录失败!",U('Login/index'));
            }

    	}else{
    		$this->display();//显示模板
    	}
    }

    //退出登录
    public function logout(){//退出登录
	    if($_SESSION){
	        session(null);
	        $this->success('退出成功',U('Login/index'));
	    }
	}

	//验证码
    public function yzm(){
     $Verify = new \Think\Verify();
     // 设置验证码字符为纯数字
     $Verify->codeSet = '0123456789';
     $Verify->entry();

    }

    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    public function check_verify($code, $id = ''){   
       $verify = new \Think\Verify(); 
        return $verify->check($code, $id);
    }

}