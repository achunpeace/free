<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends PublicController {

    public function order(){
        $car_id = I('post.car_id');
        $order['user_id']= 1;
        $order['date']=time();
        $order['order_num'] = time('Y-m-d').mt_rand(100000,999999);
         // print_r($order);die;
         if(!empty($car_id)){
            //返回添加的id
            $one = D('Order')->add($order);
            $data = array();
            if($one){
                foreach ($car_id as $k=>$val) {
                        // print_r($val);die;
                    $car_one = D('car')->where("id=$val")->find();
                    // print_r($car_one);die;
                    $data[$k]['goods_id'] = $car_one['goods_id'];
                    $data[$k]['goods_num'] = $car_one['number'];
                    $data[$k]['goods_pri'] = $car_one['all_price'];
                    $data[$k]['goods_desc'] = $car_one['spec_desc'];
                    $data[$k]['order_id'] = $one;
                    
                }
                //添加订单详情
                foreach ($data as $v) {
                    D('order_detail')->add($v);
                }
            }

        }
        $this->redirect('detail', array('id' => $one)); 
       
    }

    public function detail(){
            $one = I('get.id');
            $list = D('order_detail')->where("order_id=$one")->relation(true)->select();
            // print_r($list);die;
            $bian = D('order')->where("id=$one")->find();
            // print_r($bian);die;
            $this->assign('bian',$bian);
            $this->assign('list',$list);
            $this->view();
        }


}