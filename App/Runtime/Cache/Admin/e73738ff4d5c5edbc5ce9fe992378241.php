<?php if (!defined('THINK_PATH')) exit();?>    <script src="/TP/Public/Admin/js/vendor/momentjs/moment-with-langs.min.js"></script>
    
    <script src="/TP/Public/Admin/js/vendor/datepicker/bootstrap-datetimepicker.min.js"></script>

    <script src="/TP/Public/Admin/js/vendor/colorpicker/bootstrap-colorpicker.min.js"></script>

    <script src="/TP/Public/Admin/js/vendor/colorpalette/bootstrap-colorpalette.js"></script>
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
                    <h1><strong>添加</strong>用户</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <form action="<?php echo U('add');?>" method="post" class="form-horizontal" role="form">
                      
                      <div class="form-group">
                        <label for="input01" class="col-sm-4 control-label">用户名</label>
                        <div class="col-sm-8">
                          <input  class="form-control" id="input01" name="name" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="input01" class="col-sm-4 control-label">密码</label>
                        <div class="col-sm-8">
                          <input  class="form-control" id="input01" name="pass">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="input01" class="col-sm-4 control-label">输入手机号</label>
                        <div class="col-sm-8">
                        <input type="text" id="input01" name="phone">
                          <input type="button" value="发送手机短信">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="input01" class="col-sm-4 control-label">验证码</label>
                        <div class="col-sm-8">
                          <input type="text" id="input01" name="code">
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

</script>