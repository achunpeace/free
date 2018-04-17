/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-05-04 19:14:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for xlr_ad
-- ----------------------------
DROP TABLE IF EXISTS `xlr_ad`;
CREATE TABLE `xlr_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '广告表id',
  `adPosition` varchar(50) NOT NULL COMMENT '广告位置',
  `adImgID` varchar(100) NOT NULL COMMENT '广告图id',
  `goodsID` int(255) unsigned NOT NULL COMMENT '商品id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_ad
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_address
-- ----------------------------
DROP TABLE IF EXISTS `xlr_address`;
CREATE TABLE `xlr_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '地址id',
  `userID` int(255) unsigned NOT NULL COMMENT '用户id',
  `province` varchar(20) NOT NULL COMMENT '用户所在省份',
  `city` varchar(50) NOT NULL COMMENT '用户所在城市',
  `address` char(6) NOT NULL COMMENT '用户邮编',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_address
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_adimg
-- ----------------------------
DROP TABLE IF EXISTS `xlr_adimg`;
CREATE TABLE `xlr_adimg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '广告图id',
  `adImg` varchar(150) NOT NULL COMMENT '广告原图路径',
  `adThumb` varchar(150) NOT NULL COMMENT '缩略图路径',
  `adWater` varchar(150) NOT NULL COMMENT '水印图路径',
  `goodsID` int(255) unsigned NOT NULL COMMENT '商品id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_adimg
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_admin
-- ----------------------------
DROP TABLE IF EXISTS `xlr_admin`;
CREATE TABLE `xlr_admin` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '管理员名字',
  `pass` varchar(50) NOT NULL COMMENT '管理员密码',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '管理员性别',
  `adminType` int(30) unsigned NOT NULL COMMENT '管理员类型,权限',
  `adminImg` varchar(255) NOT NULL COMMENT '管理员头像',
  `adminThumb` varchar(255) NOT NULL COMMENT '缩略图路径',
  `adminDescript` varchar(255) NOT NULL COMMENT '管理员描述',
  `adminCheck` tinyint(1) unsigned NOT NULL COMMENT '管理员是否审核',
  `adminVisitCount` int(255) unsigned NOT NULL COMMENT '管理员访问次数',
  `adminLastVisitTime` datetime NOT NULL COMMENT '管理员最后访问时间',
  `adminLastVisitIP` varchar(20) NOT NULL COMMENT '管理员最后访问IP',
  `adminCreateTime` datetime NOT NULL COMMENT '管理员最后录入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_admin
-- ----------------------------
INSERT INTO `xlr_admin` VALUES ('3', '', '', '1', '0', '', '', '', '0', '0', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for xlr_attr
-- ----------------------------
DROP TABLE IF EXISTS `xlr_attr`;
CREATE TABLE `xlr_attr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '属性名id',
  `cate_id` int(100) unsigned NOT NULL COMMENT '商品类型id',
  `attr_name` varchar(30) NOT NULL COMMENT '商品类型名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_attr
-- ----------------------------
INSERT INTO `xlr_attr` VALUES ('1', '19', '颜色');
INSERT INTO `xlr_attr` VALUES ('9', '19', '套餐');
INSERT INTO `xlr_attr` VALUES ('5', '19', '机身内存');
INSERT INTO `xlr_attr` VALUES ('6', '19', '运行内存');
INSERT INTO `xlr_attr` VALUES ('11', '1', '颜色');
INSERT INTO `xlr_attr` VALUES ('12', '1', '套餐');
INSERT INTO `xlr_attr` VALUES ('13', '1', '型号');

-- ----------------------------
-- Table structure for xlr_attr_value
-- ----------------------------
DROP TABLE IF EXISTS `xlr_attr_value`;
CREATE TABLE `xlr_attr_value` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cate⁯_id` int(100) unsigned NOT NULL,
  `attr_id` int(100) unsigned NOT NULL,
  `attr_value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_attr_value
