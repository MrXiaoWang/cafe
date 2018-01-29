<?php
namespace Home\Controller;
use Think\Controller;
class RankingController extends Controller {	
	// 查询限时折扣页面
	public function index(){
		//查询最新发布新菜
		$new=M('menuinfo');
		$onedata=$new->table('sy_menutype m,sy_menuinfo i')->where('i.minfo_isnew=1 and i.mtype_id!=1017 and m.mtype_id=i.mtype_id')->limit(0,7)->select();
		$this->assign('onedata',$onedata);
		
		//一周热门 查询数量最多的7个菜 正序
		$twodata=$new->table('sy_menutype m,sy_menuinfo i')->where('i.mtype_id!=1017 and m.mtype_id=i.mtype_id')->order('i.minfo_count')->limit(0,7)->select();
		$this->assign('twodata',$twodata);
		
		// 人气菜肴 查询数量最多的7个菜正序并且随机
		$threedata=$new->table('sy_menutype m,sy_menuinfo i')->where('i.mtype_id!=1017 and m.mtype_id=i.mtype_id')->order('i.minfo_count and rand()')->limit(1,7)->select();
		$this->assign('threedata',$threedata);
		
		// 明星菜谱查询最贵的的7个菜
		$fourdata=$new->table('sy_menutype m,sy_menuinfo i')->where('i.mtype_id!=1017 and m.mtype_id=i.mtype_id')->order('i.minfo_price desc')->limit(0,7)->select();
		$this->assign('fourdata',$fourdata);
		
		//食神菜谱 查询数量最多的7个菜 数量大于10的
		$fivedata=$new->table('sy_menutype m,sy_menuinfo i')->where('i.mtype_id!=1017 and m.mtype_id=i.mtype_id and i.minfo_count >10')->order('i.minfo_count')->limit(0,7)->select();
		$this->assign('fivedata',$fivedata);
		// dump($fivedata);
		// die();
		$this->display();
	}
}