<?php if (!defined('THINK_PATH')) exit();?>      <div class="main">
            <!-- row -->
            <div class="row">
              <!-- col 12 -->
              <div class="col-md-12">

                <!-- tile -->
                <section id="rootwizard" class="tabbable transparent tile">

                  <!-- tile header -->
                  <div class="tile-header transparent">
                    <h1><strong>商品</strong> 添加</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile widget -->
                  <div class="tile-widget nopadding color transparent-black rounded-top-corners">
                    <ul>
                      <li><a href="#tab1" data-toggle="tab">商品属性</a></li>
                      <li><a href="#tab2" data-toggle="tab">商品详情</a></li>
                      <li><a href="#tab3" data-toggle="tab">属性规格</a></li>
                    </ul>
                  </div>
                  <!-- /tile widget -->

                  <!-- tile body -->
                  <div class="tile-body">
                  <form class="form-horizontal form1" action="<?php echo U('addGoods');?>" method="post" role="form" parsley-validate>

                    <div class="tab-content">

                      <div class="tab-pane" id="tab1" style="margin-left:20px">                                            
                          <div class="form-group">
                            <label class="col-sm-6 control-label">商品名</label>
                            <div class="col-sm-10">
                              <input type="text" name="name">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-6 control-label">商品分类</label>
                            <div class="col-sm-10">
                                <select  name="cate_id">
                                    <option>请选择商品分类</option>
                                    <?php if(is_array($cate)): foreach($cate as $key=>$ca): ?><option value="<?php echo ($ca['id']); ?>"><?php echo ($ca['name']); ?></option><?php endforeach; endif; ?>
                                </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-6 control-label">商品品牌</label>
                            <div class="col-sm-10">
                              <select name="brand_id">
                                    <option>请选择商品品牌</option>
                                    <?php if(is_array($brand)): foreach($brand as $key=>$br): ?><option value="<?php echo ($br['id']); ?>"><?php echo ($br['name']); ?></option><?php endforeach; endif; ?>
                                </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-6 control-label">市场价</label>
                            <div class="col-sm-10">
                              <input type="text" name="mk_price">元
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-6 control-label">会员价</label>
                            <div class="col-sm-10">
                              <input type="text" name="shop_price">元
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-6 control-label">是否包邮</label>
                            <div class="col-sm-10">
                              <input type="radio" name="is_you" value="1">是
                              <input type="radio" name="is_you" value="0">否
                            </div>
                          </div>

                      </div>

                      <div class="tab-pane" id="tab2"  style="margin-left:20px">

                        <div class="form-group">
                          <script name="goods_desc" id="editor" type="text/plain" style="width:1024px;height:500px;"></script>
                        </div>  

                      </div>
                    
                      <div class="tab-pane" id="tab3"  style="margin-left:20px">

                          <div class="form-group">
                            <label class="col-sm-6 control-label">商品分类</label>
                            <div class="col-sm-10">
                                <select id="select">
                                    <option>请选择商品分类</option>
                                    <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option name="cate_id" value="<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></option><?php endforeach; endif; ?>
                                </select>
                            </div>
                          </div>

                          <div class="form-group kucun">
                            <label class="col-sm-4 control-label">库存</label>
                            <div class="col-sm-10">
                                <input type="text" name="num">
                            </div>
                          </div>

                          <div id="spec_list">
                            <!-- <div class="form-group">
                              <label class="col-sm-6 control-label">商品规格</label>
                              <div class="input-group margin-bottom-20">
                                <input type="text" class="form-control" style="width:80px; height:40px;">
                                <div style="float:left">
                                  <button class="btn btn-red margin-bottom-20" type="button" style="height:40px; clear:both;">+</button>
                                </div> 
                                <input type="text" class="form-control" style="width:80px; height:40px;">
                              </div>
                                
                            </div> -->
                          </div>

                          <div class="form-group">   
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>规格价格</th>
                                  <th>规格描述</th>
                                  <th>规格库存</th>
                                  <th>操作</th>
                                </tr>
                              </thead>
                              <tbody>
                                <!-- <tr>
                                  <td>500</td>
                                  <td>颜色：红色 网络：移动4g </td>
                                  <td>5</td>
                                  <td>删除</td>
                                </tr> -->
                              </tbody>
                            </table>   
                          </div>

                        <div class="form-group">
                          <input type="button" value="规格录入" class="spec_add">
                        </div>
                  
                      </div>
                    </div>

                    <div class="tab-pane">
                        <div class="col-sm-offset-4 col-sm-8">
                          <button type="submit" class="btn btn-primary">提交</button>
                          <button type="reset" class="btn btn-default">重置</button>
                        </div>
                    </div>

                  </form>

                  </div>
                  <!-- /tile body -->


                </section>
                <!-- /tile -->


              </div>
              <!-- /col 12 -->

              
            </div>
            <!-- /row -->
          

          </div>
          <!-- /content container -->



        </div>
        <!-- Page content end -->

      </div>
      <!-- Make page fluid-->

    </div>
    <!-- Wrap all page content end -->

    <section class="videocontent" id="video"></section>


    <script src="/TP/Public/Admin/js/vendor/wizard/jquery.bootstrap.wizard.min.js"></script>

    

    <script type="text/javascript" charset="utf-8" src="/TP/Public/Admin/baidu/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/TP/Public/Admin/baidu/ueditor.all.min.js"> </script>

    <script>
    $(function(){

      var ue = UE.getEditor('editor');

      //initialize form wizard
      $('#rootwizard').bootstrapWizard({

        'tabClass': 'nav nav-tabs tabdrop',
        onTabShow: function(tab, navigation, index) {
          var $total = navigation.find('li').not('.tabdrop').length;
          var $current = index+1;
          var $percent = ($current/$total) * 100;
          $('#rootwizard').find('#bar .progress-bar').css({width:$percent+'%'});

          // If it's the last tab then hide the last button and show the finish instead
          if($current >= $total) {
            $('#rootwizard').find('.pager .next').hide();
            $('#rootwizard').find('.pager .finish').show();
            $('#rootwizard').find('.pager .finish').removeClass('disabled');
          } else {
            $('#rootwizard').find('.pager .next').show();
            $('#rootwizard').find('.pager .finish').hide();
          }  
        },

        onNext: function(tab, navigation, index) {

          var form = $('.form' + index)

          form.parsley('validate');

          if(form.parsley('isValid')) {
            tab.addClass('success');       
          } else {
            return false;
          }

        },

        onTabClick: function(tab, navigation, index) {

          var form = $('.form' + (index+1))

          form.parsley('validate');

          if(form.parsley('isValid')) {
            tab.addClass('success');  
          } else {
            return false;
          }

        }

      });

      // Initialize tabDrop
      $('.tabdrop').tabdrop({text: '<i class="fa fa-th-list"></i>'});
      
      
    })
      
    </script>
  </body>
