<?php
session_start();
include_once 'Controller/ErrorSettings.php';
?>
<?php

include('Connect/Connect.php');
include ('Controller/Auth.php');
include ('Controller/Url.php');
include('Controller/Search.php');

    $s = Auth::check();
      if($s){
        //return redirect('login.php?meg=nonlogin'); //沒有登入的話,跳到登入畫面
        $Auth = new Auth();
      //}else{
        //$Auth = new Auth();
      }
?>

<?php
  include('common/head.php')
?>
<link rel="stylesheet" type="text/css" href="layui/css/layui.css">
<link rel="stylesheet" type="text/css" href="css/one.css">

<?php
  include('common/navigation.php');
?>

  
    <style>
       #map {
        margin: auto;
        height: 400px;
        width: 80%;
       }
    </style>
    <div class="mappp" style="text-align: center;margin-bottom: 25px;" >
    <input class="layui-btn layui-btn-lg layui-btn-danger" type="button" value="警局分布圖" onclick="location.href='/renthouse/map_police.php'">
    <input class="layui-btn layui-btn-lg layui-btn-danger" type="button" value="全台醫院分布圖" onclick="location.href='/renthouse/map_hospital.php'">
        <input class="layui-btn layui-btn-lg layui-btn-danger" type="button" value="診所分布圖" onclick="location.href='/renthouse/map_clinic.php'">
      </div>
       <div style="font-size: x-large;text-align: center;margin: auto;
    width: 80%;" ><p class="layui-bg-green demo-carousel">全台醫院分布圖<br><皆經過評鑑，區分為區域醫院、醫學中心、地區醫院></p></div>



<p><p>
    
    
      <?php

      include("hospital.php");
      ?>
      <br>

<?php
  include('common/footer.php');
?>