-- ----------------------------
INSERT INTO `xlr_attr_value` VALUES ('1', '19', '1', '红色');
INSERT INTO `xlr_attr_value` VALUES ('2', '19', '1', '黄色');
INSERT INTO `xlr_attr_value` VALUES ('3', '19', '1', '白色');
INSERT INTO `xlr_attr_value` VALUES ('4', '19', '1', '银色');
INSERT INTO `xlr_attr_value` VALUES ('5', '19', '1', '绿色');
INSERT INTO `xlr_attr_value` VALUES ('6', '19', '1', '黑色');
INSERT INTO `xlr_attr_value` VALUES ('7', '19', '9', '套餐一');
INSERT INTO `xlr_attr_value` VALUES ('8', '19', '9', '套餐二');
INSERT INTO `xlr_attr_value` VALUES ('9', '19', '9', '套餐三');
INSERT INTO `xlr_attr_value` VALUES ('10', '19', '5', '16G');
INSERT INTO `xlr_attr_value` VALUES ('11', '19', '5', '32G');
INSERT INTO `xlr_attr_value` VALUES ('12', '19', '5', '64G');
INSERT INTO `xlr_attr_value` VALUES ('13', '19', '5', '128G');
INSERT INTO `xlr_attr_value` VALUES ('14', '19', '6', '1G');
INSERT INTO `xlr_attr_value` VALUES ('15', '19', '6', '2G');
INSERT INTO `xlr_attr_value` VALUES ('16', '19', '6', '3G');
INSERT INTO `xlr_attr_value` VALUES ('17', '19', '6', '4G');
INSERT INTO `xlr_attr_value` VALUES ('18', '1', '11', '翠绿');
INSERT INTO `xlr_attr_value` VALUES ('19', '1', '11', '黑色');
INSERT INTO `xlr_attr_value` VALUES ('20', '1', '11', '银色');
INSERT INTO `xlr_attr_value` VALUES ('21', '1', '11', '朱砂红');
INSERT INTO `xlr_attr_value` VALUES ('22', '1', '11', '波尔多红');
INSERT INTO `xlr_attr_value` VALUES ('23', '1', '11', '柠檬黄');
INSERT INTO `xlr_attr_value` VALUES ('24', '1', '12', '官方标配');
INSERT INTO `xlr_attr_value` VALUES ('25', '1', '12', '套餐一');
INSERT INTO `xlr_attr_value` VALUES ('26', '1', '13', '16GB NW-A35');
INSERT INTO `xlr_attr_value` VALUES ('27', '1', '13', '16GB NW-A35HN');

-- ----------------------------
-- Table structure for xlr_brand
-- ----------------------------
DROP TABLE IF EXISTS `xlr_brand`;
CREATE TABLE `xlr_brand` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品品牌id',
  `name` varchar(30) NOT NULL COMMENT '品牌名字',
  `logo` varchar(50) NOT NULL COMMENT '品牌logo',
  `goodsBrandDesc` varchar(100) NOT NULL COMMENT '品牌地址',
  `url` varchar(50) NOT NULL COMMENT '品牌网址',
  `goodsBrandOrder` int(150) unsigned NOT NULL COMMENT '品牌排序',
  `goodsBrandEn` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_brand
-- ----------------------------
INSERT INTO `xlr_brand` VALUES ('4', 'walkman', 'Brand/2017-04-24/58fd6bf97d53b.jpg', '', 'www.sony.com', '0', '');
INSERT INTO `xlr_brand` VALUES ('3', 'Sony', 'Brand/2017-04-24/58fd6acfdb124.jpg', '', 'www.sony.com', '0', '');
INSERT INTO `xlr_brand` VALUES ('5', '电视台', 'Brand/2017-04-24/58fd7128e35bf.jpg', '', 'www.cctv.com', '0', '');
INSERT INTO `xlr_brand` VALUES ('7', '菊花', 'Brand/2017-05-04/590b0c65b368a.jpg', '', 'www.baidu.com', '0', '');

-- ----------------------------
-- Table structure for xlr_car
-- ----------------------------
DROP TABLE IF EXISTS `xlr_car`;
CREATE TABLE `xlr_car` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT COMMENT '购物车id',
  `goods_id` int(255) unsigned NOT NULL COMMENT '商品id',
  `user_id` int(255) unsigned NOT NULL COMMENT '用户id',
  `number` int(255) unsigned NOT NULL COMMENT '商品购买数量',
  `all_price` int(100) unsigned NOT NULL,
  `spec_desc` varchar(100) NOT NULL,
  `spec_rule` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_car
-- ----------------------------
INSERT INTO `xlr_car` VALUES ('10', '2', '1', '2', '8998', '颜色:红色 套餐:套餐一 机身内存:16G 运行内存:1G ', '2_1_7_10_14');
INSERT INTO `xlr_car` VALUES ('11', '3', '1', '1', '1499', '颜色:翠绿 套餐:套餐一 型号:16GB NW-A35HN ', '3_18_25_27');

