<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends Controller {
	//商品类型管理
    public function type(){
        $this->display();
    }

    //菜品管理
    public function menu(){
        $this->display();
    }

    //酒水管理
    public function jiushui(){
        $this->display();
    }
}