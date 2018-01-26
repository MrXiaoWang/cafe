<?php
namespace Admin\Controller;
use Think\Controller;
class StatementController extends CheckController {
	/*查询*/
       public function Statement(){
         //创建新模板
        $dz=M("order");

        // $sql="select sum(menuinfo_afterdis) from sy_order where('DATE_SUB(CURDATE(), INTERVAL 1 MONTH) <= date(from_unixtime(o_time))')";
        /*查询一个月的盈利额*/
        $count=$dz->where('DATE_SUB(CURDATE(), INTERVAL 1 MONTH) >= date(from_unixtime(o_time)) and o_isover = 1')->order('o_time')->sum('menuinfo_afterdis');
        /*查询月份*/
        $time = $dz->where('DATE_SUB(CURDATE(), INTERVAL 1 MONTH) >= date(from_unixtime(o_time)) and o_isover = 1')->order('o_time desc')->getField('o_time');

        $orderecord = M('baobiao');

        $orderecord->create();
        // 添加月份
        $orderecord->y_time = $time;
        // 添加盈利额
        $orderecord->y_earnings = $count;

    
        if($orderecord->where('y_time=%d',$time)->select()){
            // 没有数据执行下一步
        }else{
        /*如果没有添加一条数据*/
            if($orderecord->add()){
                // 添加成功
                echo "1";
            }else{
                // 添加失败
                echo "2";
            }
        }
        //查询月份
        $time= $orderecord ->order('y_time asc')->getField("y_time",true);
        // 查询盈利额
        $y_earnings = $orderecord ->getField("y_earnings",true);
        $this->assign("time",json_encode($time));
        $this->assign("list",json_encode($y_earnings));
        //分页显示输出
        $this->display(); 
       }
        



}