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

    <title>Admin - 管理平台</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
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
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Admin - 管理平台</span></a>
            </div>

            <div class="clearfix"></div>

        <?php include("sidebar_admin.php");?>

<?php
if(isset($_GET['landlord_id'])){
  $_SESSION['check_landlord_id'] =$_GET['landlord_id'];
  $verify_landlord_checkok = Admin::verify_landlord_checkok();
?>
<script type="text/javascript">
  alert('審核成功！');
</script>
<?php
}
?>
<?php
if(isset($_GET['verify_landlord_nopass'])){
  $verify_landlord_nopass = Admin::verify_landlord_nopass();
?>
<script type="text/javascript">
  alert('審核不通過，需退件！');
</script>
<?php
}
?>

<?php
if(isset($_GET['tenant_id'])){
  $_SESSION['check_tenant_id'] = $_GET['tenant_id'];
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
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> 會員總人數</span>
<?php
  $count_member = Admin::count_all_member_num();
    if(!empty($count_member)){
      foreach ($count_member as $num){

?>
              <div class="count green"><?php echo $num['num'];?><span>/people</span></div>
<?php
  }
}
?>
            </div>
           
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> 房客總人數</span>
<?php
  $count_tentant = Admin::count_all_tenant_num();
    if(!empty($count_tentant)){
      foreach ($count_tentant as $num){

?>
              <div class="count"><?php echo $num['num'];?><span>/people</span></div>
<?php
  }
}
?>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> 房東總人數</span>
<?php
  $count_landlord = Admin::count_all_landlord_num();
    if(!empty($count_landlord)){
      foreach ($count_landlord as $num){

?>
              <div class="count"><?php echo $num['num'];?><span>/people</span></div>
<?php
  }
}
?>              
            </div>
             <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> 總房屋筆數</span>
<?php
  $count_houses = Admin::count_all_houses_num();
    if(!empty($count_houses)){
      foreach ($count_houses as $num){

?>
              <div class="count green"><?php echo $num['num'];?><span>/package</span></div>
<?php
  }
}
?>               
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> 待審核筆數</span>
<?php
  $noverify = Admin::count_all_noverify_num();
    if(!empty($noverify)){
      foreach ($noverify as $num){

?>
              <div class="count"><?php echo $num['num']-1;?></div>
<?php
  }
}
?>             </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> 已退件次數</span>
<?php
  $count_withdrawals = Admin::count_all_withdrawals_num();
    if(!empty($count_withdrawals)){
      foreach ($count_withdrawals as $num){

?>              
              <div class="count red"><?php echo $num['num']; ?><span>/package</span></div>
<?php
  }
}
?>              
            </div>
          </div>

<?php include("verify_landlord.php");?>
<p>
<?php include("verify_tenant.php");?>
   
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
