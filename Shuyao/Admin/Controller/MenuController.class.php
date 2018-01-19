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
    	// dump($data);
    	// die();
    	//赋值
    	$this->assign('data',$data);
    	$this->assign('page',$show);
        $this->display();
    }

    //商品类型添加
    public function addtype(){
    	$type=M('menutype');
    	if($_POST){
    		$type->create();
    		$data=$type->add();//添加到数据库
    		if($data){
    			//echo "1";
    			$this->success('添加成功!',U('Menu/type'));
    		}else{
    			//echo '0';
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
        $data1=$mtype->field('mtype_id,mtype_name')->select();
        // dump($data);
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

    // //酒水管理
    // public function jiushui(){
    //     $this->display();
    // }
}