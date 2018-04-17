<?php
namespace Admin\Controller;
use Think\Controller;
class RuleController extends PublicController{

   	public function index(){

        $Rule = D('Rule')->select();

        $this->assign('rule',$Rule);
        $this->view();

    }

    public function add(){

        $this->view();

    }

        //提交数据
    public function addRule(){

        //I接受表单post提交的数据
        $data = I('post.');

        // print_r($data);die;
        $rows = D('Rule')->add($data);
            if($rows){
                $this->success('添加成功',U('index'),1);
            }else{
                $this->error('添加失败','',1);
                }
        
    }

    public function edit(){
        $id = I('get.id');
        $one = D('Rule')->where("`id`=$id")->find();
        $this->assign('one',$one);
        $this->view();
    }

    public function editData(){

        $id = I('get.id');

        $logo = D('Rule')->where("`id`=$id")->find();
        if(!empty($_FILES)){
            //删除指定路径下的文件
            unlink(__APP__.'/Public/Uploads/'.$logo['logo']);
        }
        $_POST['logo'] = $this->upload('logo');
      

        //I接受表单post提交的数据
        $data = I('post.');
        $data['id'] = $id;

 
        $rows = D('Rule')->save($data);
  
        
        if($rows){
            $this->success('修改成功',U('index'),1);
        }else{
            $this->error('修改失败','',1);
            }
    }


    public function delete(){
        $id=I('get.id');
        $logo = D('Rule')->where("`id`=$id")->find();
        
        
        if(!empty($id)){

        //删除指定路径下的文件
        unlink(__APP__.'/Public/Uploads/'.$logo['logo']);
         
        $row = D('Rule')->where("`id`=$id")->delete(); 

        if($row){
            $this->success('删除成功',U('index'),2);
        }else{
            $this->error('删除失败','index',2);
        }
    }

}
}