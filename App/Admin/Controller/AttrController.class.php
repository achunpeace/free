<?php
namespace Admin\Controller;
use Think\Controller;
class AttrController extends PublicController{

    public $cate_id;
    //用于接收传递cate_id
    public function __construct(){
        parent::__construct();

        //接收传入的分类id
        $this->cate_id = I('get.cate_id','');
        //如果id为空 则返回上一页
        if(!$this->cate_id){
            echo '<script>history.go(-1);</script>';die;
        }
        //将分类id传递到页面
        $this->assign('cate_id',$this->cate_id);

    }

   	public function index(){

        $this->view();

    }

    public function add(){
    
        //干掉所有标签
        // print_r($this->menu);die;

        $this->view();

    }

        //提交数据
    // public function addAttr(){
    //     $id = I('get.cate_id');
    //     //I接受表单post提交的数据
    //     $data = I('post.');
    //     $data['cate_id'] = $id;

    //     $rows = D('attr')->add($data);
    //         if($rows){
    //             $this->success('添加成功',U('index',"cate_id=$this->cate_id"),1);
    //         }else{
    //             $this->error('添加失败','',1);
    //             }
        
    // }

    public function edit(){
        $id = I('get.id');

        $one = D('attr')->where("`id`=$id")->find();
        
        $attr = D('attr_value')->where("`attr_id`=$id")->select();
        // print_r($attr);die;
        $arr = '';
        foreach ($attr as $value) {
            $arr[] = $value['attr_value'];
        }

        $arr = implode('-',$arr);
        
        $this->assign('arr',$arr);
        $this->assign('one',$one);
        $this->view();
    }

    public function addData(){
        $cate_id = I('get.cate_id');

        $id = I('get.id'); 
        //I接受表单post提交的数据
        $data = I('post.');
        $data['attr_id'] = $id;
        // print_r($data);die;
        $data['cate_id'] = $cate_id;

        $color = explode('-',$data['attr_value']);

        foreach ($color as $key => $value) {
            $ki[$key]['attr_value'] = $value;
            $ki[$key]['attr_id'] = $id;
            $ki[$key]['cate_id'] = $cate_id;
        }
        // print_r($ki);die;

        foreach ($ki as $value) {
            $rows = D('attr_value')->add($value);
        }
            
            if($rows>0){
                $this->success('添加成功',U('index',"cate_id=$this->cate_id"),1);
            }else{
                $this->error('添加失败','',1);
                }
    }


    public function delete(){
        $id=I('get.id');
        if(!empty($id)){
        $row = D('Attr')->where("`id`=$id")->delete(); 
        if($row){
            $this->success('删除成功',U('index'),2);
        }else{
            $this->error('删除失败','index',2);
        }
    }

}
}