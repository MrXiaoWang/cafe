<?php
namespace Admin\Controller;
use Think\Controller;
class TableController extends CheckController {

    public function index(){

    	//查询所有餐桌
    	$table = M("canzhou");


    	$count      = $table->count();
    	// 查询满足要求的总记录数
    	$Page       = new \Think\Page($count,1);
    	// 实例化分页类 传入总记录数和每页显示的记录数(25)
    	$show       = $Page->show();
    	// 分页显示输出
    	// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    	$result = $table->limit($Page->firstRow.','.$Page->listRows)->select();
    	// 赋值数据集
    	$this->assign('page',$show);
    	// 赋值分页输出
    	$this->assign("result",$result);

        $this->display();
    }

    public function add(){

    	$table = M('canzhou');

    	$table->user_id = 0;

    	$table ->is_time = 0;

    	$result = $table->add();

    	if($result){
    		$this->success("添加成功",U("Table/index"));
    	}else{
    		$this->error("添加失败");
    	}
    }

	public function del(){
		$id = I('get.id');

		$table = M('canzhou');

		if($table->where('id=%d',$id)->delete()){
			$this->success("删除成功",U("Table/index"));
		}else{
			$this->error("删除失败");
		}

	}

	public function upd(){
		$id = I('get.id');

		$table = M('canzhou');
		$table->user_id = 0;


		$table->is_time = 0;

		if($table->where('id=%d',$id)->save()){
			$this->success("设置成功",U("Table/index"));
		}else{
			$this->error("设置失败");
		}
	}

	public function showPage(){

		//取到提交过来的数据
		$is_time = I('get.is_time');

		if($is_time  == 0){
			$this->error("该位置没人");
		}

		$id = I("get.id");

		//根据餐桌的编号，查询出对应的用户点餐数据


		//未做完

	}

}