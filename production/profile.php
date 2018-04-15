<?php
session_start();
include_once '../Controller/ErrorSettings.php';
?>
<?php
include('../Connect/Connect.php');
include('../Controller/Url.php');
include('../Controller/Auth.php');
include('../Controller/Collect.php');
?>

<?php
    //確認使用者是否登入，根據確認結果分別給予不同的服務
    $loggedin = Auth::check();
    $level1 = Auth::checklev_value1();
    $level2 = Auth::checklev_value2();

?>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>會員個人資料後臺</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>個人資料管理</span></a>
            </div>

            <div class="clearfix"></div>

          <?php include("sidebar.php");?>


<?php
  if(isset($_POST['update_email'])){
    $update_email = Auth::update_email();
  }
?>
<?php
  if(isset($_POST['head_pic'])){
    $head_pic = Auth::head_pic();
  }
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <br>
                  </div>

                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
<?php
if($level1){
?>

                    <h2>會員身分 - 『房客』 </h2>
<?php
}else if($level2){
?>
                    <h2>會員身分 - 『房東』 </h2>
<?php
}
?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
<?php

        $user_head = Auth::user_head();

        if(!empty($user_head)){
          foreach ($user_head as $userhead){
            if($userhead['head']!=''){


?>

                          <img class="img-responsive avatar-view" width="200" height="200" src="<?php echo $userhead['head'];?>" alt="Avatar" title="Change the avatar">
<?php
        }else{
?>

                          <img class="img-responsive avatar-view" src="images/user.png" alt="Avatar" title="Change the avatar">
<?php
            }
          }
        }
?>
                        </div>
                      </div>
<?php
if($level1){
?>
                      <h3>房客姓名</h3>
<?php
}else if($level2){
?>
                      <h3>房東姓名</h3>
<?php
}
?>
                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> 帳號：<?php echo $_SESSION['account'] ;?>
                        </li>

                        <li>
                          <i class="glyphicon glyphicon-envelope"></i> 信箱：<?php echo $_SESSION['email'] ;?>
                        </li>

<!--
                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                        </li>
-->
                      </ul>

                      <br />
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
<?php
  if($level1){ //若權限等級為1=>房客
?>
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><i class="glyphicon glyphicon-signal"></i>
 Activity - 近期收藏</a>
                          </li>
<?php
  }else{
?>
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><i class="glyphicon glyphicon-signal"></i>
 Activity - 房屋紀錄</a>
                          </li>
<?php
}
?>                        
<?php
  if($level1){ //若權限等級為1=>房客
?>
                           <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-edit m-right-xs"></i> 學生證</a>
                          </li>
<?php
  }else{
?>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-edit m-right-xs"></i> 房屋證明文件</a>
                          </li>
<?php
}
?>


                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-edit m-right-xs"></i> Edit - 更改信箱</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><i class="glyphicon glyphicon-picture"></i> Photograph - 上傳大頭貼</a>
                          </li>
                        </ul>





                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

<?php
if($level1){
        $record = Collect::record();
        if(!empty($record)){
        foreach ($record as $record_activity){
?>

                            <!-- start recent activity -->
                            <ul class="messages">
                              <li>
<?php
        $user_head = Auth::user_head();

        if(!empty($user_head)){
          foreach ($user_head as $userhead){
            if($userhead['head']!=''){


?>
                                <img src="<?php echo $userhead['head'];?>" class="avatar" alt="Avatar">
<?php
        }else{
?>
                                <img src="images/user.png" class="avatar" alt="Avatar">
<?php
            }
          }
        }
?>

<?php
  if($record_activity['delete_date']=='0000-00-00 00:00:00'){     
            $add_month = date('m',strtotime($record_activity['add_date']));
          switch ($add_month) {
            case '1':
              $add_month = 'JAN';
              break;
           case '2':
              $add_month = 'FEB';
              break;
           case '3':
              $add_month = 'MAR';
              break;
           case '4':
              $add_month = 'APR';
              break;
           case '5':
              $add_month = 'MAY';
              break;
           case '6':
              $add_month = 'JUN';
              break;
           case '7':
              $add_month = 'JUL';
              break;
           case '8':
              $add_month = 'AUG';
              break;
           case '9':
              $add_month = 'SEP';
              break;
           case '10':
              $add_month = 'OCT';
              break;
           case '11':
              $add_month = 'NOV';
              break;
           case '12':
              $add_month = 'DEC';
              break;
            default:
              $add_month = 'no';
              break;
          }
?>

                                <div class="message_date">
                                  <h3 class="date text-info"><?php echo date('d',strtotime($record_activity['add_date']));?></h3>
                                  <p class="month"><?php echo $add_month;?></p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Record - add - ecollect</h4>
                                  <blockquote class="message">於<?php echo $record_activity['add_date'];?>，收藏了一筆房屋收藏 - 房屋名稱為『<?php echo $record_activity['housename'];?>』。</blockquote>
                                  <br />
                                </div>
<?php
  }
?>                               
<?php
  if($record_activity['add_date']=='0000-00-00 00:00:00'){  
   $delete_month = date('m',strtotime($record_activity['delete_date']));
          switch ($delete_month) {
            case '1':
              $delete_month = 'JAN';
              break;
           case '2':
              $delete_month = 'FEB';
              break;
           case '3':
              $delete_month = 'MAR';
              break;
           case '4':
              $delete_month = 'APR';
              break;
           case '5':
              $delete_month = 'MAY';
              break;
           case '6':
              $delete_month = 'JUN';
              break;
           case '7':
              $delete_month = 'JUL';
              break;
           case '8':
              $delete_month = 'AUG';
              break;
           case '9':
              $delete_month = 'SEP';
              break;
           case '10':
              $delete_month = 'OCT';
              break;
           case '11':
              $delete_month = 'NOV';
              break;
           case '12':
              $delete_month = 'DEC';
              break;
            default:
              $delete_month = 'no';
              break;
          }
?>
                                 <div class="message_date">
                                  <h3 class="date text-info"><?php echo date('d',strtotime($record_activity['delete_date']));?></h3>
                                  <p class="month"><?php echo $delete_month;?></p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Record - delete - collect</h4>
                                  <blockquote class="message">於<?php echo $record_activity['delete_date'];?>，刪除了一筆房屋收藏 - 房屋名稱為『<?php echo $record_activity['housename'];?>』。</blockquote>
                                  <br />
                                </div>
<?php
  }
?>
                              </li>                         

                            </ul>
<?php
  }
}else{
  echo " -- 近期並沒有任何收藏紀錄 --";
}
}
?>

                            <!-- end recent activity -->
