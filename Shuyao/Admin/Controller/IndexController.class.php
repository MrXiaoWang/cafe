<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CheckController {
    public function index(){
    	$this->assign('adm_name',$_SESSION["adm_name"]);
        $this->assign('adm_lasttime',$_SESSION["adm_lasttime"]);
        $this->display();
    }
}