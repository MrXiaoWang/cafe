<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    

    public function index(){
        $minfo=M('menuinfo');
        //首页轮播
        $indexdata=$minfo->order('rand()')->where('mtype_id!=1017')->limit(0,7)->select();//随机取7个    
        // dump($indexdata);
        // die();
        $this->assign('indexdata',$indexdata);
        
    	//查询前三条新品
    	$newdata=$minfo->table('sy_menutype m,sy_menuinfo i')->where('i.minfo_isnew=1 and m.mtype_id=i.mtype_id')->limit(0,3)->select();//取前三个    
    	// dump($newdata);
    	// die();
    	$this->assign('newdata',$newdata);

    	//推荐菜品三个
    	$tjdata=$minfo->table('sy_menutype m,sy_menuinfo i')->where('i.minfo_istuijian=1 and m.mtype_id=i.mtype_id and i.mtype_id!=1017')->order('rand()')->limit(0,3)->select();//取前三个  
    	$this->assign('tjdata',$tjdata);

    	//价格最低菜品三个
    	$mindata=$minfo->table('sy_menutype m,sy_menuinfo i')->where('m.mtype_id=i.mtype_id and m.mtype_id!=1017')->order('i.minfo_price')->limit(0,3)->select();//取前三个  
    	$this->assign('mindata',$mindata);
    	// dump($mindata);
    	// die();
    	
    	//热卖菜品三个
    	$hotdata=$minfo->table('sy_menutype m,sy_menuinfo i')->where('m.mtype_id=i.mtype_id and m.mtype_id!=1017')->order('i.minfo_count desc')->limit(3,3)->select();//取前三个  
    	$this->assign('hotdata',$hotdata);
    	// dump($hotdata);
    	// die();

    	//一周热门菜品三个
    	$yizhouhotdata=$minfo->table('sy_menutype m,sy_menuinfo i')->where('m.mtype_id=i.mtype_id and m.mtype_id!=1017')->order('rand()')->limit(0,3)->select();//取前三个  
    	$this->assign('yizhouhotdata',$yizhouhotdata);
    	
    	//人气菜肴菜品三个
    	$renqidata=$minfo->table('sy_menutype m,sy_menuinfo i')->where('m.mtype_id=i.mtype_id and m.mtype_id!=1017')->order('rand()')->limit(0,3)->select();//取前三个  
    	$this->assign('renqidata',$renqidata);

		//前台首页
    	$this->display();

    }
}