<?php if (!defined('THINK_PATH')) exit();?>  
    <!--内容开始-->
    <div class="cart-content w1200">
    	<ul class="cart-tit-nav">
        	<li class="current"><a href="#">全部商品   </a></li>
        	<li><a href="#">降价商品   </a></li>
        	<li><a href="#">进口商品   </a></li>
            <div style="clear:both;"></div>
        </ul>
        <div class="cart-con-tit">
        	<p class="p1">
            	<input type="checkbox" value="" ></input>
				<span>全选</span>
            </p>
            <p class="p2">商品信息</p>
            <p class="p3">规格</p>
            <p class="p4">数量</p>
            <p class="p5">单价（元）</p>
            <p class="p6">金额（元）</p>
            <p class="p7">操作</p>
        </div>
<form action="<?php echo U('Order/order');?>" method="post">
        <?php if(is_array($car_list)): foreach($car_list as $key=>$v): ?><div class="cart-con-info">
            	<div class="info-top">
    				<span>商家：XXXXXXXXXXX</span>
                </div>
                <div class="info-mid">
                    <div class="f-l">
                    <input class="check" onclick="jisuan()" type="checkbox" name="car_id[]" value="<?php echo ($v[id]); ?>" class="mid-ipt f-l" style="margin-top:35px; padding-right:50px;" /></div>
                	
                    <div class="mid-tu f-l">
                    	<a href="#"><img src="/TP/Public/Home/images/dai1.gif" /></a>
                    </div>
                    <div class="mid-font f-l">
                    	<a href="#"><?php echo (substr($v[goods][name],0,26)); ?></a>
                        <span>满赠</span>
                    </div>
                    <div class="mid-guige f-l guige">
                    	<?php echo ($v[spec_desc]); ?>
                    </div>
                    <div class="mid-sl f-l">
                    	<a href="JavaScript:;"  class="sl-left">-</a>
                        <input class="shu" type="text" value="<?php echo ($v[number]); ?>" />
                        <a href="JavaScript:;"  class="sl-right">+</a>
                    </div>
                    <p class="mid-dj f-l">¥ <span class="shop_price"><?php echo ($v[goods][shop_price]); ?></span></p>
                    <p class="mid-je f-l">¥ <span class="xiaoji"><?php echo ($v[goods][shop_price]*$v[number]); ?></span></p>
                    <div class="mid-chaozuo f-l">
                    	<a href="#">移入收藏夹</a>
                        <a href="#">删除</a>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div><?php endforeach; endif; ?>

       	<div class="cart-con-footer">
        	<div class="quanxuan f-l">
            	<input type="checkbox" value=""></input>
                <span>全选</span>
                <a href="#">删除</a>
                <a href="#">加入收藏夹</a>
                <p>（此处始终在屏幕下方）</p>
            </div>
            <div class="jiesuan f-r">
            	<div class="jshj f-l">
                	<p>合计（不含运费）</p>
                	<p class="jshj-p2">
                    	￥：<span class="heji">0</span>
                    </p>
                </div>
            	<button type="submit" class="js-a1 f-l">结算</button>
                <div style="clear:both;"></div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>

</form>
    
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
</body>
</html>

<script src="/TP/Public/Home/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
    
    $(function(){
        //调用计算结果
        jisuan();
    })

    $(".mid-sl .sl-right").click(function(event) {
        var vl = $(this).siblings("input").val();
        var dj = $(this).parent().siblings(".mid-dj").children('span').text();
        if (vl>0) {
            vl++;
            $(this).siblings("input").val(vl);
            $(this).parent().siblings(".mid-je").children('span').text(dj*vl);
        }
        jisuan();
    });
    $(".mid-sl .sl-left").click(function(event) {
        var vl = $(this).siblings("input").val();
        var dj = $(this).parent().siblings(".mid-dj").children('span').text();
        if (vl>1) {
            vl--;
            $(this).siblings("input").val(vl);
            $(this).parent().siblings(".mid-je").children('span').text(dj*vl);
        }
        jisuan();
    });
    
   
    function jisuan(){
        
        
        var xiaoji =0;
        $('.check:checked').each(function(){
            //转为浮点型
            xiaoji+=parseFloat($(this).parents('.info-mid').find('.xiaoji').text());

        })

        // alert(xiaoji);
        $('.heji').html(xiaoji);

    }





</script>