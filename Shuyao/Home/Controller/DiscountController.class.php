<?php
namespace Home\Controller;
use Think\Controller;
class DiscountController extends Controller {	
	// 查询限时折扣页面
	public function index(){
		//查询菜品中价格最低的3个菜
		$min=M('menuinfo');
		$onedata=$min->table('sy_menutype m,sy_menuinfo i')->where('i.mtype_id!=1017 and i.mtype_id=m.mtype_id')->order('i.minfo_price')->limit(0,3)->select();
		$this->assign("onedata",$onedata);
		
		$twodata=$min->table('sy_menutype m,sy_menuinfo i')->where('i.mtype_id!=1017 and i.mtype_id=m.mtype_id')->order('i.minfo_price')->limit(3,3)->select();
		$this->assign("twodata",$twodata);
		
		$threedata=$min->table('sy_menutype m,sy_menuinfo i')->where('i.mtype_id!=1017 and i.mtype_id=m.mtype_id')->order('i.minfo_price')->limit(6,3)->select();
		$this->assign("threedata",$threedata);


		$fourdata=$min->table('sy_menutype m,sy_menuinfo i')->where('i.mtype_id!=1017 and i.mtype_id=m.mtype_id and i.minfo_isnew=1')->order('i.minfo_price')->limit(0,3)->select();
		$this->assign("fourdata",$fourdata);
		 
		$fivedata=$min->table('sy_menutype m,sy_menuinfo i')->where('i.mtype_id=1017 and i.mtype_id=m.mtype_id')->order('i.minfo_price')->limit(0,3)->select();
		$this->assign("fivedata",$fivedata);
		
		$sixdata=$min->table('sy_menutype m,sy_menuinfo i')->where('i.mtype_id=1017 and i.mtype_id=m.mtype_id')->order('i.minfo_price')->limit(3,3)->select();
		$this->assign("sixdata",$sixdata);
		
		$sevendata=$min->table('sy_menutype m,sy_menuinfo i')->where('i.mtype_id=1017 and i.mtype_id=m.mtype_id')->order('i.minfo_price')->limit(6,3)->select();
		$this->assign("sevendata",$sevendata);
		// dump($sevendata);
		// die();
		
		$this->display();
	}
}