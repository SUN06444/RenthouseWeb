<?php 
include_once 'Controller/ErrorSettings.php';
include('Connect/Connect.php');
include('Controller/Auth.php');
include('common/head.php');
include('common/navigation.php');
?>
<link rel="stylesheet" type="text/css" href="css/member.css">
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!-- <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script> -->
<!--<script src="layer/layer.js" type="text/javascript" charset="utf-8" async defer></script>-->

<div class="form-box l-col-wrap">
  <div class="l-col form-box__content">
    <h1 class="form-box__title">Register</h1>
    <br>
    <div class="u-auto-format-text">
      <p>請點擊下方按鈕進行註冊</p>
<?php
$levels = Auth::registerlevel();
if($levels){
  foreach ($levels as $level){     
?>    
      <button  type="submit" class="form__button button" value="<?php echo $level['lev_id'];?>" onclick="lev_value(this)" style="margin-bottom: 10px;">註冊<?php echo $level['lev_name'];?> </button>
      <!--<input name="submit" type="submit" class="form__button button" value="<?php  echo  $_SESSION['lev_id']; ?>. 註冊<?php   echo $level['lev_name'];?>"  style="margin-bottom: 10px;" onclick="lev_vel(vel)">-->
<?php
  }  
} 
?>    
      <small class="form-box__addon u-auto-format-text">
      已經註冊了嗎? <a href="login_entrance.php">登入</a>
      </small>

    </div>

  </div>

</div>

<!-- Footer -->
<?php
  include('common/footer.php');
?>

<script type="text/javascript">
function lev_value($val){
  switch($val.value) {
    case '1': 
      // alert ($vel.value)
     window.location.href = "register.php?val=1";
      break;
    case '2': 
      // alert (lev_id);  
      window.location.href = "register.php?val=2";
      break;
  //} 
  }
}
</script>