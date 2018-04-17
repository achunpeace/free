<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends PublicController{
    
   	public function index(){

        $this->view();

    }

    public function add(){

        //从提交的post里获取菜单的id
        $id = I('post.id');
        // 
        $pid = !empty($id)?$id:0;
        //查询菜单
        $this->cate = M('Cate')->where("`pid`=$pid")->select();
        //干掉所有标签
        // print_r($this->menu);die;

        $this->view();

    }

    //提交数据
    public function addCate(){
        //I接受表单post提交的数据
        $data = I('post.');

        if(!empty($data['name'])&&isset($data['pid'])){
            //分类转数组
            $namearr = explode('/',$data['name']);

            //因为pid一样，pid另存一个新的数组
            $add['pid'] = $data['pid'];
            //添加成功的条数
            $num = 0;
            //有没有重名的分类名
            $error = '';
            foreach ($namearr as $value){
                //将获取到的分类名赋值给分类表name一样的字段
                $add['name'] = $value;
                //使用验证
                if(D('Cate')->create($add)){
                    //实例化数据库执行添加语句
                    $rows = D('Cate')->add($add);
                    $num++;
                }else{
                    //拼接可能重复的名称
                    $error.=$value.',';
                }
               
            }
            //如果分类名存在
            if($error){
                //XX已存在
                $error.='已存在';
                }
            if($num>0){
                $this->success('添加成功'.$num.'条数据'.$error,U('add'),1);
            }else{
                $this->error('添加失败'.$error,'add',1);
                }
        }
    }

    public function ajax(){

        //从提交的get里获取分类的id
        $id = I('post.id');
        // 
        $pid = !empty($id)?$id:0;
        //查询分类
        $this->cate = M('Cate')->where("`pid`=$pid")->select();
        //返回数据，ajax可以不用写json
        $this->ajaxReturn($this->cate);

    }

    public function ajaxEdit(){

        //从提交的get里获取分类的id
        $id = I('post.id');
        // 
        $pid = !empty($id)?$id:0;
        //查询分类
        $this->cate = M('Cate')->where("`pid`=$pid")->select();
        //返回数据，ajax可以不用写json
        $this->ajaxReturn($this->cate);

    }


    public function edit(){
        //获取编辑数据的id
        $id = I('get.id');
        //查询该数据的信息
        $this->one = M('Cate')->where("`id`=$id")->find();
        //如果没有该数据就返回上一页
        if(!$this->one){
            echo '<script>history.go(-1)</script>';die;
        }
        
        $arr = array();
        //声明一个数组接收自身
        $father = $this->one;
        // print_r($father);exit;
        //循环查找该数据的父级
        do{ 
            //父级的id，也是同级的pid
            $pid = $father['pid']*1;

            //获取同级数据,用id当下标可以倒叙输出数组
            $arr[$father['id']] = M('Cate')->where("`pid`=$pid")->select();
            //获取父级
            $father = M('Cate')->where("`id`=$pid")->find();

        }while($pid!=0);
        //倒叙输出数组
        $arr = array_reverse($arr,true);

        $this->assign('one',$this->one);

        $this->assign('arr',$arr);

        $this->view();
    } 

    public function editData(){

        $id = I('get.id');
        //接收新修改的数据
        $data = I('post.');
        //增加一个id下标
        $data['id'] = $id;

        //实例化数据库执行添加语句
        $rows = D('Cate')->save($data);

        if($rows){

          $this->redirect('index',array('cate_id'=>$this->cate_id));

            }
    }

    public function delete(){
        $id=I('get.id');
        
        $row = D('Cate')->where("`id`=$id")->delete();

        if($row){

            $this->success('删除成功',U('index'),1);
        }else{

            $this->error('删除失败','index',1);
        }
    

    }


}