-- ----------------------------
-- Table structure for xlr_cate
-- ----------------------------
DROP TABLE IF EXISTS `xlr_cate`;
CREATE TABLE `xlr_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` int(100) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_cate
-- ----------------------------
INSERT INTO `xlr_cate` VALUES ('1', '数码', '0');
INSERT INTO `xlr_cate` VALUES ('2', '服装', '0');
INSERT INTO `xlr_cate` VALUES ('3', '家电', '0');
INSERT INTO `xlr_cate` VALUES ('4', '耳机', '1');
INSERT INTO `xlr_cate` VALUES ('5', '相机', '1');
INSERT INTO `xlr_cate` VALUES ('6', '单反', '1');
INSERT INTO `xlr_cate` VALUES ('7', 'walkman', '1');
INSERT INTO `xlr_cate` VALUES ('11', 'mp3', '1');
INSERT INTO `xlr_cate` VALUES ('13', '男装', '2');
INSERT INTO `xlr_cate` VALUES ('14', '女装', '2');
INSERT INTO `xlr_cate` VALUES ('15', '童装', '2');
INSERT INTO `xlr_cate` VALUES ('19', '手机', '0');
INSERT INTO `xlr_cate` VALUES ('17', '萝莉装', '2');
INSERT INTO `xlr_cate` VALUES ('18', 'OL装', '2');
INSERT INTO `xlr_cate` VALUES ('20', '正太装', '2');

-- ----------------------------
-- Table structure for xlr_collect
-- ----------------------------
DROP TABLE IF EXISTS `xlr_collect`;
CREATE TABLE `xlr_collect` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '收藏id',
  `userID` int(255) unsigned NOT NULL COMMENT '用户ID',
  `goodsID` int(255) unsigned NOT NULL COMMENT '商品id',
  `collectTime` datetime NOT NULL COMMENT '收藏记录时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_collect
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_comment
-- ----------------------------
DROP TABLE IF EXISTS `xlr_comment`;
CREATE TABLE `xlr_comment` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品评论ID',
  `goodsID` int(255) unsigned NOT NULL COMMENT '商品id',
  `userID` int(100) unsigned NOT NULL COMMENT '用户名ID',
  `commentContent` text NOT NULL COMMENT '评论内容',
  `commenCheck` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '评论是否审核',
  `commentTime` datetime NOT NULL COMMENT '评论时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_comment
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_goods
-- ----------------------------
DROP TABLE IF EXISTS `xlr_goods`;
CREATE TABLE `xlr_goods` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `name` varchar(50) NOT NULL COMMENT '商品名字',
  `cate_id` int(255) unsigned NOT NULL COMMENT '商品种类的id,关联表商品类型',
  `brand_id` int(10) unsigned NOT NULL COMMENT '品牌id',
  `is_you` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否包邮',
  `goods_desc` varchar(255) NOT NULL COMMENT '对商品的描述',
  `mk_price` int(15) unsigned NOT NULL COMMENT '商品价格',
  `shop_price` int(10) unsigned NOT NULL COMMENT '会员价',
  `sell_num` int(255) unsigned NOT NULL COMMENT '商品销售数量',
  `goodsStock` int(10) unsigned NOT NULL COMMENT '库存',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_goods
-- ----------------------------
INSERT INTO `xlr_goods` VALUES ('2', '索尼Xperia XZ（双4G）', '19', '3', '1', '&lt;p&gt;分辨率：1920*1080(FHD)&lt;/p&gt;&lt;ul class=&quot;parameter1 p-parameter-list list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;后置摄像头：2300万像素&lt;/p&gt;&lt;p&gt;前置摄像头：1300万像素&lt;/p&gt;&lt;/li&gt;&lt;li&', '4099', '4099', '0', '0');
INSERT INTO `xlr_goods` VALUES ('3', 'Sony/索尼 NW-A35HN Hifi 无损MP3音乐播放器降噪DSD ', '1', '3', '1', '&lt;p class=&quot;attr-list-hd tm-clear&quot;&gt;&lt;em&gt;产品参数：&lt;/em&gt;&lt;/p&gt;&lt;p&gt;\r\n				&lt;/p&gt;&lt;ul class=&quot; list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;证书编号：2016010805881939&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;证书状态：有效&lt;/p&gt;', '1299', '1199', '0', '0');
INSERT INTO `xlr_goods` VALUES ('4', '测试', '19', '5', '1', '&lt;p&gt;123123&lt;br/&gt;&lt;/p&gt;', '100', '100', '0', '0');
INSERT INTO `xlr_goods` VALUES ('5', '111', '19', '5', '1', '&lt;p&gt;11424235&lt;br/&gt;&lt;/p&gt;', '111', '11', '0', '0');

