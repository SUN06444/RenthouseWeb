<!DOCTYPE html>
<?php 
session_start();
include_once 'Controller/ErrorSettings.php';
include('Connect/Connect.php');
include('Controller/Auth.php');
include('common/head.php');
include('common/navigation.php');
?>
<link rel="stylesheet" type="text/css" href="css/member.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script> -->
<script src="layer/layer.js" type="text/javascript" charset="utf-8" async defer></script>

<div class="form-box l-col-wrap">
  <div class="l-col form-box__content">
    <h1 class="form-box__title">Login</h1>
    <br>
    <div class="u-auto-format-text">
      <p>請點擊下方按鈕進行登入</p>
<?php
$levels = Auth::loginlevel();
if($levels){
  foreach ($levels as $level){     
?>       
      <button  type="submit" class="form__button button" value="<?php echo $level['lev_id'];?>" onclick="lev_vel(this)" style="margin-bottom: 10px;"><?php echo $level['lev_name'];?>入口 </button>

<?php
  }  
} 
?>
       <small class="form-box__addon u-auto-format-text">
      還尚未註冊嗎? <a href="register_entrance.php">註冊</a>
      </small>

    </div>
  </div>
 
</div>

<!-- Footer -->
<?php
  include('common/footer.php');
?>

<script type="text/javascript">
function lev_vel($val){
  switch($val.value) {
    case '1': 
      // alert ($vel.value)
     window.location.href = "login.php?val=1";
      break;
    case '2': 
      // alert (lev_id);  
      window.location.href = "login.php?val=2";
      break;
    case '3': 
      // alert (lev_id);  
      window.location.href = "login.php?val=3";
      break;
  }
}
</script>

<script>
  <?php if(isset($_GET['message'])){?>
        <?php if($_GET['message']=='nologin'){ ?>  //還沒登入
           layer.alert('還尚未登入！', {
            skin: 'layui-layer-lan' //样式类名
            ,closeBtn: 0
            ,anim: 5 //动画类型
          });  
        <?php } ?>

         <?php if($_GET['message']=='notlandlord'){ ?>  //非房東無刊登權限
           layer.alert('非房東，無刊登權限！', {
            skin: 'layui-layer-lan' //样式类名
            ,closeBtn: 0
            ,anim: 5 //动画类型
          });  
        <?php } ?>
  <?php } ?>
</script>