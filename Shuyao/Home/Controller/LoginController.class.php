<?php
namespace Home\Controller;
use Think\Controller;
use Org\Util;
class LoginController extends Controller {
    public function index(){
      if($_SESSION["u_phone"]){
      	$this->display('Index/index');
      }else{
      	 function random($length = 6 , $numeric = 0) {
            PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
            if($numeric) {
                $hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
            } else {
                $hash = '';
                $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
                $max = strlen($chars) - 1;
                for($i = 0; $i < $length; $i++) {
                    $hash .= $chars[mt_rand(0, $max)];
                }
            }
            return $hash;
        }
        $_SESSION['send_code'] = random(6,1);

        // 实例化User对象
        $adm = M("userinfo");
    	if($_POST){
    		//得到表单里面的数据
    		$adm_name = $_POST["adm_name"];
    		$adm_pwd = md5($_POST["adm_pwd"]);

    		//判断用户账号手机号登陆
    		if(strlen($_POST["adm_name"]) == 11 && is_numeric($adm_name)){
    			//手机号登陆
       			$sql["u_phone"] = $adm_name;
       			$sql["u_pass"] = $adm_pwd;
    		} else {
    			//账号登录
    			$sql["u_lname"] = $adm_name;
    			$sql["u_pass"] = $adm_pwd;
    		}
    		//根据数据库的数据查询
    		$result = $adm->where($sql)->find();
    		//判断
    		if(count($result)>0){
    			//判断该用户绑定手机号
    			if($result["u_phone"] == null){
    				$this->success("登录成功,请绑定手机号码!",U('Login/appleid'));
    			} else {
    				$this->success("登录成功!",U('Index/index'));
    				//登录成功后用session存储手机号码和u_id
    				$_SESSION['u_phone'] = $result["u_phone"];
                    $_SESSION['u_id'] = $result["u_id"];
    			}
    		}else{
                $this->error("登录失败!",U('Login/index'));
            }
    	}else{
    		$this->display();//显示模板
    	}
      }
      
    }

    public function appid(){
        function random($length = 6 , $numeric = 0) {
            PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
            if($numeric) {
                $hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
            } else {
                $hash = '';
                $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
                $max = strlen($chars) - 1;
                for($i = 0; $i < $length; $i++) {
                    $hash .= $chars[mt_rand(0, $max)];
                }
            }
            return $hash;
        }
        $_SESSION['send_code'] = random(6,1);

        $this->display();
    }


    public function register(){
        // 实例化User对象
        $user = M("userinfo");

        if($_POST){
            // echo '<pre>';print_r($_POST);print_r($_SESSION);
            // die();

            //得到表单里面的数据
            $u_phone = $_POST["mobile"];
            $u_pass = md5($_POST["pass"]);
            $data['u_phone'] = $u_phone;
            $data['u_pass'] = $u_pass;
            $data['u_lname'] = $_POST["mobile"];

            $user->add($data);

            if($_POST['mobile']!=$_SESSION['mobile'] or $_POST['mobile_code']!=$_SESSION['mobile_code'] or empty($_POST['mobile']) or empty($_POST['mobile_code'])){
                exit('手机验证码输入错误。'); 
            }else{
                $_SESSION['mobile'] = '';
                $_SESSION['mobile_code'] = ''; 
                $this->success("注册成功",U('Index/index'));
                //exit('注册成功。');  
            }
        } else {
            $this->display();//显示模板
        }
        function random($length = 6 , $numeric = 0) {
            PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
            if($numeric) {
                $hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
            } else {
                $hash = '';
                $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
                $max = strlen($chars) - 1;
                for($i = 0; $i < $length; $i++) {
                    $hash .= $chars[mt_rand(0, $max)];
                }
            }
            return $hash;
        }
        $_SESSION['send_code'] = random(6,1);
    }
    
