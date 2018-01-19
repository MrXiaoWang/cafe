<?php
namespace Admin\Controller;
use Think\Controller;
class CheckController extends Controller {
    public function _initialize(){
        if(!$_SESSION["id"]){
            $this->error("请先登录",U("Login/index"));
        }
    }

    
}