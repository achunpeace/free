<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends PublicController{
   	public function index(){
        $list = D('goods')->relation(true)->select();
        $this->assign('list',$list);
        $this->view();

    }

    public function add(){
        S('spec',null);
        // print_r(S('spec'));die;
        $cate = D('cate')->where("`pid`=0")->select();
        // print_r($attr);die;
        $brand = D('brand')->select();
        $this->assign('cate',$cate);
        $this->assign('brand',$brand);
        $this->view();

    }

    //提交数据
    public function addGoods(){
        // print_r($_POST);die;
        // $num = $_POST['num'];
        unset($_POST['num']);
        //I接受表单post提交的数据
        $data = I('post.');
        // print_r($data);die;

        if(!empty($data['name'])){
            $row = D('Goods')->add($data);

            $cache=S('spec');

            foreach ($cache as $key => $value) {
                $value['spec_rule']=$row.$value['spec_rule'];
                $value['goods_id'] = $row;
                // print_r($value);die;
                $arr[]= D('Spec')->add($value);
            }

            if($row>0&&count($arr)>0){
                $this->success('添加成功',U('add'),1);
            }else{
                $this->error('添加失败','add',1);
                }
        }

    }



    public function ajax(){
        $cate_id = I('post.cate_id');
        // print_r($cate_id);die;
        $data = D('attr')->where("`cate_id`=$cate_id")->select();
        // print_r($data);die;
        // $attr_value = array();
        foreach ($data as $key => $value) {
            $where['attr_id']=$value['id'];
            $attr_value[] = D('attr_value')->where($where)->select();
        }
        // print_r($attr_value);die;
        $goods_spec=array(
                'attr' =>$data,
                'spec' =>$attr_value
            );
        // print_r($goods_spec);die;
              
        $this->ajaxReturn($goods_spec);
    }

    //缓存商品数据,缓存描述，规格，价格，数量
    public function data_cache(){
         // S('spec',null);die;
        // 这步是清除缓存数据
        //获取查询缓存内容
        $cache = S('spec');
        //判断缓存是否为空
        if(empty($cache)){
            //组装规格数组,下标为[0-1-7-10-14]
            $data[$_POST['spec_rule']] = I('post.');
            //缓存规格数据--手册查找缓存
            S('spec',$data);
        }else{
            //先获取缓存中的数据
            $data = S('spec');
            // print_r($data);die;
            
            $post = I('post.');
            if($data['spec_rule']==$post['spec_rule']){
                //追加新数据
                $data[$_POST['spec_rule']] = $post;
                //新数据替换旧数据
                S('spec',$data);
            }else{
                //追加新数据
                $data[$_POST['spec_rule']] = $post;
                //新数据替换旧数据
                S('spec',$data);
            }
            
        }
      
        //返回缓存中的数据
        $this->ajaxReturn(S('spec'));

    }

    public function del_spec(){
        //获取规格
       $rule = I('get.rule');
       //获取缓存数据
       $data = S('spec');
       // print_r($data);
       //清除缓存是该值的数据
       unset($data[$rule]);
       //更新缓存
       $data = S('spec',$data);

       // print_r($data);die;


    }

    public function out(){
        //查询商品表
        $goods=D('goods')->select();
        //引入PHPExcel核心类库
        Vendor('PHPExcel.PHPExcel');
        //实例化PHPExcel这个类
        $excel = new \PHPExcel();
        // var_dump($excel);die;
            $excel -> getActiveSheet()->setCellValue('A1','商品名称');
            $excel -> getActiveSheet()->setCellValue('B1','品牌');
            $excel -> getActiveSheet()->setCellValue('C1','分类');
            $excel -> getActiveSheet()->setCellValue('D1','市场价格');
            $excel -> getActiveSheet()->setCellValue('E1','本店价');
            $i=2;
        foreach ($goods as $v) {
            //获取sheet表然后给表中的单元格设置值
            //setCellValue(单元格，值)
            $excel -> getActiveSheet()->setCellValue('A'.$i,$v['name']);
            $excel -> getActiveSheet()->setCellValue('B'.$i,$v['brand']['name']);
            $excel -> getActiveSheet()->setCellValue('C'.$i,$v['cate']['name']);
            $excel -> getActiveSheet()->setCellValue('D'.$i,$v['mk_price']);
            $excel -> getActiveSheet()->setCellValue('E'.$i,$v['shop_price']);
            $i++;
        }
        //创建表
        $excel->createSheet();
        $factory = \PHPExcel_IOFactory::createWriter($excel,'Excel2007');
        //修改头部的文件信息类型为excel
        $filename = 'goods.xlsx';
        header('Content-Type: application/vnd.ms-excel; charset=utf-8');
        header('Content-Disposition: attachment;filename='.$filename);
        header('Cache-Control: max-age=0');
        //输出保存数据
        $factory=save('php://output');
        
    }

    //导入
    public function put(){
        $upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     31457283145728 ;// 设置附件上传大小    
        $upload->exts      =     array('xlsx', 'xlx','zip');// 设置附件上传类型    
        $upload->rootPath  =      './Public/Uploads/'; // 设置附件上传目录  
        $upload->savePath  =        $this->c.'/';//文件上传的保存路径
        // 上传文件     
        $info   =   $upload->uploadOne($_FILES['file']);   
        // print_r($info);die; 
        if(!$info) {
            // 上传错误提示错误信息        
            $this->error($upload->getError());    
        }else{        
           $excel_path = './Public/Uploads/'.$info['savepath'].$info['savename'];
        }
        //将上传的压缩文件进行解压
        $zip = new \ZipArchive();
        if(!$zip->open($excel_path)){
            $this->error('文件解压失败');die;
        }
        //该参数指的是你要把解压的文件存在那个路径下
        $zip->extractTo('./Public/Uploads/'.$info['savepath']);
        //关闭解压
        $zip->close();
        //引入PHPExcel核心类库
        Vendor('PHPExcel.PHPExcel');
        //实例化写入类格式2007
       $reader = new \PHPExcel_Reader_Excel2007();
       //组装Excel表的文件路径
       $excel_path= './Public/Uploads/'.$info['savepath'].'goods.xlsx';
       //加载你要写入的excel文件
       //参数是加载的文件路径
       $excel = $reader->load($excel_path);
       //获取你要操作的sheet表
       $sheet = $excel->getSheet(0);
       //获取sheet表的总行数
       $rows = $sheet->getHighestRow();
       // //循环获取sheet表中的数据逐一输入数据库
       for($i=2;$i<$rows;$i++){
            $goods['name'] = (string)$sheet->getCellbyColumnAndRow(0,$i)->getValue();
            $b_name = $sheet->getCellbyColumnAndRow(1,$i)->getValue();
            $goods['brand'] = D('brand')->getByname($b_name);
            $goods['brand_id'] = $goods['brand']['id'];

            $c_name = $sheet->getCellbyColumnAndRow(2,$i)->getValue();

            $goods['cate'] = D('cate')->getByname($c_name);
            $goods['cate_id'] = $goods['cate']['id'];
            $goods['mk_price'] = (string)$sheet->getCellbyColumnAndRow(3,$i)->getValue();
            $goods['shop_price'] = (string)$sheet->getCellbyColumnAndRow(4,$i)->getValue();
            $img = (string)$sheet->getCellbyColumnAndRow(5,$i)->getValue();//图片
            //解压的图片存储路径
            $zip_img_path = './Public/Uploads/'.$info['savepath'].$img;
            //截取图片后缀
            $type = substr($img,strrpos(',',$img));

            //生成新图片文件名
            $img_name = date('ymdhis').mt_rand(1000,9999).$type;
            //组装新图片路径
            $goods['img'] = './Public/Uploads/'.$info['savepath'].$img_name;
            //rename文件移动并重名
            rename($zip_img_path,$goods['img']);
            D('goods')->add($goods);
       }
}
}