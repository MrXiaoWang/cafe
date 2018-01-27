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
            $result=$mycart->join("sy_menuinfo ON sy_menuinfo.id = sy_shoppingcart.cart_menuid")->where("cart_uphone='%s'",$u_phone)->select();
            //查询出某个用户的所有订单的长度
            $count=$mycart->join("sy_menuinfo ON sy_menuinfo.id = sy_shoppingcart.cart_menuid")->where("cart_uphone='%s'",$u_phone)->count();
            //判断是否有结果
            if($result){
                $this->assign("cart",$result);
                $this->assign("count",$count);
                $this->display("Order/order");
            }else{
                $this->error("您还没有订单，请在菜谱或分类中选择您需要的菜品");
            }
        }else{
            //没有登录就提醒用户，要登录后才能查看我的订单
            $url=U("Login/index");
            $this->display("登录后才能查看自己的订单",$url);
        }
    }
    
    //添加某个菜品到我的购物车
    public function addOrder(){
        $_SESSION["u_phone"] = "13896324414";
        //判断是否登录
        if($_SESSION){
            //判断是否存在post提交
            if($_POST){
                //获取页面传过来的菜品id
                $cart["cart_menuid"]=$_POST["menu_id"];
                //设置向购物车表插入的其他数据的值
                $cart["cart_uphone"]=$_SESSION["u_phone"];
                $cart["cart_isjiesuan"]=0;
                $cart["cart_number"]=1;
                //创建购物车表模型
                $order=M("shoppingcart");
                //根据这个传过来的id来查询购物车表中是否存在这个id的数据，如果存在，就提醒用户这个菜已经点了
                $rone=$order->where("cart_menuid=%d and cart_uphone='%s'",array($cart["cart_menuid"],$cart["cart_uphone"]))->find();
                //判断
                if($rone){
                    $url=U("Order/index");
                    $this->error("该菜品已经点了，可以在下方订单中修改菜品数量",$url);

                }else{
                    //调用插入方法
                    $result=$order->data($cart)->add();
                    //判断结果是否加入成功
                    if($result){
                        $url=U("Order/index");
                        $this->success("添加成功",$url);
                    }else{
                        //提示加入失败
                        $this->error("加入失败，请重新选择");
                    }
                }
            }else{
                $this->error("加载失败，请重新选择");
            }
        }else{
            //没有登录就提醒用户，要登录后才能添加购物车
            $url=U("Login/index");
            $this->display("登录后才能添加到购物车",$url);
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
}