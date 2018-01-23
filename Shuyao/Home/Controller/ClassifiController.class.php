<?php
namespace Home\Controller;
use Think\Controller;
class ClassifiController extends Controller {
	//分类页面查询
    public function index(){
    	//查询菜品菜品类型id,类型名称
    	$cls=M('menutype');
    	$data=$cls->field('mtype_id,mtype_name')->order('mtype_id')->select();
    	$this->assign('data',$data);

    	//根据热菜类型查询下面有哪些菜
    	$hot=M('menuinfo');
    	$data2=$hot->where('mtype_id=1001')->select();
    	$this->assign('data2',$data2);
    	// dump($data2);
    	// die();
        $this->display();
    }

    //根据菜品类型id查询对应的菜
    public function menuinfo($id){
       //推荐菜品查询
        $hot=M('menutype');
        $data=$hot->field('i.id,i.minfo_name,i.minfo_img,m.mtype_name')->table('sy_menutype m,sy_menuinfo i')->where('m.mtype_id=i.mtype_id and m.mtype_id=%d',$id)->select();
        $this->assign('data',$data);
        // dump($data);
        // die();
        $this->display();
    }

    //推荐
    public function tuijian(){
       //推荐菜品查询
        $tj=M('menuinfo');
        $data1=$tj->where('minfo_istuijian=1')->select();
        // echo json_encode()
        $this->assign('data1',$data1);
        $this->display();
    }

    //菜品详情页
    public function detail($id){
        //根据菜品id显示菜品详情
        $m=M('menuinfo');
        $data=$m->field('minfo_name,minfo_img,minfo_price,minfo_original,mtype_id,minfo_remark')->select($id);
        // dump($data);
        // die();
        $this->assign('data',$data[0]);
        $this->display();
    }


}