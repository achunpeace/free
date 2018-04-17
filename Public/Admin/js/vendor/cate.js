$(function(){
      // $(function(){
      //     $('.note-codable').attr('name','content');
      // })
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

          var  catename  = sel.attr('name');
          //获取id
          // alert(id);
          $.ajax({
              type:'post',
              data:{'id':id},
              dataType:'json',
              success:function(cate){
                // alert(cate);
                if(cate[0]){
                  var str = '';
                  str +='<select class="select" name="'+catename+'" style="color:pink;">';
                  str += '<option value="'+id+'"> - - </option>';//将子级下拉第一项设为空，将option的value设为点击时获取到的id 
                  //循环输出所有分类。
                  for(var i in cate){

                  str += '<option class="cat" value="'+cate[i].id+'">'+cate[i].name+'</option>';     
                  }
              sel.after(str); 
              }
            }
          })

      })
})