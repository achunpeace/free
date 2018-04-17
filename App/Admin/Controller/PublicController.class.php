<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
  public $bread=array();
    public function __construct(){
    	//引用父类构造
          parent::__construct();

          // //实例化权限类auth
          // $auth = new \Think\Auth;

          // //调用权限验证方法
          // //组装验证规则 Admin/cate/index
          // $rule = 'Admin/'.CONTROLLER_NAME.'/'.ACTION_NAME;
          // print_r($rule);die;
          // /*  参数1是验证规则
          //     参数2是要验证的用户id*/
          // if(!$auth->check($rule,3)){
          //     $this->error('您没有权限访问','',2);die;
          // }

          //当前访问的控制器
          $this->c = I('path.0');

          //当前访问的方法
          $this->a = I('path.0').'/'.I('path.1');

          // 获取菜单数据  并传递到页面
          $this->menus = $this->menusList();
          
          // 获取分类数据  并传递到页面
          $this->cates = $this->cateList();
          // print_r($this->cates);die;
          $this->attr = $this->attrList();

          $this->assign('bread',$this->bread);

    }

    //循环菜单的方法
    public function menusList($pid=1,$arr=array()){

    	//查询条件
    	$where = array('display'=>1,
                 	   'pid'=>$pid
                     );
    	//实例化菜单表，查询菜单数据
    	$list = M('Menus')->where($where)->order('`order` asc')->select();

    	foreach($list as $key => $value){

      //判断面包屑的
      if(strtolower($value['en'])==strtolower($this->c)||strtolower($value['en'])==strtolower($this->a)){
            $this->bread[] = $value;
          }

    		$arr['child'][] = $this->menusList($value['id'],$value);

    	}
    	return $arr;

    }

    //循环分类的方法
    public function cateList($pid=0,$arr=array()){

      //查询条件
      $where = array('pid'=>$pid
                     );
      //实例化菜单表，查询菜单数据
      $list = M('Cate')->where($where)->select();

      foreach($list as $key => $value){


        $arr['child'][] = $this->cateList($value['id'],$value);

      }
      return $arr;

    }

    public function attrList(){

        $id = I('get.cate_id');

        $where = array(
            'cate_id'=>$id
          );
        $list = M('Attr')->where($where)->select();
        // print_r($list);die;
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