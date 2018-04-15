<?php
session_start();
include_once '../Controller/ErrorSettings.php';
?>
<?php
include('../Connect/Connect.php');
include('../Controller/Url.php');
include('../Controller/Auth.php');
include('../Controller/Collect.php');
include('../Controller/Admin.php');
?>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>會員審核系統 </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>會員審核系統</span></a>
            </div>

            <div class="clearfix"></div>

              <?php include("sidebar_admin.php");?>

        <!-- /top navigation -->
<?php
if(isset($_GET['id'])){
  $verify_tenant_checkok = Admin::verify_tenant_checkok();
?>
<script type="text/javascript">
  alert('審核成功！');
</script>
<?php
}
?>
<?php
if(isset($_GET['verify_tenant_nopass'])){
  $verify_tenant_nopass = Admin::verify_tenant_nopass();
?>
<script type="text/javascript">
  alert('審核不通過，需退件！');
</script>
<?php
}
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Verify Member <small>- data detail</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>審核 - 房客資料 （tenant - data）</h2>
                    <ul class="nav navbar-right panel_toolbox">

                       <li style="margin-left:68%;"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>以下狀態會呈現審核狀態，請管理人員仔細遵守審核規範。</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 5%">#</th>
                          <th style="width: 10%">房客名稱</th>
                          <th style="width: 13%">房客帳號</th>
                          <th style="width: 20%">房客信箱</th>
                          <th>申請日期</th>
                          <th style="width: 15%">學生證明文件</th>
                          <th>確認審核 Verify</th>

                        </tr>
                      </thead>
<?php
$number = 1;
  $verify_tenant_data = Admin::verify_tenant_data();

    if(!empty($verify_tenant_data)){
      foreach ($verify_tenant_data as $verify_tenant){
   
?>
                      <tbody>
                        <tr>
                          <td><?php echo $number++;?></td>
                          <td>
                            <a><?php echo $verify_tenant['name']; ?></a>
                           
                          </td>
                          <td>
                            <a><?php echo $verify_tenant['account']; ?></a>
                          </td>
                         
                          <td>
                            <?php echo $verify_tenant['email']; ?>
                          </td>
                          
                          <td>
                            <?php echo $verify_tenant['mday']; ?>
                          </td>

                          <td>
                            <!-- Large modal -->
&nbsp;&nbsp;
                            <button type="button" class="btn btn-Primary" data-toggle="modal" data-target=".bs-example-modal-lg<?php  echo $verify_tenant['mem_id']; ?>"><i class="fa fa-folder"></i> File</button>
                             

                            <div class="modal fade bs-example-modal-lg<?php echo $verify_tenant['mem_id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">待審核資料</h4>
                                  </div>
                                  <div class="modal-body">
                                    <h4><?php echo $verify_tenant['name']; ?> - 學生證明文件：</h4>
                                    <p>請管理人員仔細確認檔案是否符合規定，檢查完畢，即可關閉，"進行確認審核"。</p>
                                     <img width="100%" height="75%" id="image" src="../<?php echo $verify_tenant['file']; ?>" alt="Picture">

                                     
                                  </div>
                                
                                </div>
                              </div>
                            </div>


                          <td>
                            <a href="/renthouse/production/verify.php?verify_tenant_nopass=<?php echo $verify_tenant['mem_id']; ?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> No Pass </a>
                            <a href="/renthouse/production/verify.php?id=<?php echo $verify_tenant['mem_id']; ?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-ok"></i> Pass </a>
                          </td>
                 
                         
                        </tr>
                        <tr>           
                        </tr>
<?php
  }
}
?>
                      </tbody>
                    </table>
                    <!-- end project list -->

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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
