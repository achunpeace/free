<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class CateModel extends RelationModel{   
	protected $_validate = array(

	    array('name','','',0,'unique',1), 
	    // 在新增的时候验证name字段是否唯一
	       );


	// protected $_link = array(         
	//   		//归属关系配置
	// 		'cate' => array(    
	// 			'mapping_type'  => self::HAS_MANY, //定义主表(商品表也就是你操作的表)与副表(你要关联的表)的关系   
	// 			'class_name'    => 'attr',   //要关联的副表名称
	// 			'foreign_key'   => 'cate_id',  //关联的条件也就是外键  外键指的是主表存储副表的外键字段名 
	// 		 	'as_fields'=>'cate_id,attr_name,attr_value'
	// 		)
	// );
}
?>