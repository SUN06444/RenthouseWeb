<?php 
include_once 'Controller/ErrorSettings.php';
include ('Controller/Auth.php');
?>
<?php
  include('common/head.php');
  include('common/navigation.php');
?>
<link rel="stylesheet" type="text/css" href="css/member.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="layer/layer.js" type="text/javascript" charset="utf-8" async defer></script>

<link rel="stylesheet" type="text/css" href="css/price.css">
<div class="w-table">
  <div class="w-table-cell">
    <div class="w-container">
      <div class="w-card color-violet">
        <div class="card-header">
          <div class="w-title">
            一般訪客
          </div>
          <div class="w-price">
            Free
          </div>
          <div class="container-button">
            <div class="w-button">
            <a class="w-button" href="index.php" target="_blank">Not Sign up </a>
            </div>
          </div>
        </div>
        <div class="card-content">
          <div class="w-item">
            <span>X </span>Email通知
          </div>
          <div class="w-item">
            <span>X </span>預約房東服務
          </div>
          <div class="w-item">
            <span>X </span>房屋比較系統
          </div>
           <div class="w-item">
            <span>X </span>評價功能
          </div>
           <div class="w-item">
            <span>X </span>聊天功能
          </div>
        </div>
      </div>
      <div class="w-card color-green">
        <div class="card-header">
          <div class="w-title">
            房客(學生)
          </div>
          <div class="w-price">
            Free
          </div>
          <div class="container-button">
            <div class="w-button">
            <a class="w-button" href="register_entrance.php" target="_blank">Sign up </a>
            </div>
          </div>
        </div>
        <div class="card-content">
          <div class="w-item">
            <span>V </span>Email通知
          </div>
          <div class="w-item">
            <span>V </span>預約房東服務
          </div>
          <div class="w-item">
            <span>V </span>房屋比較系統
          </div>
          <div class="w-item">
            <span>V </span>評價房東功能
          </div>
          <div class="w-item">
            <span>V </span>聊天功能
          </div>
        </div>
      </div>
      <div class="w-card color-blue">
        <div class="card-header">
          <div class="w-title">
            房東
          </div>
          <div class="w-price">
            Free
          </div>
          <div class="container-button">
            <div class="w-button">
            <a class="w-button" href="register_entrance.php" target="_blank">Sign up </a>
            </div>
          </div>
        </div>
        <div class="card-content">
          <div class="w-item">
            <span>V </span>刊登房屋 
          </div>
          <div class="w-item">
            <span>V </span>Email通知
          </div>
          <div class="w-item">
            <span>V </span>定期更新房況
          </div>
          <div class="w-item">
            <span>V </span>評價房東功能 
          </div>
          <div class="w-item">
            <span>V </span>聊天功能
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Footer -->
<?php
  include('common/footer.php');
?>