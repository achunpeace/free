<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>Minimal 1.0 - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />



    <!-- <link rel="icon" type="image/ico" href="http://tattek.com/minimal/assets/images/favicon.ico" /> -->
    <!-- Bootstrap -->
    <link href="/TP/Public/Admin/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/TP/Public/Admin/css/vendor/animate/animate.min.css">
    <link type="text/css" rel="stylesheet" media="all" href="/TP/Public/Admin/js/vendor/mmenu/css/jquery.mmenu.all.css" />
    <link rel="stylesheet" href="/TP/Public/Admin/js/vendor/videobackground/css/jquery.videobackground.css">
    <link rel="stylesheet" href="/TP/Public/Admin/css/vendor/bootstrap-checkbox.css">

    <link rel="stylesheet" href="/TP/Public/Admin/js/vendor/rickshaw/css/rickshaw.min.css">
    <link rel="stylesheet" href="/TP/Public/Admin/js/vendor/morris/css/morris.css">
    <link rel="stylesheet" href="/TP/Public/Admin/js/vendor/tabdrop/css/tabdrop.css">
    <link rel="stylesheet" href="/TP/Public/Admin/js/vendor/summernote/css/summernote.css">
    <link rel="stylesheet" href="/TP/Public/Admin/js/vendor/summernote/css/summernote-bs3.css">
    <link rel="stylesheet" href="/TP/Public/Admin/js/vendor/chosen/css/chosen.min.css">
    <link rel="stylesheet" href="/TP/Public/Admin/js/vendor/chosen/css/chosen-bootstrap.css">

    <link href="/TP/Public/Admin/css/minimal.css" rel="stylesheet">

    <link href="/TP/Public/Admin/css/bootstrap.css" rel="stylesheet">
    <link href="/TP/Public/Admin/css/theme.css" rel="stylesheet">
    <link href="/TP/Public/Admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="/TP/Public/Admin/css/alertify.css" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/TP/Public/Admin/js/jquery.js"></script>
    <!-- <script src="/TP/Public/Admin/js/jquery-1.11.1.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--  --> 
    <script src="/TP/Public/Admin/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="/TP/Public/Admin/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
    <script type="text/javascript" src="/TP/Public/Admin/js/vendor/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="/TP/Public/Admin/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="/TP/Public/Admin/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
    <script type="text/javascript" src="/TP/Public/Admin/js/vendor/videobackground/jquery.videobackground.js"></script>
    <script type="text/javascript" src="/TP/Public/Admin/js/vendor/blockui/jquery.blockUI.js"></script>

    <script src="/TP/Public/Admin/js/vendor/flot/jquery.flot.min.js"></script>
    <script src="/TP/Public/Admin/js/vendor/flot/jquery.flot.time.min.js"></script>
    <script src="/TP/Public/Admin/js/vendor/flot/jquery.flot.selection.min.js"></script>
    <script src="/TP/Public/Admin/js/vendor/flot/jquery.flot.animator.min.js"></script>
    <script src="/TP/Public/Admin/js/vendor/flot/jquery.flot.orderBars.js"></script>
    <script src="/TP/Public/Admin/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

    <script src="/TP/Public/Admin/js/vendor/rickshaw/raphael-min.js"></script> 
    <script src="/TP/Public/Admin/js/vendor/rickshaw/d3.v2.js"></script>
    <script src="/TP/Public/Admin/js/vendor/rickshaw/rickshaw.min.js"></script>

    <script src="/TP/Public/Admin/js/vendor/morris/morris.min.js"></script>

    <script src="/TP/Public/Admin/js/vendor/tabdrop/bootstrap-tabdrop.min.js"></script>

    <script src="/TP/Public/Admin/js/vendor/summernote/summernote.min.js"></script>

    <script src="/TP/Public/Admin/js/vendor/chosen/chosen.jquery.min.js"></script>
 <script src="/TP/Public/Admin/js/minimal.min.js"></script>
  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg-1">

 

    <!-- Preloader -->
    <!-- <div class="mask"><div id="loader"></div></div> -->
    <!--/Preloader -->

    <!-- Wrap all page content here -->
    <div id="wrap">

      


      <!-- Make page fluid -->
      <div class="row">
        




        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">
          


          <!-- Branding -->
          <div class="navbar-header col-md-2">
            <a class="navbar-brand" href="index.html">
              <strong>MIN</strong>IMAL
            </a>
            <div class="sidebar-collapse">
              <a href="#">
                <i class="fa fa-bars"></i>
              </a>
            </div>
          </div>
          <!-- Branding end -->
          <!-- <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div> -->


          <!-- .nav-collapse -->
          <div class="navbar-collapse">
                        
            <!-- Page refresh -->
            <ul class="nav navbar-nav refresh">
              <li class="divided">
                <a href="#" class="page-refresh"><i class="fa fa-refresh"></i></a>
              </li>
            </ul>
            <!-- /Page refresh -->

            <!-- Search -->
            <div class="search" id="main-search">
              <i class="fa fa-search"></i> <input type="text" placeholder="Search...">
            </div>
            <!-- Search end -->

            <!-- Quick Actions -->
            <ul class="nav navbar-nav quick-actions">
              
              <li class="dropdown divided">
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="#">
                  <i class="fa fa-tasks"></i>
                  <span class="label label-transparent-black">2</span>
                </a>

                <ul class="dropdown-menu wide arrow nopadding bordered">
                  <li><h1>You have <strong>2</strong> new tasks</h1></li>
                  <li>
                    <a href="#">
                      <div class="task-info">
                        <div class="desc">Layout</div>
                        <div class="percent">80%</div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          <span class="sr-only">40% Complete (success)</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="task-info">
                        <div class="desc">Schemes</div>
                        <div class="percent">15%</div>
                      </div>
                      <div class="progress progress-striped active progress-thin">
                        <div class="progress-bar progress-bar-cyan" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                          <span class="sr-only">45% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="task-info">
                        <div class="desc">Forms</div>
                        <div class="percent">5%</div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-orange" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                          <span class="sr-only">5% Complete (warning)</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="task-info">
                        <div class="desc">JavaScript</div>
                        <div class="percent">30%</div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                          <span class="sr-only">30% Complete (danger)</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="task-info">
                        <div class="desc">Dropdowns</div>
                        <div class="percent">60%</div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-amethyst" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li><a href="#">Check all tasks <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided">
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="#">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-transparent-black">1</span>
                </a>

                <ul class="dropdown-menu wider arrow nopadding messages">
                  <li><h1>You have <strong>1</strong> new message</h1></li>
                  <li>
                    <a class="cyan" href="#">
                      <div class="profile-photo">
                        <img src="/TP/Public/Admin/images/ici-avatar.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">Ing. Imrich Kamarel</span>
                        <span class="time">12 mins</span>
                        <div class="message-content">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a class="green" href="#">
                      <div class="profile-photo">
                        <img src="/TP/Public/Admin/images/arnold-avatar.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">Arnold Karlsberg</span>
                        <span class="time">1 hour</span>
                        <div class="message-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div class="profile-photo">
                        <img src="/TP/Public/Admin/images/profile-photo.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">John Douey</span>
                        <span class="time">3 hours</span>
                        <div class="message-content">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a class="red" href="#">
                      <div class="profile-photo">
                        <img src="/TP/Public/Admin/images/peter-avatar.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">Peter Kay</span>
                        <span class="time">5 hours</span>
                        <div class="message-content">Ut enim ad minim veniam, quis nostrud exercitation</div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a class="orange" href="#">
                      <div class="profile-photo">
                        <img src="/TP/Public/Admin/images/george-avatar.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">George McCain</span>
                        <span class="time">6 hours</span>
                        <div class="message-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                      </div>
                    </a>
                  </li>


                  <li class="topborder"><a href="#">Check all messages <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided">
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="#">
                  <i class="fa fa-bell"></i>
                  <span class="label label-transparent-black">3</span>
                </a>

                <ul class="dropdown-menu wide arrow nopadding bordered">
                  <li><h1>You have <strong>3</strong> new notifications</h1></li>
                  
                  <li>
                    <a href="#">
                      <span class="label label-green"><i class="fa fa-user"></i></span>
                      New user registered.
                      <span class="small">18 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <span class="label label-red"><i class="fa fa-power-off"></i></span>
                      Server down.
                      <span class="small">27 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <span class="label label-orange"><i class="fa fa-plus"></i></span>
                      New order.
                      <span class="small">36 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <span class="label label-cyan"><i class="fa fa-power-off"></i></span>
                      Server restared.
                      <span class="small">45 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <span class="label label-amethyst"><i class="fa fa-power-off"></i></span>
                      Server started.
                      <span class="small">50 mins</span>
                    </a>
                  </li>

                   <li><a href="#">Check all notifications <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided user" id="current-user">
                <div class="profile-photo">
                  <img src="/TP/Public/Admin/images/profile-photo.jpg" alt />
                </div>
                <a class="dropdown-toggle options" data-toggle="dropdown" href="#">
                  John Douey <i class="fa fa-caret-down"></i>
                </a>
                
                <ul class="dropdown-menu arrow settings">

                  <li>
                    
                    <h3>Backgrounds:</h3>
                    <ul id="color-schemes">
                      <li><a href="#" class="bg-1"></a></li>
                      <li><a href="#" class="bg-2"></a></li>
                      <li><a href="#" class="bg-3"></a></li>
                      <li><a href="#" class="bg-4"></a></li>
                      <li><a href="#" class="bg-5"></a></li>
                      <li><a href="#" class="bg-6"></a></li>
                    </ul>

                    <div class="form-group videobg-check">
                      <label class="col-xs-8 control-label">Video BG</label>
                      <div class="col-xs-4 control-label">
                        <div class="onoffswitch greensea small">
                          <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="videobg-check">
                          <label class="onoffswitch-label" for="videobg-check">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                          </label>
                        </div>
                      </div>
                    </div>

                  </li>

                  <li class="divider"></li>

                  <li>
                    <a href="#"><i class="fa fa-user"></i> Profile</a>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-calendar"></i> Calendar</a>
                  </li>

                  <li>
                    <a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge badge-red" id="user-inbox">3</span></a>
                  </li>

                  <li class="divider"></li>

                  <li>
                    <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="#mmenu"><i class="fa fa-comments"></i></a>
              </li>
            </ul>
            <!-- /Quick Actions -->



            <!-- Sidebar -->
            <ul class="nav navbar-nav side-nav" id="sidebar">
              
              <li class="collapsed-content"> 
                <ul>
                  <li class="search"><!-- Collapsed search pasting here at 768px --></li>
                </ul>
              </li>

              <li class="navigation" id="navigation">
                <a href="javascript:;" class="sidebar-toggle" data-toggle="#navigation">Navigation <i class="fa fa-angle-up"></i></a>

                <ul class="menu">
                  <li><a href="<?php echo U('Home/Index/index');?>"><i class="fa icon-share-alt"></i>前台首页</a></li>
                <?php if(is_array($menus['child'])): foreach($menus['child'] as $key=>$val): ?><li class="dropdown <?php if(strtoupper($val[en]) == strtoupper($c)): ?>open<?php endif; ?>">
                    <!-- ’/‘第一次出现在$val["en"]的时候 -->
                    <?php if(strpos($val["en"],"/")): ?><a href="<?php echo U($val['en']);?>">
                    <?php else: ?>
                    <a href="javascript:void(0);" class="dropdown-toggle" 
                    <?php if(strpos($val["en"],"/") == ""): ?>data-toggle="dropdown"<?php endif; ?> ><?php endif; ?>
                    <!-- 如果管理级有子级就输出子级，没子级就把管理级的A标签结束 -->                   
                      <i class="fa <?php echo ($val['icon']); ?>"></i> <?php echo ($val['name']); ?><b class="fa <?php echo !empty($value['child'])?'fa-plus dropdown-plus':'';;?> cfa "></b>
                      <!-- XML里的en等于路径的c，就是加号变减号 -->      
                    </a>
                    <?php if(!empty($val['child'])): ?><ul class="dropdown-menu">
                      <?php if(is_array($val['child'])): foreach($val['child'] as $key=>$v): ?><li>
                            <a href="<?php echo U($v['en']);?>" <?php echo strtoupper($v['en'])==strtoupper($a)?'style="color:#39C"':'';?>>
                              <i class="fa fa-caret-right"></i> <?php echo ($v['name']); ?>
                              <!-- 如果路径相等就选中它，收缩其他行 -->
                            </a>
                          </li><?php endforeach; endif; ?> 
                    </ul><?php endif; ?>

                  </li><?php endforeach; endif; ?>

                </ul>

              </li>

              
            </ul>
            <!-- Sidebar end -->





          </div>
          <!--/.nav-collapse -->





        </div>
        <!-- Fixed navbar end -->
                <!-- Page content -->
        <div id="content" class="col-md-12">

          <!-- page header -->
          <div class="pageheader">
            

            <h2><i class="fa fa-tachometer"></i> Dashboard
            <span>// Place subtitle here...</span></h2>
            
<!-- 面包屑 -->
            <div class="breadcrumbs">
              <ol class="breadcrumb">
                <li>You are here</li>
                <?php if(is_array($bread)): foreach($bread as $key=>$en): ?><li>
                      <?php if(strpos($en['en'],'/')): echo ($en["name"]); ?>
                      <?php else: ?>
                      <a href="<?php echo U('index');?>"><?php echo ($en["name"]); ?></a><?php endif; ?>
                    </li><?php endforeach; endif; ?>
              </ol>
            </div>
          </div>
          <!-- /page header -->