</html>
<script>

$(function(){

    $('#select').change(function(){
        var cate_id = $(this).val();
        // alert(cate_id);
        //获取对应的规格属性
        $.ajax({
          url:'<?php echo U("ajax");?>',
          data:{'cate_id':cate_id},
          type:'post',
          success:function(msg){
              // alert(msg);
              var html='';
              for(i in msg.attr){
                // alert(i);
                html+='<div class="form-group par">';
                html+='<label class="col-sm-6 control-label">'+msg.attr[i].attr_name+'</label>';
                for(j in msg.spec[i]){
                  html+='<div class="input-group margin-bottom-20" style="float:left; margin-left:5px;">';
                  html+='<input type="text" class="form-control" disabled style="width:80px; height:40px; " value="'+msg.spec[i][j].attr_value+'">';
                  html+='<div style="float:left">';
                  html+='<button class="btn btn-red margin-bottom-20 plus" spec_id="'+msg.spec[i][j].id+'" attr_name="'+msg.attr[i].attr_name+'" type="button" style="height:40px; clear:both; font-size:30px;">+</button>';
                  html+='</div> ';
                  // html+='<input type="text" class="form-control" style="width:80px; height:40px;">';
                  html+='</div>';
                }
                html+='</div>';
              }

              $('#spec_list').html(html);

              $('.plus').click(function(){
                    if($(this).text()=='+'){
                       $(this).parents('.par').find('button').text('+');
                      $(this).parents('.par').find('.kuang').remove();
                        $(this).text('-');

                        var attr_name = $(this).attr('attr_name');
                        // alert(attr_name);
                        var spec_id = $(this).attr('spec_id');
                        
                        var html = '<input type="text" class="form-control kuang" style="width:80px; height:40px;" spec_id="'+spec_id+'" attr_name="'+attr_name+'">';
                        $(this).parent().after(html);

                    }
                })
          }

        })

    })
    
    $('.spec_add').click(function(){ 

      //规格总价
      var spec_price=0;
      //规格描述
      var spec_desc='';
      //规格规则
      var spec_rule='';
      //$(':text[attr_name]')有attr_name属性的框，就是隐藏的input的框
          $(':text[attr_name]').each(function(i,obj){
            //获取总价
              spec_price += parseInt($(obj).val());
              //获取红色，3G,32G,套餐一等这些值
              var spec_val = $(obj).prev().prev().val();
              //获取规格属性名，颜色，机身内存，运行内存，套餐
              spec_desc +=$(obj).attr('attr_name')+':'+spec_val+' ';
              //拼规格。_20_30_31_40.红色id、套餐一id等
              spec_rule +='-'+$(obj).attr('spec_id');
          })
          // console.log(spec_price);
          // console.log(spec_desc);
          // console.log(spec_rule); 

          //获取库存
          var num = $(':text[name=num]').val();

          $.ajax({
            type:'post',
            url:'<?php echo U("data_cache");?>',
            data:{
              'spec_price':spec_price,
              'spec_desc':spec_desc,
              'num':num,
              'spec_rule':spec_rule
            },
            dateType:'json',
            success:function(ms){
                var html='';
                for(i in ms){
                    html+='<tr rule="'+ms[i].spec_rule+'">';
                    html+='<td>'+ms[i].spec_price+'</td>';
                    html+='<td>'+ms[i].spec_desc+'</td>';
                    html+='<td>'+ms[i].num+'</td>';
                    html+='<td><a class="del_spec">删除</a></td>';
                    html+='</tr>';
                }
                $('tbody').html(html);

                $('.del_spec').click(function(){

                    var spec_rule = $(this).parent().parent().attr('rule');
                    $.ajax({
                      type:'get',
                      data:{'spec_rule':spec_rule},
                      url:"<?php echo U('del_spec');?>",
                      success:function(m){

                          }
                      })
                    //删除当前行
                    $(this).parent().parent().remove();
                    return false;
                })
            }

          })



    })
})


</script>