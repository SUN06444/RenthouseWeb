<?php
session_start();

include_once 'Controller/ErrorSettings.php';
?>
<?php

include ('Connect/Connect.php');
include ('Controller/Url.php');
include('Controller/Auth.php');

    if(isset($_POST['loggedin_1'])){
        $post = Auth::loggedin_1($_POST);
       
    }

    if(isset($_POST['loggedin_2'])){
        $post = Auth::loggedin_2($_POST);
    }

        if(isset($_POST['loggedin_3'])){
        $post = Auth::loggedin_3($_POST);
    }


?>

<?php
  include('common/head.php');
  include('common/navigation.php');
?>
<link rel="stylesheet" type="text/css" href="css/member.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>-->
<script src="layer/layer.js" type="text/javascript" charset="utf-8" async defer></script>     

<?php 
$lev_value = Auth::checklev_value();
$val_id = $_SESSION['val_id'];
if($val_id==""){
  return redirect ("login_entrance.php");
}
?> 

<?php if($val_id=='1'){ ?>
<div class="form-box l-col-wrap">
  
  <div class="l-col form-box__form">
        <h1 class="form-box__title">Login For Tenant<p><p>請輸入房客的帳號密碼進行登入</p></h1>
        <br>
   
    <form name="loggedin" id="loggedin" method="post" class="form form--log-in" enctype="multipart/form-data">
      <input type="hidden" name="loggedin_1" value="true">
      <label for="account" class="form__label">房客帳號：</label>
      <input id="account" name="account" type="text" class="form__field" placeholder="請輸入房客帳號" required="true" autofocus="">
      
      <label for="password" class="form__label">房客密碼：</label>
      <input id="inputPassword" name="password" type="password" class="form__field" placeholder="請輸入房客密碼" required="true">

      <br>
      <input name="submit" type="submit" class="form__button button" value="Login">
    </form>
    
    <small class="form-box__addon u-auto-format-text">
      還尚未註冊嗎? <a href="register_entrance.php?val=1">註冊</a>
    </small>
      <br>
    <small class="form-box__addon u-auto-format-text">
      不是房客? <a href="login_entrance.php">返回</a>
    </small>
   
  </div>
</div>
<?php
  }
?>

<?php if($val_id=='2'){ ?>
<div class="form-box l-col-wrap">
  
  <div class="l-col form-box__form">
        <h1 class="form-box__title">Login For Landlord<p><p>請輸入房東的帳號密碼進行登入</p></h1>
        <br>
   
     <form name="loggedin" id="loggedin" method="post" class="form form--log-in" enctype="multipart/form-data">
      <input type="hidden" name="loggedin_2" value="true">
      <label for="account" class="form__label">房東帳號：</label>
       <input id="account" name="account" type="text" class="form__field" placeholder="請輸入房東帳號" required="true" autofocus="">
      
      <label for="password" class="form__label">房東密碼：</label>
      <input id="password" name="password" type="password" class="form__field" placeholder="請輸入房客密碼" required="true">
      

      <br>
      <input name="submit" type="submit" class="form__button button" value="Login">
    </form>
    
    <small class="form-box__addon u-auto-format-text">
      還尚未註冊嗎? <a href="register_entrance.php?val=2">註冊</a>
    </small>
      <br>
    <small class="form-box__addon u-auto-format-text">
      不是房東? <a href="login_entrance.php">返回</a>
    </small>
   
  </div>
</div>
<?php
  }
?>

<?php if($val_id=='3'){ ?>
<div class="form-box l-col-wrap">
  
  <div class="l-col form-box__form">
        <h1 class="form-box__title">Login For administrator<p><p>請輸入管理人員的帳號密碼進行登入</p></h1>
        <br>
   
    <form name="loggedin" id="loggedin" method="post" class="form form--sign-up" enctype="multipart/form-data">
      <input type="hidden" name="loggedin_3" value="true">
      <label for="account" class="form__label">管理人員帳號：</label>
      <input name="account" type="account" class="form__field" placeholder="請輸入管理人員帳號" required="true" autofocus="">
      
      <label for="password" class="form__label">管理人員密碼：</label>
      <input name="password" type="password" class="form__field" placeholder="請輸入管理人員密碼" required="true" >
      

      <br>
      <input name="submit" type="submit" class="form__button button" value="Login">
    </form>
    
    
      <br>
    <small class="form-box__addon u-auto-format-text">
      不是管理人員? <a href="login_entrance.php">返回</a>
    </small>
   
  </div>
</div>
<?php
}
?>


<!-- Footer -->
<?php
  include('common/footer.php');
?>

<script>
  <?php if(isset($_GET['message'])){?>
        <?php if($_GET['message']=='error'){ ?>  //於Auth.php 進行驗證帳號不會重複
           layer.alert('帳號密碼輸入錯誤，或者身分尚未審核通過', {
            skin: 'layui-layer-molv' //样式类名
            ,closeBtn: 0
          });  
        <?php } ?>
  <?php } ?>
</script>