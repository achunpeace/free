<?php if (!defined('THINK_PATH')) exit();?>

          <!-- content main container -->
          <div class="main">




            <!-- row -->
            <div class="row">

              <!-- col 12 -->
              <div class="col-md-6">



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>编辑</strong> 分类</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <form action="" method="post" class="form-horizontal" role="form">
                      
                      <div class="form-group">
                        <label for="input01" class="col-sm-4 control-label">分类标题</label>
                        <div class="col-sm-8">
                          <input  class="form-control" id="input01" name="name" value="<?=$res['name']?>">
                        </div>
                      </div>                   

                      <!-- 下拉选择 -->
                      <div class="form-group">
                        <label for="input02" class="col-sm-4 control-label">分类类型</label>
                        <div class="col-sm-8 for">
                        <!-- 循环每个下拉框 -->
                        <?php foreach($arr as $key => $value){ ?>
                            <select class="select" name="pid" style="color:pink;">
                            <!-- 输出顶级分类和杠杠 -->       
                                  <option value="<?=$value[0]['pid']?>">
                                      <?php if($value[0]['pid']==0){ echo '顶级分类';} else{ echo '--'; }?>
                                  </option>

                              <?php foreach($value as $k => $v){?>
                              <!-- 如果在修改时将父级选择为自身  这条数据就无法显示在列表了 应该不允许选中自己...页面输出的$res中的id 如果等于循环的id  则禁止选中  disabled  -->
                                  <option 
                                  <?php if($v['id']==$key&&$v['id']!=$res['id']){ echo 'selected'; }else if($v['id']==$res['id']){ echo 'disabled'; } ?> value="<?=$v['id']?>"
                                      >
                                      <?=$v['name']?>
                                  </option>
                              <?php }?>
                            </select>
                        <?php }?>
                        </div>
                      </div>

                      
                      <div class="form-group form-footer">
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
              <!-- /col 6 -->
  
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



    <script>

    //initialize file upload button function
    $(document)
      .on('change', '.btn-file :file', function() {
        var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });


    $(function(){

      //load wysiwyg editor
      $('#input06').summernote({
        toolbar: [
          //['style', ['style']], // no style button
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          //['insert', ['picture', 'link']], // no insert buttons
          //['table', ['table']], // no table button
          //['help', ['help']] //no help button
        ],
        height: 137   //set editable area's height
      });

      //chosen select input
      $(".chosen-select").chosen({disable_search_threshold: 10});

      //initialize datepicker
      $('#datepicker').datetimepicker({
        icons: {
          time: "fa fa-clock-o",
          date: "fa fa-calendar",
          up: "fa fa-arrow-up",
          down: "fa fa-arrow-down"
        }
      });

      $("#datepicker").on("dp.show",function (e) {
        var newtop = $('.bootstrap-datetimepicker-widget').position().top - 45;      
        $('.bootstrap-datetimepicker-widget').css('top', newtop + 'px');
      });

      //initialize colorpicker
      $('#colorpicker').colorpicker();

      $('#colorpicker').colorpicker().on('showPicker', function(e){
        var newtop = $('.dropdown-menu.colorpicker.colorpicker-visible').position().top - 45;      
        $('.dropdown-menu.colorpicker.colorpicker-visible').css('top', newtop + 'px');
      });

      //initialize colorpicker RGB
      $('#colorpicker-rgb').colorpicker({
        format: 'rgb'
      });

      $('#colorpicker-rgb').colorpicker().on('showPicker', function(e){
        var newtop = $('.dropdown-menu.colorpicker.colorpicker-visible').position().top - 45;      
        $('.dropdown-menu.colorpicker.colorpicker-visible').css('top', newtop + 'px');
      });

      //initialize file upload button
      $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

            console.log(log);
        
        if( input.length ) {
          input.val(log);
        } else {
          if( log ) alert(log);
        }
        
      });

      // Initialize colorpalette
      $('#event-colorpalette').colorPalette({ 
        colors:[['#428bca', '#5cb85c', '#5bc0de', '#f0ad4e' ,'#d9534f', '#ff4a43', '#22beef', '#a2d200', '#ffc100', '#cd97eb', '#16a085', '#FF0066', '#A40778', '#1693A5']] 
      }).on('selectColor', function(e) {
        var data = $(this).data();

        $(data.returnColor).val(e.color);
        $(this).parents(".input-group").css("border-bottom-color", e.color );
      });
      
    })
      
    </script>
  </body>
</html>
  <script type="text/javascript">
                      

      $('.for').on('change','.select',function(){
          var sel = $(this);
          // alert();
          //清除当前标签之后的所有同级标:例如之前标签的子级还存在，换一个父级，其他标签的子级就会消失。  
          sel.nextAll().remove();

          //当选择第一项（顶级分类），也会有子级，子级与下拉框一样。就返回自己；
          // alert(sel.find(':selected').index());
          if(sel.find(':selected').index()==0){

            return false;
          }
          //获取每隔下拉框选项的id。
          var id = sel.val();
          //接收当前修改项的id
          var $id = '<?=$res["id"]?>';
          //获取id
          // alert(id);
          $.ajax({
              type:'post',
              data:{'id':id},
              url:'index.php?admin=1&c=menus&a=add',
              dataType:'json',
              success:function(cate){
                // alert(cate);
                if(cate[0]){
                  var str = '';
                  str +='<select class="select" name="pid" style="color:pink;">';
                  str += '<option value="'+id+'"> - - </option>';//将子级下拉第一项设为空，将option的value设为点击时获取到的id 
                  //循环输出所有分类。
                  for(var i in cate){

                      //如果循环的数据id是当前修改项的id 则不允许选中
                        if(cate[i].id == $id){
                            str += '<option class="cat" disabled value="'+cate[i].id+'">'+cate[i].name+'</option>';
                        }else{
                            str += '<option class="cat" value="'+cate[i].id+'">'+cate[i].name+'</option>';     
                      }
                   }
              sel.after(str); 
              }
            }
          })

      })
 </script>