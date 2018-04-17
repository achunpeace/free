$(function() {
	/*****************************首页*****************************/
		/*快捷hover效果*/
		$(".kuaijie-info").hover(function() {
			$(this).addClass('current');
		}, function() {
			$(this).removeClass('current');
		});
		/*快捷hover效果 END*/

		/*banner*/
		 $(".ban-ol1 li").click(function(event) {
            var key=0;
            $(this).addClass("current").siblings().removeClass("current");
            $(".ban-ul1 li").eq($(this).index()).stop().fadeIn("3500").siblings().stop().fadeOut("3500");
            key=$(this).index();
        });
        var timer=setInterval(autoplay, 5000);
	    var key=0;
         function autoplay(){
            key++;
            if(key>3)
            {
                key=0;
            }
            $(".ban-ol1 li").eq(key).addClass('current').siblings().removeClass('current');
            $(".ban-ul1 li").eq(key).stop().fadeIn("3500").siblings().stop().fadeOut("3500");
         }
      	$(".banner").hover(function() {
      	  clearInterval(timer);
      	}, function() {
      	  clearInterval(timer);
      	  timer=setInterval(autoplay,5000);
      	});
		/*banner END*/

    /*手风琴效果*/
    var time1 = 500;
    $(".tuijian-right li").hover(function() {
      $(this).stop().animate({"width":"250px"},time1).siblings().stop().animate({"width":"107px"},time1);/*鼠标经过的时候， 当前的li  变600   它的兄弟 变100*/
    }, function() {
      $(".tuijian-right li").stop().animate({"width":"125px"},time1);
    });
    /*手风琴效果 END*/

    /* 在线商城左侧 hover 改变高度*/
    // var time2 = 500;
    // $(".zl-lhover").hover(function() {
    //   $(this).toggleClass('zl-lhover1');
    // });
    $(".zl-lhover").hover(function(){
      var li_height = $(this).children("li").height();
      var li_length = $(this).children("li").length;
      var li_two_length = Math.ceil(li_length/2);
      var li_two_height = li_height * li_two_length
      $(this).animate({height:li_two_height+'px'})
      //$(this).height(li_two_height)
    },function(){
      $(this).animate({height:'119px'})
      //alert(2)
    })
    /* 在线商城左侧 hover 改变高度 END*/

    /*hover 切换*/
    $(".title1-ul1 li").hover(function() {
      var index1 = $(this).index();
      $(this).addClass('current').siblings().removeClass('current');
      $(this).parent().parent().siblings().children('.zl-con-right').children('.lihover').eq(index1).show().siblings().hide();
    });
    /*hover 切换  END*/

    /*hover 放上去的效果*/
    $(".zl-rul1 li").hover(function() {
      $(this).addClass('current');
    }, function() {
      $(this).removeClass('current');
    });
    /*hover 放上去的效果 END*/


	/*****************************首页 END*****************************/



  /*固定右侧  js*/
  $(".youce .li1").hover(function() {
    $(this).addClass('current1');
  }, function() {
    $(this).removeClass('current1');
  });
  $(".youce .li3").hover(function() {
    $(this).addClass('current2');
  }, function() {
    $(this).removeClass('current2');
  });
  $(".youce .li4").hover(function() {
    $(this).addClass('current3');
  }, function() {
    $(this).removeClass('current3');
  });


	/****************中林2  js******************/
	$(".yjp-hover1").hover(function() {
		$(".yjp-show1").show();
	}, function() {
		$(".yjp-show1").hide();
	});
	


	
});