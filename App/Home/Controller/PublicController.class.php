<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {

    public function __construct(){
    	//引用父类构造
          parent::__construct();

          //当前访问的控制器
          $this->c = I('path.0');

          //当前访问的方法
          $this->a = I('path.0').'/'.I('path.1');

          // 获取菜单数据  并传递到页面
          $this->menus = $this->menusList();
          // print_r($this->menus);die;

    }

    //循环菜单的方法
    public function menusList(){

    	//查询条件
    	$where = array('display'=>1,
                 	   
                     'is_home'=>1
                     );

    	//实例化菜单表，查询菜单数据
    	$list = M('Menus')->where($where)->order('`order` asc')->select();

    	
    	return $list;

    }



    //视图加载
    public function View($view=''){

        $this->display('./header');

        $this->display($view);

    }


    public function upload($name){    
        $upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     3145728 ;// 设置附件上传大小    
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
        $upload->rootPath  =      './Public/Uploads/'; // 设置附件上传目录  
        $upload->savePath  =        $this->c.'/';//文件上传的保存路径
        // 上传文件     
        $info   =   $upload->uploadOne($_FILES[$name]);    
        if(!$info) {
            // 上传错误提示错误信息        
            $this->error($upload->getError());    
        }else{        
            return $info['savepath'].$info['savename'];
         }
    }

}