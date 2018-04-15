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
    width: 80%;" ><p class="layui-bg-green demo-carousel">診所分布圖<br>目前顯示範圍：台中(太平區)</p></div>

<div style="font-size: xx-large;text-align: center;" >
       <from> <button class="layui-btn layui-btn-lg layui-btn-normal">臺北</button> </from>
       <from> <button class="layui-btn layui-btn-lg layui-btn-normal">新北</button> </from>
       <from> <button class="layui-btn layui-btn-lg layui-btn-normal">桃園</button> </from>
       <from> <button class="layui-btn layui-btn-lg layui-btn-red">台中</button> </from>
       <from> <button class="layui-btn layui-btn-lg layui-btn-normal">雲林</button> </from>
       </div>




<p><p>
    
    
      <?php

      include("clinic.php");
      ?>
      <br>

<?php
  include('common/footer.php');
?>