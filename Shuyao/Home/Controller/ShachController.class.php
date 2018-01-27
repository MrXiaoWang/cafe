<?php
namespace Home\Controller;
use Think\Controller;
class ShachController extends Controller {	
	// 查询售卖前6的菜品
	public function seach(){
		 $t = M('menuinfo');
		/*热门搜索  按菜品出售情况推荐，推荐前6的菜品。*/
		$mysql="SELECT id,minfo_name,count( minfo_num ) AS count FROM sy_menuinfo GROUP BY minfo_num ORDER BY count DESC LIMIT 6";
		$rm=$t->query($mysql);
		//把从数据库查询出来售卖前6的菜品赋值给页面
		$this->assign('rm',$rm);
		// 点击显示菜品详情
		$this->display();
	}

	/*模糊查询*/
	public  function seachxq(){
		// 接收前台页面传过来的值，并去点空格
		$con=trim($_POST['mohu']);
		//判断传过来的值是否为空
		if($con==null){
			$this->error("请输入需要搜索的内容！");
		}else{
			$t=M('menuinfo');
			// 模糊查询条件
			$data['minfo_name'] = array('like', "%$con%");
	        $u= $t->where($data)->select();
	        // 如果查询出来显示到页面，没有数据返回到查询页面
			if($u){
		        //把查询出来的菜品显示出来
		        $this->assign("list",$u);
				$this->display();
			}else{
				// 未查询出结果返回到查询页面
				$this->success("请输入正确的信息！",U('shach/seach'));
			}
	  	}
	}

}