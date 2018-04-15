<?php
session_start();
include_once 'Controller/ErrorSettings.php';
?>

<?php
include('Connect/Connect.php');
include ('Controller/Auth.php');
include ('Controller/Url.php');
include ('Controller/Search.php');
include('Controller/Collect.php');
include('common/head.php');
include('common/navigation.php');
?>
  <link rel="stylesheet" type="text/css" href="css/member.css">
<link rel="stylesheet" type="text/css" href="css/tab.css">
  <link rel="stylesheet" type="text/css" href="layui/css/layui.css">
 
<?php

  $limitfive = Collect::limitfive();
  foreach ($limitfive as $limit){
      $limitnum=$limit['limitnum'];
  }
?>

<?php
  if(isset($_POST['collect'])){
     $mem_id = $_POST['mem_id'];
    if($mem_id ==''){
?>
<script type="text/javascript">
    alert('請加入會員，即可收藏！');          
</script>
<?php
    }else if($mem_id !='' && $limitnum>5){
?>
<script type="text/javascript">
    alert('最多只能收藏五筆');          
</script>
<?php
    }else if($mem_id !=''){
     $collect = Collect::collecthouse();
    $record_add_collect = Collect::record_add_collect();
?>
<script type="text/javascript">
    alert('收藏成功～');          
</script>
<?php
    }
  }

   
?>


<?php include("infohous.php");?>
 
<ul class="tablist" role="tablist">
   <li class="tab" role="tab"><a href="#panel1"><i class="layui-icon">&#xe715;</i>&nbsp; 位置圖  </a></li>
  <li class="tab" role="tab"><a href="#panel2"><i class="layui-icon">&#xe60b;</i>&nbsp;房屋介紹</a></li>
  <li class="tab-menu">
    <div class="line"></div>
    <div class="line"></div>
  </li>
</ul>

    <div class="tabpanel show" id="panel1" role="tabpanel">
      <?php include("map.php");?>
    </div>


      <div class="tabpanel" id="panel2" role="tabpanel" >
           <div class="table">
          <?php include("table.php");?>
        </div>
    </div>

<br>

<script src="js/tab.js" type="text/javascript" charset="utf-8" async></script>


    <!-- Footer -->
<?php
  include('common/footer.php');
?>
