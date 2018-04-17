<?php if (!defined('THINK_PATH')) exit();?>    <!--banner-->
    <div class="banner">
    	<ul class="ban-ul1">
        	<li><a href="#"><img src="/TP/Public/Home/images/banner.png" /></a></li>
        	<li><a href="#"><img src="/TP/Public/Home/images/banner.png" /></a></li>
        	<li><a href="#"><img src="/TP/Public/Home/images/banner.png" /></a></li>
        	<li><a href="#"><img src="/TP/Public/Home/images/banner.png" /></a></li>
        </ul>
        <div class="ban-box w1200">
        	<ol class="ban-ol1">
            	<li class="current"></li>
            	<li></li>
            	<li></li>
            	<li></li>
               	<div style="clear:both;"></div>
            </ol>
        </div>
    </div>
    
    <!--热门推荐-->
    <div class="hot-recommend w1200">
    	<h3>热门推荐</h3>
        <ul class="">
        	<li class="ys1">
            	<a href="#"><img src="/TP/Public/Home/images/hot-tu1.jpg" /></a>
                <div class="ys1-opt"></div>
                <div class="ys1-ft">
                	<p>最唯美<br /><span>时尚酒店</span></p>
                    <a href="#">点击有实惠</a>
                </div>
            </li>
            <li class="ys2">
            	<p>汽车保养</p>
                <a href="#" class="ys2-a1" style="margin-bottom:25px;">上门汽车保养1一元钱</a>
            	<a href="#"><img src="/TP/Public/Home/images/hot-tu2.jpg" /></a>
            </li>
            <li class="ys2">
            	<p>汽车保养</p>
                <a href="#" class="ys2-a1">上门汽车保养1一元钱</a>
                <a href="#"><img src="/TP/Public/Home/images/hot-tu3.jpg" /></a>
            </li>
            <li class="ys2" style=" width:298px;">
            	<p>汽车保养</p>
                <a href="#" class="ys2-a1">上门汽车保养1一元钱</a>
            	<a href="#"><img src="/TP/Public/Home/images/hot-tu4.jpg" /></a>
            </li>
            <li class="ys1">
            	<a href="#"><img src="/TP/Public/Home/images/hot-tu5.jpg" /></a>
                <div class="ys1-opt"></div>
                <div class="ys1-ft">
                	<p>最实惠KTV<br /><span>最佳组合</span></p>
                    <a href="#">点击有实惠</a>
                </div>
            </li>
            <li class="ys1">
            	<a href="#"><img src="/TP/Public/Home/images/hot-tu6.jpg" /></a>
                <div class="ys1-opt"></div>
                <div class="ys1-ft">
                	<p>最贴心家政<br /><span>包您满意</span></p>
                    <a href="#">点击有实惠</a>
                </div>
            </li>
            <li class="ys2">
            	<p>汽车保养</p>
                <a href="#" class="ys2-a1" style="margin-bottom:12px;">上门汽车保养1一元钱</a>
            	<a href="#"><img src="/TP/Public/Home/images/hot-tu7.jpg" /></a>
            </li>
            <li class="ys2" style="width:298px;">
            	<p>汽车保养</p>
                <a href="#" class="ys2-a1" style="margin-bottom:15px;">上门汽车保养1一元钱</a>
            	<a href="#"><img src="/TP/Public/Home/images/hot-tu8.jpg" /></a>
            </li>
            <div style="clear:both;"></div>
        </ul>
    </div>
    
    <!--商品内容页面-->
    <div class="shopping-content w1200">
    	<div class="sp-con-info">
        	<h3 class="sp-info-tit"><span>1F</span>食品/饮料/酒水</h3>
        	<div class="sp-info-l f-l">
            	<a href="#"><img src="/TP/Public/Home/images/sp-con-l-tu.gif" /></a>
                <div class="sp-l-b">
                	<a href="#">零食/糖果/巧克力</a>
                	<a href="#">饼干/糕点</a>
                	<a href="#">生鲜</a>
                	<a href="#">酒水饮料/乳饮料</a>
                	<a href="#">调味/速食</a>
                	<a href="#">粮油/干货</a>
                	<a href="#">冲调制品 </a>
                </div>
            </div>
        	<ul class="sp-info-r f-r">
            <?php if(is_array($list)): foreach($list as $key=>$v): ?><li>
                        <div class="li-top">
                            <a href="<?php echo U('goods_desc',"goods_id=$v[id]");?>" class="li-top-tu"><img src="/TP/Public/Home/images/sp-con-r-tu.gif" /></a>
                            <p class="jiage"><span class="sp1">￥<?php echo ($v['shop_price']); ?>元</span><span class="sp2">￥<?php echo ($v['mk_price']); ?>元</span></p>
                        </div>
                        <p class="miaoshu"><?php echo ($v['name']); ?></p>
                        <div class="li-md">
                            <div class="md-l f-l">
                                <p class="md-l-l f-l" ap="">1</p>
                                <div class="md-l-r f-l">
                                    <a href="JavaScript:;" class="md-xs" at="">∧</a>
                                    <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                            <div class="md-r f-l">
                                <button class="md-l-btn1">立即购买</button>
                                <button class="md-l-btn2">加入购物车</button>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                        <p class="pingjia">88888评价</p>
                        <p class="weike">微克宅购自营</p>
                    </li><?php endforeach; endif; ?>
            </ul>
            <div style="clear:both;"></div>
        </div>
        <div class="sp-con-info">
        	<h3 class="sp-info-tit"><span style="color:#F56904;">2F</span>母婴用品/玩具</h3>
        	<div class="sp-info-l f-l">
            	<a href="#"><img src="/TP/Public/Home/images/sp-con-l-tu2.gif" /></a>
                <div class="sp-l-b">
                	<a href="#">零食/糖果/巧克力</a>
                	<a href="#">饼干/糕点</a>
                	<a href="#">生鲜</a>
                	<a href="#">酒水饮料/乳饮料</a>
                	<a href="#">调味/速食</a>
                	<a href="#">粮油/干货</a>
                	<a href="#">冲调制品 </a>
                </div>
            </div>

            <div style="clear:both;"></div>
        </div>
        <div class="sp-con-info">
        	<h3 class="sp-info-tit"><span>3F</span>厨具餐具/家用清洁/纸品</h3>
        	<div class="sp-info-l f-l">
            	<a href="#"><img src="/TP/Public/Home/images/sp-con-l-tu.gif" /></a>
                <div class="sp-l-b">
                	<a href="#">零食/糖果/巧克力</a>
                	<a href="#">饼干/糕点</a>
                	<a href="#">生鲜</a>
                	<a href="#">酒水饮料/乳饮料</a>
                	<a href="#">调味/速食</a>
                	<a href="#">粮油/干货</a>
                	<a href="#">冲调制品 </a>
                </div>
            </div>

            <div style="clear:both;"></div>
        </div>
        <div class="sp-con-info">
        	<h3 class="sp-info-tit"><span style="color:#F56904;">4F</span>美妆洗护/个人护理洗发护发</h3>
        	<div class="sp-info-l f-l">
            	<a href="#"><img src="/TP/Public/Home/images/sp-con-l-tu2.gif" /></a>
                <div class="sp-l-b">
                	<a href="#">零食/糖果/巧克力</a>
                	<a href="#">饼干/糕点</a>
                	<a href="#">生鲜</a>
                	<a href="#">酒水饮料/乳饮料</a>
                	<a href="#">调味/速食</a>
                	<a href="#">粮油/干货</a>
                	<a href="#">冲调制品 </a>
                </div>
            </div>

            <div style="clear:both;"></div>
        </div>
        <div class="sp-con-info">
        	<h3 class="sp-info-tit"><span style="color:#F56904;">5F</span>家居/家访</h3>
        	<div class="sp-info-l f-l">
            	<a href="#"><img src="/TP/Public/Home/images/sp-con-l-tu2.gif" /></a>
                <div class="sp-l-b">
                	<a href="#">零食/糖果/巧克力</a>
                	<a href="#">饼干/糕点</a>
                	<a href="#">生鲜</a>
                	<a href="#">酒水饮料/乳饮料</a>
                	<a href="#">调味/速食</a>
                	<a href="#">粮油/干货</a>
                	<a href="#">冲调制品 </a>
                </div>
            </div>

            <div style="clear:both;"></div>
        </div>
    </div>
    
    <!--底部一块-->
    <div class="footer-box">
    	<ul class="footer-info1 w1200">
        	<li>
            	<div class="ft-tu1">
                	<a href="JavaScript:;"><img src="/TP/Public/Home/images/zl2-86.gif" /></a>
                </div>
                <h3><a href="JavaScript:;">号码保障</a></h3>
                <P>所有会员，手机短信验证</P>
            </li>
        	<li>
            	<div class="ft-tu1">
                	<a href="JavaScript:;"><img src="/TP/Public/Home/images/zl2-87.gif" /></a>
                </div>
                <h3><a href="JavaScript:;">6*12小时客服</a></h3>
                <P>有任何问题随时免费资讯</P>
            </li>
        	<li>
            	<div class="ft-tu1">
                	<a href="JavaScript:;"><img src="/TP/Public/Home/images/zl2-88.gif" /></a>
                </div>
                <h3><a href="JavaScript:;">专业专攻</a></h3>
                <P>我们只专注于建筑行业的信息服务</P>
            </li>
        	<li>
            	<div class="ft-tu1">
                	<a href="JavaScript:;"><img src="/TP/Public/Home/images/zl2-89.gif" /></a>
                </div>
                <h3><a href="JavaScript:;">注册有礼</a></h3>
                <P>随时随地注册有大礼包</P>
            </li>
        	<li>
            	<div class="ft-tu1">
                	<a href="JavaScript:;"><img src="/TP/Public/Home/images/zl2-90.gif" /></a>
                </div>
                <h3><a href="JavaScript:;">值得信赖</a></h3>
                <P>专业的产品，专业的团队</P>
            </li>
            <div style="clear:both;"></div>
        </ul>
    	<div class="footer-info2 w1200">
        	<div class="ft-if2-left f-l">
            	<dl>
                	<dt><a href="6-1服务协议.html">新手上路</a></dt>
                    <dd>
                    	<a href="6-1服务协议.html">购物流程</a>
                    	<a href="6-1服务协议.html">在线支付</a>
                    	<a href="6-1服务协议.html">投诉与建议</a>
                    </dd>
                </dl>
            	<dl>
                	<dt><a href="6-1服务协议.html">配送方式</a></dt>
                    <dd>
                    	<a href="6-1服务协议.html">货到付款区域</a>
                    	<a href="6-1服务协议.html">配送费标准</a>
                    </dd>
                </dl>
            	<dl>
                	<dt><a href="6-1服务协议.html">购物指南</a></dt>
                    <dd>
                    	<a href="6-1服务协议.html">订购流程</a>
                    	<a href="6-1服务协议.html">购物常见问题</a>
                    </dd>
                </dl>
            	<dl>
                	<dt><a href="6-1服务协议.html">售后服务</a></dt>
                    <dd>
                    	<a href="6-1服务协议.html">售后服务保障</a>
                    	<a href="6-1服务协议.html">退换货政策总则</a>
                    	<a href="6-1服务协议.html">自营商品退换细则</a>
                    </dd>
                </dl>
                <div style="clear:both;"></div>
            </div>
        	<div class="ft-if2-right f-r">
            	<h3>400-2298-223</h3>
                <p>周一至周日  9:00-24:00</p>
                <p>（仅收市话费）</p>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div class="footer-info3 w1200">
        	<p>
                <a href="#">免责条款</a><span>|</span>
                <a href="#">隐私保护</a><span>|</span>
                <a href="#">咨询热点</a><span>|</span>
                <a href="#">联系我们</a><span>|</span>
                <a href="#">公司简介</a>
            </p>
        	<p>
            	<a href="#">沪ICP备13044278号</a><span>|</span>
                <a href="#">合字B1.B2-20130004</a><span>|</span>
                <a href="#">营业执照</a><span>|</span>
                <a href="#">互联网药品信息服务资格证</a><span>|</span>
                <a href="#">互联网药品交易服务资格证</a>
            </p>
            <div class="ft-if3-tu1">
            	<a href="#"><img src="/TP/Public/Home/images/zl2-91.gif" /></a>
            	<a href="#"><img src="/TP/Public/Home/images/zl2-92.gif" /></a>
            	<a href="#"><img src="/TP/Public/Home/images/zl2-93.gif" /></a>
            </div>
        </div>
    </div>
    
    <!--固定右侧-->
    <ul class="youce">
    	<li class="li1">
        	<a href="index.html" class="li1-tu1"><img src="/TP/Public/Home/images/zl2-94.png" /></a>
            <a href="index.html" class="li1-zi1">返回首页</a>
        </li>
        <li class="li2">
        	<a href="购物车.html"><img src="/TP/Public/Home/images/zl2-95.png" />购</br>物</br>车</a>
        </li>
        <li class="li3">
        	<a href="#" class="li1-tu2"><img src="/TP/Public/Home/images/zl2-96.png" /></a>
            <a href="#" class="li1-zi2">我关注的品牌</a>
        </li>
        <li class="li3">
        	<a href="浏览记录.html" class="li1-tu2"><img src="/TP/Public/Home/images/zl2-97.png" /></a>
            <a href="浏览记录.html" class="li1-zi2">我看过的</a>
        </li>
        <li class="li4">
        	<a href="JavaScript:;" class="li1-tu2"><img src="/TP/Public/Home/images/zl2-98.gif" /></a>
            <div class="li4-ewm">
            	<a href="JavaScript:;"><img src="/TP/Public/Home/images/zl2-101.gif" /></a>
                <p>扫一扫</p>
            </div>
        </li>
        <li class="li3 li5">
        	<a href="#top" class="li1-tu2"><img src="/TP/Public/Home/images/zl2-99.gif" /></a>
            <a href="#top" class="li1-zi2">返回顶部</a>
        </li>
    </ul>
    
</body>
</html>