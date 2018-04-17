<?php
namespace Home\Model;
use Think\Model\RelationModel;
class OrderDetailModel extends RelationModel{   
	


	protected $_link = array(         
	  		
			'goods' => array(    
				'mapping_type'  => self::BELONGS_TO, //定义主表(商品表也就是你操作的表)与副表(你要关联的表)的关系   
				'class_name'    => 'goods',   //要关联的副表名称
				'foreign_key'   => 'goods_id',  //关联的条件也就是外键  外键指的是主表存储副表的外键字段名 
				'as_fields'=>'id,name,shop_price'
			 	
			)
	);
}
?>