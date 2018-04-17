<?php
namespace Admin\Controller;
use Think\Controller;
class MenusController extends PublicController{
   	public function index(){
        // $this->show('','utf-8');
        
        $this->page();
        $this->view();
       
    }

    public function add(){
    	
    	
        //icon-refresh:before{
        //获取小图标的类
        $icon = file_get_contents('Public/Admin/css/font-awesome.min.css');

        //匹配正则
        $reg = '/\.(icon-[\w\-]+):/';

        //查找全部
        preg_match_all($reg,$icon,$arr);

        $icons = $arr[1];

        //从提交的post里获取菜单的id
        $id = I('post.id');
        // 
        $pid = !empty($id)?$id:0;
        //查询菜单
        $this->menu = M('Menus')->where("`pid`=$pid")->select();
        //干掉所有标签
        // print_r($this->menu);die;

        $this->assign('icons',$icons);

        $this->view();

    }

    //提交数据
    public function addMenu(){
        //I接受表单post提交的数据
        $data = I('post.','');

        if(!empty($data['name'])&&!empty($data['pid'])&&!empty($data['en'])){

            if(!empty($data['c'])){
                //拼接后台菜单c和c子级的英文 
                $data['en'] = $data['c'].'/'.$data['en'];
            }
        }

        //实例化数据库对象
        $row = D('Menus')->add($data);

        if($row){
            $this->success('添加成功',U('add'),2);
        }else{
            $this->error('添加失败','add',2);
        }

    }

    public function ajax(){

        //从提交的post里获取菜单的id
        $id = I('post.id');
        // 
        $pid = !empty($id)?$id:0;
        //查询菜单
        $this->menu = M('Menus')->where("`pid`=$pid")->select();

        $this->ajaxReturn($this->menu);

    }

    public function order(){
          //接收JS光标离开后修改后的值
          $data = I('post.');
          //实例化数据库，修改
          $this->menu = M('Menus')->save($data);

          $this->ajaxReturn($this->menu);
       }

    public function page(){
        $User = D('menus'); // 实例化User对象
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->setConfig('prev','<i class="fa fa-angle-double-left"></i>');
        $Page->setConfig('next','<i class="fa fa-angle-double-right"></i>');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','尾页');

        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
         $this->assign('page',$show);// 赋值分页输出
     
    }




}