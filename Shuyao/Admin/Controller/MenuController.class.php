<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends CheckController {
	//商品类型管理查询
    public function type(){
    	$type=M('menutype');
    	$count=$type->count();//总记录条数
    	//实例化分页类
    	$Page=new \Think\ Page($count,5);//总记录数和显示的条数
    	$show=$Page->show();
    	$data=$type->limit($Page->firstRow.','.$Page->listRows)->order("mtype_id")->select();
    	//赋值
    	$this->assign('data',$data);
    	$this->assign('page',$show);
        //下拉框选择菜品类型
        $ty=M('menutype');
        $data1=$ty->select();
        $this->assign('data1',$data1);

        $this->display();
    }

    //商品类型添加
    public function addtype(){
    	$type=M('menutype');
    	if($_POST){
    		$type->create();
    		$data=$type->add();//添加到数据库
    		if($data){
    			$this->success('添加成功!',U('Menu/type'));
                //商品类型添加成功后添加一条操作记录
                $ac=M('action');
                //得到操作人
                $action->adm_name=$_SESSION['adm_name'];
                $action->a_info="添加了菜品类型！";//操作内容
                $ip = $_SERVER["REMOTE_ADDR"];
                $action->adm_server=$_SESSION['adm_server']=$ip;//操作主机
                $ac->data($action)->add();
    		}else{
    			$this->error('添加失败!',U('Menu/type'));
    		}
    	}else{
    		$this->display();
    	}
    }

    //菜品类型删除
    public function deltype($id){
    	$type=M('menutype');
    	$data=$type->delete($id);
    	if($data){
    		$this->success('删除成功!',U('Menu/type'));
               //商品类型删除成功后添加一条操作记录
                $ac=M('action');
                //得到操作人
                $action->adm_name=$_SESSION['adm_name'];
                $action->a_info="删除了菜品类型！";//操作内容
                $ip = $_SERVER["REMOTE_ADDR"];
                $action->adm_server=$_SESSION['adm_server']=$ip;//操作主机
                $ac->data($action)->add();
    	}else{
    		$this->error('删除失败!',U('Menu/type'));
    	}
    }

    //修改菜品类型
    public function updtype($id=""){
    	$type=M("menutype");
    	if($_POST){//修改
            $id= I("post.mtype_id");
    		$type->create();
    		$data=$type->save();
    		if($data){
    			$this->success("修改成功!",U('Menu/type'));
               //商品类型修改成功后添加一条操作记录
                $ac=M('action');
                //得到操作人
                $action->adm_name=$_SESSION['adm_name'];
                $action->a_info="修改了菜品类型！";//操作内容
                $ip = $_SERVER["REMOTE_ADDR"];
                $action->adm_server=$_SESSION['adm_server']=$ip;//操作主机
                $ac->data($action)->add();
    		}else{
    			$this->error("修改失败！",U('Menu/type'));
    		}
    	}else{//查询
    		$data=$type->select($id);
    		$this->assign('data',$data[0]);
    		$this->display();
    	}
    }

    //菜品类型下对应的菜
    public function menuinfo($id){
        $t=M('menutype');
        $data=$t->field('i.id,i.minfo_name,i.minfo_img')->table('sy_menutype t,sy_menuinfo i')->where('t.mtype_id=i.mtype_id and t.mtype_id=%d',$id)->select();
         // dump($data);
         // die();
        $this->assign('data',$data);
        $this->display();
    }

    //菜品管理
    public function menu(){//查询
        $minfo=M('menuinfo');//菜品
        $mtype=M('menutype');//菜品类型
        $count=$minfo->count();//总记录条数
        //实例化分页类
        $Page=new \Think\ Page($count,5);//总记录数和显示的条数
        $show=$Page->show();
        //表格
        $data=$minfo->field('i.id,i.minfo_img,i.minfo_name,t.mtype_name,i.minfo_price')->table('sy_menuinfo i,sy_menutype t')->where('i.mtype_id=t.mtype_id')->limit($Page->firstRow.','.$Page->listRows)->order("i.id")->select();
        //得到菜品类型和类型id
        $data1=$mtype->field('mtype_id,mtype_name')->select();
        // dump($data2);
        // die();
        //赋值
        $this->assign('data',$data);
        $this->assign('data1',$data1);
        $this->assign('page',$show);
        $this->display();
    }

    //添加菜品
    public function addminfo(){
        if($_POST){
            //实例化
            $minfo=M('menuinfo');
            $data=$minfo->create();
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts =array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->savePath = './minfo_img/'; // 设置附件上传目录
            $info = $upload->upload();
            if(! $info){
                 // 上传错误提示错误信息
                $this->error($upload->getError());
            }else{
                // 保存文件的名称 方便使用时直接调
                $data["minfo_img"] = $info["minfo_img"]["savepath"] . $info["minfo_img"]["savename"];
                $result=$minfo->add($data);
                if($data){
                    $this->success("菜品添加成功！",U("Menu/menu"));
                    //菜品添加成功后添加一条操作记录
                    $ac=M('action');
                    //得到操作人
                    $action->adm_name=$_SESSION['adm_name'];
                    $action->a_info="添加了新菜品！";//操作内容
                    $ip = $_SERVER["REMOTE_ADDR"];
                    $action->adm_server=$_SESSION['adm_server']=$ip;//操作主机
                    $ac->data($action)->add();
                }else{
                    $this->error("菜品添加失败！",U("Menu/menu")); 
                }
            }
        }else{
            $this->display();
        }
    }

    //删除菜品
    public  function delminfo($id){
        $minfo=M('menuinfo');
        $data=$minfo->delete($id);
        if($data){
            $this->success('删除成功!',U('Menu/menu'));
               //菜品添加成功后添加一条操作记录
                $ac=M('action');
                //得到操作人
                $action->adm_name=$_SESSION['adm_name'];
                $action->a_info="删除了菜品！";//操作内容
                $ip = $_SERVER["REMOTE_ADDR"];
                $action->adm_server=$_SESSION['adm_server']=$ip;//操作主机
                $ac->data($action)->add();
        }else{
            $this->error('删除失败!',U('Menu/menu'));
        }
    }

    //修改菜品
    public function updminfo($id){
        $minfo=M('menuinfo');
        if($_POST){//修改
            //$id= I("post.id");
            $data=$minfo->create();
            $flag = 0; // 标记一下图片有没有被修改
            $data["id"] = $id;
            //如果用户从新选择了图像
            if($_FILES["minfo_img"]["name"] != ""){
                $upload = new \Think\Upload(); // 实例化上传类
                $upload->maxSize = 3145728; // 设置附件上传大小
                $upload->exts = array('jpg', 'gif','png','jpeg'); // 设置附件上传类型
                $upload->savePath = './minfo_img/'; // 设置附件上传目录
                $info = $upload->upload();
                if (! $info) {
                    // 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {
                    $flag = 10;
                    // 保存文件的名称 方便使用时直接调
                    $data["minfo_img"] = $info["minfo_img"]["savepath"] . $info["minfo_img"]["savename"];
                }
            }
            $result=$minfo->save($data);
            if($result){
                //删除原来的照片
                if ($flag == 10) {
                    // 需要原始图片的名称
                    $filename = $_POST["h_minfo_img"];
                    unlink($_SERVER["DOCUMENT_ROOT"] . "/Uplomtype/" . $filename);
                }
                $this->success("修改成功",U("Menu/menu")); 
                //菜品修改成功后添加一条操作记录
                $ac=M('action');
                //得到操作人
                $action->adm_name=$_SESSION['adm_name'];
                $action->a_info="修改了菜品！";//操作内容
                $ip = $_SERVER["REMOTE_ADDR"];
                $action->adm_server=$_SESSION['adm_server']=$ip;//操作主机
                $ac->data($action)->add();
            }else{
                $this->error("修改失败",U("Menu/menu"));
            }
        }else{//查询
                //实例化菜品类型
                $mtype=M("menutype");
                $data2=$mtype->select();//->table('sy_menuinfo i,sy_menutype t')->where('i.mtype_id=t.mtype_id')
                $this->assign("data2",$data2);
            $data=$minfo->select($id);
            $this->assign("data",$data[0]);
            $this->display();
            //dump($data);
            //dump($data2);
        }
    }

    //菜品模糊查询
    public  function  menuinfomohu(){
        $menu=M("menuinfo");
        if($_POST){
            $name=$_POST["keywords"];//根据菜品名称查询菜
            $data=$menu->where("minfo_name like '%$name%'")->select();
            $this->assign("data",$data);//赋值必须跟查询赋值的字段一样
            $this->display("menu");
        }
    }

    //菜品类型模糊查询
    public  function  menutypemohu(){
        $menu=M("menutype");
        if($_POST){
            $name=$_POST["keywords"];//根据菜品名称查询菜
            $data=$menu->where("mtype_name like '%$name%'")->select();
            $this->assign("data",$data);//赋值必须跟查询赋值的字段一样
            $this->display("type");
        }
    }


    //菜品下拉框选择
    public function sea(){
        $typeid = I('post.typeid');

        $menu = M('menuinfo');

        $result=$menu->table('sy_menutype m,sy_menuinfo i')->where('i.mtype_id=%d and m.mtype_id=i.mtype_id',$typeid)->select();
       
        if($result){
            echo json_encode($result);
        }else{
            echo 0;
        }

    }

    
}