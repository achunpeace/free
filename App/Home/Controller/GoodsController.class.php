<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends PublicController {

	

    public function index(){
		$list = D('Goods')->select();
        // $attr = D('Attr')->select();
    	// print_r($list);die;
    	$this->assign('list',$list);
        $this->view();
    }



    public function goods_desc(){
        $goods_id = I('get.goods_id');
        // print_r($goods_id);die;

    	$list = D('Goods')->where("`id`=$goods_id")->find();
        // print_r($list);die;
        $cate_id = $list['cate_id'];

        $attr = D('Attr')->where("`cate_id`=$cate_id")->select();
        // print_r($attr);die;
        
        $arr = D('Attr_value')->select();

        $this->assign('arr',$arr);
        $this->assign('attr',$attr);
    	$this->assign('list',$list);

        $this->view();
    }

    public function goods_price(){
        // print_r($_POST);DIE;
        $spec_rule = I('post.spec_rule');
        // print_r($spec_rule);die;


        $desc = D('spec')->where("`spec_rule`='$spec_rule'")->find();

       /* print_r($desc);die;*/


        $this->ajaxReturn($desc);

    }


    public function add_car(){
        // print_r($_POST);die;

        $spec_rule = I('post.spec_rule');

        $desc = D('spec')->where("`spec_rule`='$spec_rule'")->find();
        // print_r($desc);die;

        $_POST['spec_desc'] = $desc['spec_desc'];
        // print_r($_POST);die;
        if(IS_POST){
            //现查询购物车是否有该商品
            $data = D('Car')->getByspec_rule($spec_rule);

            if(empty($data)){
                $_POST['user_id'] = 1;
                $row = D('car')->add($_POST);
            }else{
                $number = I('post.number');
                $map['spec_rule']=$spec_rule;
                //修改对应字段的数值
                D('Car')->where($map)->setInc('number',$number);
            }
            
        }

        $this->ajaxReturn($row);


    }

    public function car(){

        $car_list = D('car')->where("`user_id`=1")->relation(true)->select();
        // print_r($car_list);die;

        $this->assign('car_list',$car_list);
        
        $this->view();
    }

}