 <?php
session_start();
include_once '../Controller/ErrorSettings.php';
?>
<?php
include('../Connect/Connect.php');
include('../Controller/Url.php');
include('../Controller/Auth.php');
include('../Controller/Search.php');
include('../Controller/Collect.php');
?>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>所有好友</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>房客平台</span></a>
            </div>

            <div class="clearfix"></div>

           <?php include("sidebar.php");?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>All Members</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                 <div class="row">

                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <ul class="pagination pagination-split">
                          <li><a href="allmember.php">所有會員</a></li>
                          <li><a href="allmember.php?view_all_tenant">會員身分 - 房客</a></li>
                          <li><a href="allmember.php?view_all_landlord">會員身分 - 房東</a></li>
                        </ul>
                      </div>

                      <div class="clearfix"></div>
 
<?php
        if(isset($_GET['view_all_tenant'])){
          $user_head = Auth::view_all_tenant();
        }else if(isset($_GET['view_all_landlord'])){
          $user_head = Auth::view_all_landlord();
        }else{
          $user_head = Auth::allmember();
        }
        
        if(!empty($user_head)){
          foreach ($user_head as $userhead){
            $level = $userhead['level'];
            switch ($level) {
              case '1':
                $level = '房客';
                $brief = 'Member - Landlord';
                break;
             case '2':
              $level = '房東';
              $brief = 'Member - Tenant';

              break;
              
              default:
                # code...
                break;
            }

?>  
   
      
          <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i><?php echo $brief;?></i></h4>
                            <div class="left col-xs-7">
                              <h2><?php echo $userhead['name']?></h2>
                              <p><strong>身份： </strong><?php echo $level;?> </p>
                              <p><strong>租金： </strong><?php echo $userhead['rental']." 元/月";?> </p>
                              <p><strong>房屋名稱： </strong><?php echo $userhead['housename'];?> </p>

                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> Email:<?php echo $userhead['email'];?> </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
<?php

       
            if($userhead['head']!=''){


?>
                              <img  src="<?php echo $userhead['head'];?>" alt="" class="img-circle img-responsive">
<?php
        }else{
?>           
                              <img src="images/user.png" alt="" class="img-circle img-responsive">
<?php
            }
 
?>                  
                            </div>
                          </div>
                     
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                               <!--
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            -->
                            </div>

                          
  
  
                            <div class="col-xs-12 col-sm-6 emphasis">
                      
                              <?php
                              if($level=='房東'){

                              ?>


 

                               <button type="button" style="margin-left:10%" class="btn btn-success btn-xs"  onclick="location.href='/renthouse/houseinfo.php?house_id=<?php echo  $userhead['house_id'];?>'"> 
                                <i class="fa fa-user"> </i> 查看房屋                             
                              </button>


                              <button type="button"  class="btn btn-primary btn-xs"  onclick="location.href='要前往的網頁連結'">
                                <i class="fa fa-user"> </i> 加入好友
                              </button>
 

                              <?php
                              }
                              ?>

                              <?php
                              if($level=="房客"){
                              ?>
                               <button type="button" style="margin-left:25%; " class="btn btn-primary btn-xs"  onclick="location.href='要前往的網頁連結'">
                                <i class="fa fa-user"> </i> 加入好友
                              </button>
                              <?php  
                              }
                              ?>

                            </div>

                          </div>                     
                        </div>
                      </div>
<?php
}
}
?>
 
                 

                    

                    
                    </div>
                  </div>               
                </div> 
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>