<?php
namespace Home\Controller;
use Think\Controller;
use Org\Util;
class CallbackController extends Controller {
	public function index(){
		
        //请求accesstoken
        $qqobj = new \Org\Util\Qqconnect();
      
        $accesstoken = $qqobj->getAccessToken();
      
        $openid=$qqobj->getOpenID();

        $qqobj->setcallbackinfo();

        $result=$qqobj->getUsrInfo();
      	
      	$obj = json_decode($result);
      
      	$photo = $obj->figureurl_qq_1;
      	$name = $obj->nickname;
      	$sex = $obj->gender;
      	$address = $obj->province.$obj->city;
      	$year = $obj->year;
		
      		
      	$row = M("userinfo");
      	//根据数据库的数据查询
      	$result=$row->where("u_appid = '%s'",$photo)->getField('u_phone');
      	if($result){
          $_SESSION['u_phone'] = $result;
          $this->display("Index/index");
        }else {
        	//实例化Userinfo对象
            $user = M("userinfo");
            //获取存入数据库的数据
            $data['u_img'] = $photo;
            $data['u_name'] = $name;
            $data['u_address'] = $address;
            $data['u_birthday'] = $year;
            if($sex == "男"){
              $data['u_sex'] = "1";
            }else{
              $data['u_sex'] = "0";
            }
            $data['u_appid'] = $photo;
            //将数据data存入数据库
            $user->add($data);
            $result=$row->where("u_phone=null and u_appid = '%s'",$photo)->select();
            if($result == null){
                  echo "<script> alert('登录成功,请绑定手机号码!'); </script>";
                  $_SESSION["u_appid"] = $photo;
                  $this->display("Login/appleid");
            }else{
              echo "前往主页面";
              die();
            }
        }
      
        //$this->display("Index/index");
    
    }
}