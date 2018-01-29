<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
    //要查询购物车表登录那个人的订单
    public function index(){
        $_SESSION["u_phone"] = "13896324414";
        //判断是否存在SESSION
        if($_SESSION){
            //获取用户电话
            $u_phone=$_SESSION["u_phone"];
            //创建模型
            $mycart=M("shoppingcart");
            //查询出购物车表中该用户的所有订单
            $result=$mycart->join("sy_menuinfo ON sy_menuinfo.id = sy_shoppingcart.cart_menuid")->where("cart_uphone='%s' and cart_isjiesuan=0 ",$u_phone)->order('cart_time desc')->select();
            //查询出某个用户的所有订单的长度
            $count=$mycart->join("sy_menuinfo ON sy_menuinfo.id = sy_shoppingcart.cart_menuid")->where("cart_uphone='%s' and cart_isjiesuan=0 ",$u_phone)->count();
            //判断是否有结果
            $this->assign("cart",$result);
            $this->assign("count",$count);
            $this->display("Order/order");
        }
    }
    
    //添加某个菜品到我的购物车
    public function addOrder(){
        //判断是否存在post提交
        if($_POST){
            //获取页面传过来的菜品id
            $cart["cart_menuid"]=$_POST["menu_id"];

            //设置向购物车表插入的其他数据的值
            $cart["cart_uphone"]=$_SESSION["u_phone"];
            $cart["cart_isjiesuan"]=0;
            $cart["cart_time"]=time();
            $cart["cart_number"]=1;

            $order=M("shoppingcart");
            //根据这个传过来的id来查询购物车表中是否存在这个id的数据，如果存在，就提醒用户这个菜已经点了
            $rone=$order->where("cart_menuid=%d and cart_isjiesuan = 0 and cart_uphone='%s'",array($cart["cart_menuid"],$cart["cart_uphone"]))->find();
            if($rone){
                //商品已存在
                echo "2";
            }else{
                //调用插入方法
                $result=$order->data($cart)->add();
                //判断结果是否加入成功
                if($result){
                    //加入成功
                    echo "1";
                }else{
                    echo '0';
                }
            }
        }
    }


    public function del()
    {
        $id = I('post.id');
        $phone = I('session.u_phone');


        $shoppingcart = M('shoppingcart');

        $num = $shoppingcart->where("cart_menuid= %d and cart_uphone = '%s'",$id,$phone)->delete();

        if($num){
            echo 1;
        }else{
            echo 0;
        }
    }

    // 我的订单
    public function myorder(){
       $_SESSION["u_phone"] = "13896324414";
        //判断是否存在SESSION
        if($_SESSION){
            //获取用户电话
            $u_phone=$_SESSION["u_phone"];
            //创建模型
            $mycart=M("shoppingcart");
            //查询出购物车表中该用户的所有订单
            //链接订单表，菜单表，已结算表
            $result=$mycart
            ->join("sy_menuinfo ON sy_menuinfo.id = sy_shoppingcart.cart_menuid")->join("sy_order ON sy_menuinfo.id = sy_order.menuinfo_id")
            ->where("cart_uphone='%s'",$u_phone,"cart_isjiesuan=1" )->order('o_time desc')->select();
            /*$result=$mycart
            ->join("sy_menuinfo ON sy_menuinfo.id = sy_shoppingcart.cart_menuid")
            ->join("sy_order ON sy_order.id=sy_menuinfo.id")
            ->where("cart_uphone='%s'",$u_phone ,"cart_isjiesuan=1")->order('o_time desc')->getField('cart_number',true);*/
            // //查询出某个用户的所有订单的长度
            // $count=$mycart->join("sy_menuinfo ON sy_menuinfo.id = sy_shoppingcart.cart_menuid")->where("cart_uphone='%s'",$u_phone)->count();
            //判断是否有结果
         
            if($result){
                $this->assign("cart",$result);
                // dump($result);
                // $this->assign("count",$count);
                $this->display("Order/myorder");
            }else{
                $this->error("您还没有订单，请在菜谱或分类中选择您需要的菜品",U('Classifi/index'));
            }
        }else{
            //没有登录就提醒用户，要登录后才能查看我的订单
            $url=U("Login/index");
            $this->display("登录后才能查看自己的订单",$url);
        }
    }   

}