<?php
 if($level2){
 $house_add_time = Auth::house_add_time();
  if(!empty($house_add_time)){
              foreach ($house_add_time as $time){
                
?>
          <div class="message_wrapper">
            <blockquote class="message">於<?php echo $time["mday"];?>，新增了一筆房屋。</blockquote>
            <br />
          </div>
<?php
    }
  }
}

?>


                          </div>

                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
<?php
  if($level1){ //若權限等級為1=>房客
?>
                            <span class="section">證明檔案 - 學生證 </span><i class="glyphicon glyphicon-ok">已審核通過</i>
                                  <div class="col-md-9">
                                    <div class="img-container">
                                      <img id="image" src="../<?php echo $_SESSION['file'];?>" alt="Picture">
                                    </div>
                                  </div>
<?php
  }else if($level2){
?>
                            <span class="section">證明檔案 - 房屋證明文件 </span><i class="glyphicon glyphicon-ok">已審核通過</i>

                                  <div class="col-md-9">
                                    <div class="img-container">
                                      <img id="image" src="../<?php echo $_SESSION['file'];?>" alt="Picture">
                                    </div>
                                  </div>


<?php
  }
?>
                        </div>

                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

                            <form  name="update_email" id="update_email" action="/renthouse/production/profile.php?update_email" method="post" class="form-horizontal form-label-left" novalidate enctype="multipart/form-data" onfocus="">


                              <span class="section">Personal Info</span>

                              <div class="item form-group">
                                 <div class="col-md-6 col-md-offset-2">
                                <label for="email">目前信箱 ： <span class="required"><?php echo $_SESSION['email'] ;?></span>
                                </label>
                              </div>
                              </div>

                              <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">更改信箱 <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="hidden" name="account" value="<?php echo $_SESSION['account'] ;?>"></input>
                                  <input type="hidden" name="email" value="true"></input>

                                  <input type="email" id="email" name="email"  class="form-control col-md-7 col-xs-12" required="true">
                                </div>
                              </div>

                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-md-offset-5">
                                  <button id="update_email" name="update_email" type="submit" value="update_email" class="btn btn-primary">確定更改</button>

                                </div>
                              </div>
                            </form>
                            <!-- end user projects -->

                          </div>



                          <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                            <form  name="head_pic" id="head_pic" action="/renthouse/production/profile.php?head_pic" method="post" class="form-horizontal form-label-left" novalidate enctype="multipart/form-data" onfocus="">
                              <p>-- 可自行選擇是否上傳大頭貼 --</p>

  <br>
                                <div class="btn-group">
                                 <input type="hidden" name="account" value="<?php echo $_SESSION['account'] ;?>" required="true"></input>
                                  <div class="file_upload">

                                  <input type="file" name="file"  id="file" data-target="#pictureBtn"  required="true"/>
                                  </div>
                                </div>
                                <br><br>
                                    <button id="head_pic" name="head_pic" type="submit" value="head_pic" class="btn btn-success">檔案上傳</button>
                            </form>
                          </div>

                        </div>
                      </div>
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
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