  	public function bindphone(){
        // 实例化User对象
        $user = M("userinfo");

        if($_POST){
            // echo '<pre>';print_r($_POST);print_r($_SESSION);
            // die();

            //得到表单里面的数据
            $u_phone = $_POST["mobile"];
            $u_pass = md5($_POST["pass"]);
            $data['u_phone'] = $u_phone;
            $data['u_pass'] = $u_pass;
            $data['u_lname'] = $_POST["mobile"];
			
            $user->where("u_appid = '%s'",I('session.u_appid'))->save($data);
          

            if($_POST['mobile']!=$_SESSION['mobile'] or $_POST['mobile_code']!=$_SESSION['mobile_code'] or empty($_POST['mobile']) or empty($_POST['mobile_code'])){
                exit('手机验证码输入错误。'); 
            }else{
                $_SESSION['mobile'] = '';
                $_SESSION['mobile_code'] = ''; 
                $this->success("注册成功",U('Index/index'));
                //exit('注册成功。');  
            }
        } else {
            $this->display();//显示模板
        }
        function random($length = 6 , $numeric = 0) {
            PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
            if($numeric) {
                $hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
            } else {
                $hash = '';
                $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
                $max = strlen($chars) - 1;
                for($i = 0; $i < $length; $i++) {
                    $hash .= $chars[mt_rand(0, $max)];
                }
            }
            return $hash;
        }
        $_SESSION['send_code'] = random(6,1);
    }
  
    public function send(){
        //请求数据到短信接口，检查环境是否 开启 curl init。

        function Post($curlPost,$url){
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_HEADER, false);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_NOBODY, true);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
                $return_str = curl_exec($curl);
                curl_close($curl);
                return $return_str;
        }

        //将 xml数据转换为数组格式。
        function xml_to_array($xml){
            $reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
            if(preg_match_all($reg, $xml, $matches)){
                $count = count($matches[0]);
                for($i = 0; $i < $count; $i++){
                $subxml= $matches[2][$i];
                $key = $matches[1][$i];
                    if(preg_match( $reg, $subxml )){
                        $arr[$key] = xml_to_array( $subxml );
                    }else{
                        $arr[$key] = $subxml;
                    }
                }
            }
            return $arr;
        }

        //random() 函数返回随机整数。
        function random($length = 6 , $numeric = 0) {
            PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
            if($numeric) {
                $hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
            } else {
                $hash = '';
                $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
                $max = strlen($chars) - 1;
                for($i = 0; $i < $length; $i++) {
                    $hash .= $chars[mt_rand(0, $max)];
                }
            }
            return $hash;
        }
        //短信接口地址
        $target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";
        //获取手机号
        $mobile = $_POST['mobile'];
        //获取验证码
        $send_code = $_POST['send_code'];
        //生成的随机数
        $mobile_code = random(4,1);
        if(empty($mobile)){
            exit('手机号码不能为空');
        }
        //防用户恶意请求
        if(empty($_SESSION['send_code']) or $send_code!=$_SESSION['send_code']){
            exit('请求超时，请刷新页面后重试');
        }

        $post_data = "account=C90606271&password=ef55016d3c9e6a4a17bcb2f426dc5e66&mobile=".$mobile."&content=".rawurlencode("您的验证码是：".$mobile_code."。请不要把验证码泄露给其他人。");
        //用户名是登录用户中心->验证码短信->产品总览->APIID
        //查看密码请登录用户中心->验证码短信->产品总览->APIKEY
        $gets =  xml_to_array(Post($post_data, $target));
        if($gets['SubmitResult']['code']==2){
            $_SESSION['mobile'] = $mobile;
            $_SESSION['mobile_code'] = $mobile_code;
        }
        echo $gets['SubmitResult']['msg'];
    }
	
    public function qqlogin(){
        //访问QQ登录页面
      	$qqobj=new \Org\Util\Qqconnect();
		$qqobj->getAuthCode();
        
    }
  
}