-- ----------------------------
-- Table structure for xlr_goodsattrvalue
-- ----------------------------
DROP TABLE IF EXISTS `xlr_goodsattrvalue`;
CREATE TABLE `xlr_goodsattrvalue` (
  `attrID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品属性ID',
  `goodsID` int(255) unsigned NOT NULL COMMENT '商品id',
  `attrValue` varchar(100) NOT NULL COMMENT '商品属性',
  `attrPrice` int(100) unsigned NOT NULL COMMENT '属性价格',
  PRIMARY KEY (`attrID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_goodsattrvalue
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_goodsbrand
-- ----------------------------
DROP TABLE IF EXISTS `xlr_goodsbrand`;
CREATE TABLE `xlr_goodsbrand` (
  `goodsBrandID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品品牌id',
  `goodsBrandName` varchar(30) NOT NULL COMMENT '品牌名字',
  `goodsBrandLogo` varchar(50) NOT NULL COMMENT '品牌logo',
  `goodsBrandDesc` varchar(100) NOT NULL COMMENT '品牌地址',
  `goodsBrandUrl` varchar(50) NOT NULL COMMENT '品牌网址',
  `goodsBrandOrder` int(150) unsigned NOT NULL COMMENT '品牌排序',
  `goodsBrandEn` varchar(255) NOT NULL,
  PRIMARY KEY (`goodsBrandID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_goodsbrand
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_goodsimg
-- ----------------------------
DROP TABLE IF EXISTS `xlr_goodsimg`;
CREATE TABLE `xlr_goodsimg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goodsImg` varchar(100) NOT NULL COMMENT '商品原图路径',
  `goodsThumb` varchar(100) NOT NULL COMMENT '缩略图路径',
  `goodsWater` varchar(100) NOT NULL COMMENT '水印图路径',
  `goodsID` int(255) unsigned NOT NULL COMMENT '商品id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_goodsimg
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_goodstype
-- ----------------------------
DROP TABLE IF EXISTS `xlr_goodstype`;
CREATE TABLE `xlr_goodstype` (
  `goodsTypeId` int(255) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品类型id',
  `goodsTypeName` varchar(50) NOT NULL COMMENT '商品种类名称',
  `pid` int(50) unsigned NOT NULL,
  `goodsDisplay` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示类型',
  PRIMARY KEY (`goodsTypeId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_goodstype
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_hot
-- ----------------------------
DROP TABLE IF EXISTS `xlr_hot`;
CREATE TABLE `xlr_hot` (
  `id` int(10) unsigned NOT NULL COMMENT '热搜id',
  `goodsID` int(255) unsigned NOT NULL COMMENT '热门商品id',
  `hotName` varchar(100) NOT NULL COMMENT '热搜名',
  `brandid` int(255) unsigned NOT NULL COMMENT '品牌id',
  `goodsTypeID` int(255) unsigned NOT NULL COMMENT '商品类型id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_hot
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_menus
-- ----------------------------
DROP TABLE IF EXISTS `xlr_menus`;
CREATE TABLE `xlr_menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '菜单名',
  `pid` int(4) unsigned NOT NULL,
  `en` varchar(20) NOT NULL COMMENT '菜单英文名',
  `url` varchar(100) NOT NULL COMMENT '菜单路径',
  `icon` varchar(50) NOT NULL COMMENT '小图标的类名',
  `display` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示菜单',
  `is_root` tinyint(1) unsigned NOT NULL COMMENT '是否有权限',
  `order` int(4) unsigned NOT NULL COMMENT '菜单排序',
  `is_home` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_menus
-- ----------------------------
INSERT INTO `xlr_menus` VALUES ('1', '后台菜单', '0', 'Admin', '', '', '0', '0', '0', '0');
INSERT INTO `xlr_menus` VALUES ('2', '前台菜单', '0', 'Home', '', '', '0', '0', '0', '0');
INSERT INTO `xlr_menus` VALUES ('3', '菜单管理', '1', 'Menus', '', 'icon-th-list', '1', '0', '2', '0');
INSERT INTO `xlr_menus` VALUES ('4', '菜单添加', '3', 'Menus/add', '', '', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('5', '菜单列表', '3', 'Menus/index', '', '', '1', '0', '0', '0');
INSERT INTO `xlr_menus` VALUES ('7', '系统设置', '1', 'System/system', '', '', '1', '0', '49', '0');
INSERT INTO `xlr_menus` VALUES ('8', '后台首页', '1', 'Index/index', '', 'icon-home', '1', '0', '1', '0');
INSERT INTO `xlr_menus` VALUES ('9', '分类管理', '1', 'Cate', '', 'icon-th', '1', '1', '3', '0');
INSERT INTO `xlr_menus` VALUES ('10', '分类添加', '9', 'Cate/add', '', '', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('11', '分类列表', '9', 'Cate/index', '', '', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('12', '品牌管理', '1', 'Brand', '', 'icon-truck', '1', '1', '4', '0');
INSERT INTO `xlr_menus` VALUES ('13', '品牌添加', '12', 'Brand/add', '', '', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('14', '品牌列表', '12', 'Brand/index', '', '', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('15', '角色管理', '1', 'Role', '', 'icon-group', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('16', '角色添加', '15', 'Role/add', '', '', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('17', '角色列表', '15', 'Role/index', '', '', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('18', '权限规则', '1', 'Rule', '', 'icon-bullhorn', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('19', '规则添加', '18', 'Rule/add', '', '', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('20', '规则列表', '18', 'Rule/index', '', '', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('21', '属性管理', '1', 'Prop', '', 'icon-cog', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('22', '属性添加', '21', 'Prop/add', '', '', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('23', '属性列表', '21', 'Prop/index', '', '', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('24', '商品管理', '1', 'Goods', '', 'icon-heart-empty', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('25', '商品添加', '24', 'Goods/add', '', '', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('26', '首页', '2', 'Index/index', '', 'icon-share-alt', '1', '1', '0', '1');
INSERT INTO `xlr_menus` VALUES ('27', '商品管理', '2', 'Goods', '', 'icon-picture', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('28', '商品列表', '27', 'Goods/index', '', '', '1', '1', '0', '1');
INSERT INTO `xlr_menus` VALUES ('29', '商品列表', '24', 'Goods/index', '', '', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('31', '用户管理', '1', 'User', '', 'icon-group', '1', '1', '0', '0');
INSERT INTO `xlr_menus` VALUES ('32', '用户添加', '31', 'User/add', '', '', '1', '1', '0', '0');

-- ----------------------------
-- Table structure for xlr_order
-- ----------------------------
DROP TABLE IF EXISTS `xlr_order`;
CREATE TABLE `xlr_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `order_num` varchar(100) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '支付状态 0未支付 1支付',
  `date` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_order
-- ----------------------------
INSERT INTO `xlr_order` VALUES ('52', '1', '1493810545943589', '0', '1493810545');

-- ----------------------------
-- Table structure for xlr_order_detail
-- ----------------------------
DROP TABLE IF EXISTS `xlr_order_detail`;
CREATE TABLE `xlr_order_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL COMMENT '订单id',
  `goods_id` int(255) unsigned NOT NULL COMMENT '商品id',
  `goods_num` int(100) unsigned NOT NULL COMMENT '商品数量',
  `goods_pri` int(255) unsigned NOT NULL COMMENT '商品单价',
  `goods_desc` varchar(255) NOT NULL,
  `send_huo` varchar(50) NOT NULL COMMENT '送货方式',
  `pay_type` varchar(50) NOT NULL COMMENT '付款方式',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_order_detail
-- ----------------------------
INSERT INTO `xlr_order_detail` VALUES ('41', '52', '2', '2', '8998', '颜色:红色 套餐:套餐一 机身内存:16G 运行内存:1G ', '', '');
INSERT INTO `xlr_order_detail` VALUES ('42', '52', '3', '1', '1499', '颜色:翠绿 套餐:套餐一 型号:16GB NW-A35HN ', '', '');

-- ----------------------------
-- Table structure for xlr_relation
-- ----------------------------
DROP TABLE IF EXISTS `xlr_relation`;
CREATE TABLE `xlr_relation` (
  `uid` mediumint(8) unsigned NOT NULL COMMENT '权限规则表,用户id',
  `rule_id` mediumint(8) unsigned NOT NULL COMMENT '角色id',
  UNIQUE KEY `uid_group_id` (`uid`,`rule_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`rule_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_relation
-- ----------------------------
INSERT INTO `xlr_relation` VALUES ('3', '3');

-- ----------------------------
-- Table structure for xlr_role
-- ----------------------------
DROP TABLE IF EXISTS `xlr_role`;
CREATE TABLE `xlr_role` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '角色表',
  `role_name` char(100) NOT NULL DEFAULT '' COMMENT 'vip角色名',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '' COMMENT '有哪些权限',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_role
-- ----------------------------
INSERT INTO `xlr_role` VALUES ('1', '初级管理员', '1', '');
INSERT INTO `xlr_role` VALUES ('3', '超级管理员', '1', '3,1,2,6,7');

-- ----------------------------
-- Table structure for xlr_root
-- ----------------------------
DROP TABLE IF EXISTS `xlr_root`;
CREATE TABLE `xlr_root` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '权限id',
  `admin_id` varchar(20) NOT NULL COMMENT '权限名字，管理员类型名字',
  `root_content` varchar(100) NOT NULL COMMENT '权限内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_root
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_rule
-- ----------------------------
DROP TABLE IF EXISTS `xlr_rule`;
CREATE TABLE `xlr_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '权限规则表',
  `url` char(80) NOT NULL DEFAULT '' COMMENT '权限能跳转的路径',
  `rule_name` char(20) NOT NULL DEFAULT '' COMMENT '权限规则名字',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `pid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`url`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_rule
-- ----------------------------
INSERT INTO `xlr_rule` VALUES ('1', 'Admin/Menus/index', '菜单列表', '1', '1', '', '3');
INSERT INTO `xlr_rule` VALUES ('2', 'Admin/Menus/add', '菜单添加', '1', '1', '', '3');
INSERT INTO `xlr_rule` VALUES ('3', 'Admin/Cate/add', '分类添加', '1', '1', '', '9');
INSERT INTO `xlr_rule` VALUES ('4', 'Admin/Cate/index', '分类列表', '1', '1', '', '9');
INSERT INTO `xlr_rule` VALUES ('5', 'Admin/Brand/add', '品牌添加', '1', '1', '', '12');
INSERT INTO `xlr_rule` VALUES ('6', 'Admin/Brand/index', '品牌列表', '1', '1', '', '12');
INSERT INTO `xlr_rule` VALUES ('7', 'Admin/Rule/index', '规则列表', '1', '1', '', '18');

-- ----------------------------
-- Table structure for xlr_sattr_name
-- ----------------------------
DROP TABLE IF EXISTS `xlr_sattr_name`;
CREATE TABLE `xlr_sattr_name` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '属性名id',
  `cate_id` int(100) unsigned NOT NULL COMMENT '商品类型id',
  `attr_name` varchar(30) NOT NULL COMMENT '商品类型名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_sattr_name
-- ----------------------------
INSERT INTO `xlr_sattr_name` VALUES ('1', '7', '颜色');
INSERT INTO `xlr_sattr_name` VALUES ('2', '7', '耳机');
INSERT INTO `xlr_sattr_name` VALUES ('3', '7', '样式');
INSERT INTO `xlr_sattr_name` VALUES ('4', '7', '型号');
INSERT INTO `xlr_sattr_name` VALUES ('5', '7', '版本');

-- ----------------------------
-- Table structure for xlr_sattr_value
-- ----------------------------
DROP TABLE IF EXISTS `xlr_sattr_value`;
CREATE TABLE `xlr_sattr_value` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品属性ID',
  `goods_id` int(255) unsigned NOT NULL COMMENT '商品id',
  `attr_value` varchar(100) NOT NULL COMMENT '商品属性',
  `attr_id` int(100) unsigned NOT NULL COMMENT '属性名id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_sattr_value
-- ----------------------------
INSERT INTO `xlr_sattr_value` VALUES ('1', '1', '红色', '1');
INSERT INTO `xlr_sattr_value` VALUES ('2', '1', '蓝色', '1');
INSERT INTO `xlr_sattr_value` VALUES ('3', '1', '黑色', '1');
INSERT INTO `xlr_sattr_value` VALUES ('4', '1', '银色', '1');
INSERT INTO `xlr_sattr_value` VALUES ('5', '1', '黄色', '1');
INSERT INTO `xlr_sattr_value` VALUES ('6', '1', '降噪耳塞', '2');
INSERT INTO `xlr_sattr_value` VALUES ('7', '1', '蓝牙头戴式', '2');
INSERT INTO `xlr_sattr_value` VALUES ('8', '1', '按键', '3');
INSERT INTO `xlr_sattr_value` VALUES ('9', '1', 'sonyA25', '4');
INSERT INTO `xlr_sattr_value` VALUES ('10', '1', '国行', '5');
INSERT INTO `xlr_sattr_value` VALUES ('11', '1', '日行', '5');

-- ----------------------------
-- Table structure for xlr_spec
-- ----------------------------
DROP TABLE IF EXISTS `xlr_spec`;
CREATE TABLE `xlr_spec` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) unsigned NOT NULL,
  `spec_desc` varchar(255) NOT NULL COMMENT '规格详情',
  `spec_rule` varchar(20) NOT NULL COMMENT '规则',
  `spec_price` decimal(10,2) NOT NULL COMMENT '规格的价钱',
  `num` int(10) unsigned NOT NULL COMMENT '库存',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_spec
-- ----------------------------
INSERT INTO `xlr_spec` VALUES ('1', '2', '颜色:红色 套餐:套餐一 机身内存:16G 运行内存:1G ', '2_1_7_10_14', '400.00', '100');
INSERT INTO `xlr_spec` VALUES ('2', '2', '颜色:银色 套餐:套餐三 机身内存:128G 运行内存:4G ', '2_4_9_13_17', '800.00', '100');
INSERT INTO `xlr_spec` VALUES ('3', '2', '颜色:白色 套餐:套餐三 机身内存:128G 运行内存:4G ', '2_3_9_13_17', '500.00', '100');
INSERT INTO `xlr_spec` VALUES ('4', '3', '颜色:翠绿 套餐:套餐一 型号:16GB NW-A35HN ', '3_18_25_27', '300.00', '100');
INSERT INTO `xlr_spec` VALUES ('5', '3', '颜色:朱砂红 套餐:套餐一 型号:16GB NW-A35HN ', '3_21_25_27', '400.00', '100');
INSERT INTO `xlr_spec` VALUES ('6', '4', '颜色:红色 套餐:套餐一 机身内存:16G 运行内存:1G ', '4-1-7-10-14', '48.00', '12');
INSERT INTO `xlr_spec` VALUES ('7', '5', '颜色:红色 套餐:套餐一 机身内存:16G 运行内存:1G ', '5-1-7-10-14', '4.00', '12');

-- ----------------------------
-- Table structure for xlr_system
-- ----------------------------
DROP TABLE IF EXISTS `xlr_system`;
CREATE TABLE `xlr_system` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `list_num` tinyint(2) unsigned NOT NULL COMMENT '每页显示几条',
  `page_num` tinyint(2) NOT NULL COMMENT '显示多少页',
  `is_vercode` tinyint(1) unsigned DEFAULT NULL COMMENT '是否显示验证码',
  `vercode_num` tinyint(1) unsigned DEFAULT NULL COMMENT '显示多少个验证码',
  `is_thumb` tinyint(1) unsigned NOT NULL COMMENT '是否显示缩略图',
  `thumb_w` int(3) unsigned NOT NULL COMMENT '缩略图的宽',
  `thumb_h` int(3) unsigned NOT NULL COMMENT '缩略图的高',
  `water_seat` varchar(2) CHARACTER SET utf8 NOT NULL COMMENT '水印图的位置',
  `water_word` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '水印图的文字',
  `file_size` int(200) unsigned NOT NULL COMMENT '文件上传大小',
  `file_root` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '文件根目录',
  `admin_id` int(11) unsigned NOT NULL COMMENT '用户名的id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of xlr_system
-- ----------------------------
INSERT INTO `xlr_system` VALUES ('1', '2', '3', '0', '4', '0', '0', '0', '', '', '0', '', '0');
INSERT INTO `xlr_system` VALUES ('2', '2', '3', '0', '5', '0', '0', '0', '', '', '0', '', '10');
INSERT INTO `xlr_system` VALUES ('3', '20', '3', '0', '4', '0', '0', '0', '', '', '0', '', '1');

-- ----------------------------
-- Table structure for xlr_user
-- ----------------------------
DROP TABLE IF EXISTS `xlr_user`;
CREATE TABLE `xlr_user` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '客户登录名称，唯一的',
  `pass` varchar(18) NOT NULL COMMENT '客户用户密码',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `userImg` varchar(255) NOT NULL COMMENT '头像原图路径',
  `userThumb` varchar(255) NOT NULL COMMENT '头像缩略图路径',
  `userRegDate` int(30) unsigned NOT NULL COMMENT '注册时间',
  `userAddID` int(100) unsigned NOT NULL COMMENT '地址id',
  `userVIP` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '用户是否是VIP',
  `userCheck` tinyint(1) unsigned NOT NULL COMMENT '该用户是否通过审核',
  `userPoint` int(255) unsigned NOT NULL COMMENT '用户商城积分',
  `userVisitCount` int(255) unsigned NOT NULL COMMENT '用户访问次数',
  `userLastVisitIP` varchar(20) NOT NULL COMMENT '用户最后访问的iP地址',
  `userLastVisitTime` int(20) unsigned NOT NULL COMMENT '用户访问时间',
  `visitIP` varchar(20) NOT NULL COMMENT '用户访问的ip地址,所有的',
  `visitTime` int(20) unsigned NOT NULL COMMENT '用户访问时间,所有的',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_user
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_user1
-- ----------------------------
DROP TABLE IF EXISTS `xlr_user1`;
CREATE TABLE `xlr_user1` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL COMMENT '客户登录名称，唯一的',
  `userPass` varchar(18) NOT NULL COMMENT '客户用户密码',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `userImg` varchar(255) NOT NULL COMMENT '头像原图路径',
  `userThumb` varchar(255) NOT NULL COMMENT '头像缩略图路径',
  `userRegDate` int(30) unsigned NOT NULL COMMENT '注册时间',
  `userAddID` int(100) unsigned NOT NULL COMMENT '地址id',
  `userVIP` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '用户是否是VIP',
  `userCheck` tinyint(1) unsigned NOT NULL COMMENT '该用户是否通过审核',
  `userPoint` int(255) unsigned NOT NULL COMMENT '用户商城积分',
  `userVisitCount` int(255) unsigned NOT NULL COMMENT '用户访问次数',
  `userLastVisitIP` varchar(20) NOT NULL COMMENT '用户最后访问的iP地址',
  `userLastVisitTime` int(20) unsigned NOT NULL COMMENT '用户访问时间',
  `visitIP` varchar(20) NOT NULL COMMENT '用户访问的ip地址,所有的',
  `visitTime` int(20) unsigned NOT NULL COMMENT '用户访问时间,所有的',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_user1
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_userinfo
-- ----------------------------
DROP TABLE IF EXISTS `xlr_userinfo`;
CREATE TABLE `xlr_userinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userID` int(10) unsigned NOT NULL COMMENT '用户iD',
  `trueName` varchar(20) NOT NULL COMMENT '用户姓名',
  `userSex` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '用户性别',
  `userAge` int(3) unsigned NOT NULL COMMENT '用户年龄',
  `birthday` varchar(255) DEFAULT NULL,
  `userPhone` varchar(11) NOT NULL COMMENT '用户电话',
  `userTelphone` varchar(20) NOT NULL COMMENT '用户座机',
  `passWen` varchar(255) NOT NULL COMMENT '获取密码的问题',
  `passDa` varchar(255) DEFAULT NULL,
  `userWork` varchar(255) DEFAULT NULL,
  `userEdu` varchar(10) NOT NULL COMMENT '用户学历',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_userinfo
-- ----------------------------

-- ----------------------------
-- Table structure for xlr_visitlog
-- ----------------------------
DROP TABLE IF EXISTS `xlr_visitlog`;
CREATE TABLE `xlr_visitlog` (
  `logID` int(255) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户访问日子ID',
  `userName` varchar(50) NOT NULL COMMENT '用户名',
  `visitIP` varchar(20) NOT NULL COMMENT '用户访问的ip地址',
  `visitTime` int(20) unsigned NOT NULL COMMENT '用户访问时间',
  PRIMARY KEY (`logID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xlr_visitlog
-- ----------------------------
