
<?php
    //確認使用者是否登入，根據確認結果分別給予不同的服務
    $loggedin = Auth::check();
    $level1 = Auth::checklev_value1();
    $level2 = Auth::checklev_value2();

?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">RentHouse</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/renthouse/agency/introduction.php">首頁<br>Home<span class="sr-only"></span></a></li>
        <li><a href="/renthouse/index.php">所有房屋<br>All House<span class="sr-only">(current)</span></a></li>
        <li><a href="/renthouse/map_police.php">分布圖<br>Distribution<span class="sr-only"></span></a></li>
        <li><a href="/renthouse/Regulations.php">法規條文<br>Regulations<span class="sr-only"></span></a></li>
        <li><a href="/renthouse/agency/introduction.php#contact">聯絡我們<br>Contact<span class="sr-only"></span></a></li>
        <li><a href="/renthouse/function.php">功能總覽<br>Function<span class="sr-only"></span></a></li>
      </ul>

<?php
  //針對未登入的使用者，提供register及login選項
  if(!$loggedin){
?>
    <ul class="nav navbar-nav navbar-right">

        <li><a href="register_entrance.php">註冊會員<br>Register</a></li>
        <li><a href="login_entrance.php">登入會員<br>Login</a></li>
    </ul>

<?php
}else if($loggedin){ 　//若登入後，進行下面的判斷登入身分
?>


<?php
  if($level1){ //若權限等級為1=>房客
?>
      <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['name'] ;?><br><?php echo $_SESSION['account'];?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/renthouse/production/profile.php">編輯個人資料</a></li>
              <li class="divider"></li>
                <li><a href="#">預約看房</a></li>
                <li><a href="compare.php">房屋收藏比較</a></li>
                <li><a href="#">評價房東</a></li>
              <li class="divider"></li>
                <li><a href="logout.php">登出</a></li>
          </ul>
        </li>
      </ul>
<?php
}
?>

<?php
  if($level2){      //若權限等級為2=>房東
?>
      <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['name'] ;?><br><?php echo $_SESSION['account'];?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/renthouse/production/profile.php">編輯個人資料</a></li>
              <li class="divider"></li>
                <li><a href="#">我的房屋</a></li>
                <li><a href="published_landlord_info.php">刊登房屋</a></li>
                <li><a href="#">評價房客</a></li>
              <li class="divider"></li>
                <li><a href="logout.php">登出</a></li>
          </ul>
        </li>
      </ul>

<?php
  }
?>

<?php
  if($level3){      //若權限等級為2=>房東
?>
      <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['name'] ;?><br><?php echo $_SESSION['account'];?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/renthouse/production/index.php">管理人員後台</a></li>

                <li><a href="logout.php">登出</a></li>
          </ul>
        </li>
      </ul>

<?php
  }
}
?>

    </div>
  </div>
</nav>

<!--class="active"-->
<style type="text/css" media="screen">
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>

