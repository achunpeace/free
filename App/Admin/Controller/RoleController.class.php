<?php
namespace Admin\Controller;
use Think\Controller;
class RoleController extends PublicController{

   	public function index(){

        $Role = D('Role')->select();

        $this->assign('role',$Role);
        $this->view();

    }

    public function add(){

        $msg = D('Menus')->where("`pid`=1")->select();

        $rule = D('Rule')->select();


        $this->assign('msg',$msg);
        $this->assign('rule',$rule);
        $this->view();

    }

        //提交数据
    public function addRole(){


        //I接受表单post提交的数据
        $data = I('post.');
        
        $data['rules'] = implode(',',$data['rules']);
        $rows = D('Role')->add($data);
            if($rows){
                $this->success('添加成功',U('index'),1);
            }else{
                $this->error('添加失败','',1);
                }
        
    }

    public function edit(){
        $msg = D('Menus')->where("`pid`=1")->select();

        $rule = D('Rule')->select();

        $this->assign('msg',$msg);
        $this->assign('rule',$rule);

        $id = I('get.id');
        
        $one = D('Role')->where("`id`=$id")->find();


        $one['rules'] = explode(',',$one['rules']);

        $this->assign('one',$one);
        $this->view();
    }

    public function editData(){

        $id = I('get.id');

        $logo = D('Role')->where("`id`=$id")->find();
        if(!empty($_FILES)){
            //删除指定路径下的文件
            unlink(__APP__.'/Public/Uploads/'.$logo['logo']);
        }
        $_POST['logo'] = $this->upload('logo');
      

        //I接受表单post提交的数据
        $data = I('post.');
        $data['id'] = $id;

 
        $rows = D('Role')->save($data);
  
        
        if($rows){
            $this->success('修改成功',U('index'),1);
        }else{
            $this->error('修改失败','',1);
            }
    }


    public function delete(){
        $id=I('get.id');
        $logo = D('Role')->where("`id`=$id")->find();
        
        
        if(!empty($id)){

        //删除指定路径下的文件
        unlink(__APP__.'/Public/Uploads/'.$logo['logo']);
         
        $row = D('Role')->where("`id`=$id")->delete(); 

        if($row){
            $this->success('删除成功',U('index'),2);
        }else{
            $this->error('删除失败','index',2);
        }
    }

}
}