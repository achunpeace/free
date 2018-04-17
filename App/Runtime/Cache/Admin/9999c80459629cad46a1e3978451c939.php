<?php if (!defined('THINK_PATH')) exit();?>    <script src="/Public/Admin/js/vendor/momentjs/moment-with-langs.min.js"></script>
    
    <script src="/Public/Admin/js/vendor/datepicker/bootstrap-datetimepicker.min.js"></script>

    <script src="/Public/Admin/js/vendor/colorpicker/bootstrap-colorpicker.min.js"></script>

    <script src="/Public/Admin/js/vendor/colorpalette/bootstrap-colorpalette.js"></script>
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
                    <h1><strong>添加</strong> 菜单</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <form action="<?php echo U('addMenu');?>" method="post" class="form-horizontal" role="form">
                      
                      <div class="form-group">
                        <label for="input01" class="col-sm-4 control-label">菜单标题</label>
                        <div class="col-sm-8">
                          <input  class="form-control" id="input01" name="name" >
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="input01" class="col-sm-4 control-label">英文名</label>
                        <div class="col-sm-8">
                          <input  class="form-control" id="input01" name="en" >
                        </div>
                      </div>

                      <!-- 下拉选择 -->
                      <div class="form-group">
                        <label for="input02" class="col-sm-4 control-label">菜单类型</label>
                        <div class="col-sm-8 for">
                        <select class="select" name="pid" lv="m" style="color:pink;">
                              <option value="0">顶级菜单</option>
                          <?php if(is_array($menu)): foreach($menu as $key=>$v): ?><option class="cat" n="<?php echo ($v['en']); ?>" value="<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></option><?php endforeach; endif; ?>
                        </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label">是否显示菜单</label>
                        <div class="col-sm-8">
                          <label><input type="radio" class="form-control" name="display" value="1">是</label>
                          <label><input type="radio" class="form-control" name="display" value="0">否</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label">是否设置权限</label>
                        <div class="col-sm-8">
                          <label><input type="radio" class="form-control" name="is_root" value="1">是</label>
                          <label><input type="radio" class="form-control" name="is_root" value="0">否</label>
                        </div>
                      </div>  

                      <!-- 添加图标 -->
                      <div class="form-group">
                        <label for="input01" class="col-sm-4 control-label">选择小图标</label>
                        <div class="col-sm-8">
                          <input  class="form-control " id="icon" name="icon" >
                          <?php if(is_array($icons)): foreach($icons as $key=>$val): ?><span style="font-size:20px; cursor:pointer; margin-left:2px" class="<?php echo ($val); ?> icon" icon="<?php echo ($val); ?>"></span><?php endforeach; endif; ?>
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
      // $(function(){
      //     $('.note-codable').attr('name','content');
      // })
      $('.for').on('change','.select',function(){
        // alert();
          var sel = $(this);
          
          //清除当前标签之后的所有同级标:例如之前标签的子级还存在，换一个父级，其他标签的子级就会消失。  
          sel.nextAll().remove();

          // 如果选中的是第一个就不继续执行
          if(sel.find(':selected').index()==0){

            return false;
          }
          //获取select的级别
          var lv = sel.attr('lv');
          // alert(lv);
          //如果是第二级菜单
          if(lv=="c"){
              //获取第二级菜单option的N属性的值，也就是英文名
              var en = sel.find(':selected').attr('n');
              //增加一个隐藏框，存放第二级菜单的英文名
              var hidden = '<input type="hidden" value="'+en+'" name="'+lv+'" />';

              //把隐藏框放在该选择框之前
              $('.cat').before(hidden);

              return false;

          }
          //获取每隔下拉框选项的id。
          var id = sel.val();

          //获取下拉框的name
          var catename  = sel.attr('name');
          
          $.ajax({
              type:'post',
              data:{id:id},
              url:"<?php echo U('ajax');?>",
              success:function(cate){
                // alert(cate);
                if(cate[0]){
                  var str = '';
                  str += '<select class="select" lv="c" name="'+catename+'" style="color:pink;">';
                  str += '<option value="'+id+'"> - - </option>';//将子级下拉第一项设为空，将option的value设为点击时获取到的id 
                  //循环输出所有分类。
                  for(var i in cate){

                  str += '<option n="'+cate[i].en+'" class="cat" value="'+cate[i].id+'">'+cate[i].name+'</option>';     
                  }
              sel.after(str); 
              }
            }
          })

      })

      $('.icon').click(function(){
        //获取小图标的类名
          var aiko = $(this).attr('icon');
          // alert(aiko);
          //小图标选中的时候有绿色的框
          $('.icon').css('border','1px soild green');

          //替换input的值
          $('#icon').val(aiko);
      })
      // // 下拉框
      // $('.select').change(function(){
      //       var val = $(this).val();
      //       // alert(val);
      //     if(val==0){
      //             $('.icon').hide();
      //           }else{
      //             $('.icon').show();
      //           }
      // })
      


      
</script>