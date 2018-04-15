<?php
session_start();

include_once 'Controller/ErrorSettings.php';
?>
<?php

include('Connect/Connect.php');
include ('Controller/Auth.php');
include ('Controller/Url.php');
include('Controller/Search.php');


?>

<?php
  include('common/head.php')
?>
<link rel="stylesheet" type="text/css" href="layui/css/layui.css">
<link rel="stylesheet" type="text/css" href="css/one.css">



<?php
  include('common/rapidsearch.php');
?>


<main class="app--core">

<?php
  include('common/navigation.php');
?>


  <section class="rslt">
    <nav class="rslt__view">
 <?php
 $_SESSION['school']=null;
    if(isset($_GET['school'])){
      $_SESSION['school'] = $_GET['school'];
    }
    if($_SESSION['school']!=null){

?>
      <p class="rslt__view__dtl" style="color: cornflowerblue";>-- 搜尋 <strong><?php echo $_SESSION['school'];?></strong>  結果--</p> 
<?php
}
?>

      <div class="rslt__view__acts">
         <form>
        <button class="btn__fl state--active" js-view-grid><i class="btn__seg ion ion-grid"></i></button>
        <button class="btn__fl" js-view-rows><i class="btn__seg ion ion-navicon"></i></button>
        <button class="btn__fl" js-view-map><i class="btn__seg ion ion-ios-location"></i></button>

        <label class="ui-dd">
            <select name="result-sort" id="">
              <option value="relevant">價格↑</option>
              <option value="relevant">價格↓</option>
            </select>
            <i class="ion ion-ios-arrow-down"></i>
          </label>
              </form>

      </div>
    </nav>

    <ul class="rslt__feed">
<?php 
  $mysqli = Connect::conn();
  $search = new Search();
  $houseinfo = $search->houseinfo();
    if(!empty($houseinfo)){
      foreach ($houseinfo as $house_info){
?>

      <li class="feed__itm" js-result-item><!--item 1 -->
        <div class="feed__itm__inr">
          <div class="feed__itm__img" style="background-image: url('<?php echo $house_info['file1'];?>')" >

            <span class="feed__itm__prc">$<?php echo $house_info['rental'];?> 元/月</span>
            <button class="btn__fl btn--fav" js-item-fav>
              <i class="btn__seg ion ion-android-favorite-outline"></i>
              <i class="btn__seg ion ion-android-favorite"></i>
            </button>
          </div>
          <h5 class="feed__itm__ttl"><?php echo $house_info['housename'];?></h
            >
          <p class="feed__itm__lbl lbl--1"><br>by owner&nbsp;-&nbsp;
            <span><?php echo '#'.$house_info['school'].' ';?>
                  <?php echo '#'.$house_info['housetype'].' ';?>
                  <?php echo '#'.$house_info['rental'].' ';?>
                  <?php echo '#'.$house_info['lease_term'].' ';?>
<br>
                  <?php echo '#'.$house_info['material'].' ';?>
            </span></p>

          <button style="float: right;"class="layui-btn layui-btn-radius layui-btn-normal" type="button" onclick="javascript:location.href='houseinfo.php?<?php echo  "house_id=".$house_info['house_id'];?>'">查看房屋</button>
        </div>
      </li><!--@end feed item-->
 <?php
      }
    }
?> 

  
    </ul><!--@end result feed-->
<!--
   
    <footer class="feed__pgr">
      <button class="btn__rds pgr__itm pgr__str"><i class="btn__seg ion ion-ios-arrow-left"></i><i class="btn__seg ion ion-ios-arrow-left"></i></button>
      <button class="btn__rds pgr__itm pgr__prev"><i class="btn__seg ion ion-ios-arrow-left"></i></button>
      <button class="btn__rds pgr__itm"><span>1 - 9</span></button>
      <button class="btn__rds pgr__itm"><span>10 - 19</span></button>
      <button class="btn__rds pgr__itm"><span>20 - 29</span></button>
      <button class="btn__rds pgr__itm state--selected"><span>30 - 39</span></button>
      <button class="btn__rds pgr__itm"><span>40 - 49</span></button>
      <button class="btn__rds pgr__itm"><span>50 - 59</span></button>
      <button class="btn__rds pgr__itm"><span>60 - 69</span></button>
      <button class="btn__rds pgr__itm pgr__next"><i class="btn__seg ion ion-ios-arrow-right"></i></button>
      <button class="btn__rds pgr__itm pgr__end"><i class="btn__seg ion ion-ios-arrow-right"></i><i class="btn__seg ion ion-ios-arrow-right"></i></button>
    </footer>
    -->
  <!-- Footer -->


<?php
  include('common/footer.php');
?>
<script src="js/one.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="js/rapid.js" type="text/javascript" charset="utf-8" async defer></script>

