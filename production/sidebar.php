<?php
    //確認使用者是否登入，根據確認結果分別給予不同的服務
    $loggedin = Auth::check();
    $level1 = Auth::checklev_value1();
    $level2 = Auth::checklev_value2();

?>

<?php
if(!$loggedin){
  echo "你尚未登入";
}else if($loggedin){
?>
<?php
  if($level1 || $level2){ //若權限等級為1=>房客
?>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
<?php
        $user_head = Auth::user_head(); 

        if(!empty($user_head)){
          foreach ($user_head as $userhead){
            if($userhead['head']!=''){


?>
               <img src="<?php echo $userhead['head'];?>"  alt="..." class="img-circle profile_img">
<?php
        }else{
?>
               <img src="images/user.png" alt="..." class="img-circle profile_img">
<?php 
            }       
          }
        }
?>
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['account'] ;?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="profile.php"><i class="fa fa-home"></i> User Profile</a></li>
<?php
  if($level2){ //若權限等級為1=>房客
?>
                  <li><a href="house_info.php"><i class="fa fa-desktop"></i> House Information</a></li>

<?php
  }
?>

                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Community <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="allmember.php">All Member</a></li>

                    </ul>
                  </li>

                </ul>
              </div>

              <div class="menu_section">
                <h3>Others</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Extra Function <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                  <li><a href="student_pic.php">Edit Photo</a></li>

                    </ul>
                  </li>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>


        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<?php
        $user_head = Auth::user_head();

        if(!empty($user_head)){
          foreach ($user_head as $userhead){
            if($userhead['head']!=''){


?>
                    <img src="<?php echo $userhead['head'];?>" alt=""><?php echo $_SESSION['name'];?>
<?php
        }else{
?>
                    <img src="images/user.png" alt=""><?php echo $_SESSION['name'];?>
<?php
            }
          }
        }
?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="/renthouse/index.php">首頁</a></li>
                    <li><a href="javascript:;">我的好友</a></li>

                    
                    <li><a href="/renthouse/logout.php"><i class="fa fa-sign-out pull-right"></i>登出</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">2</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>

                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
              
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<?php
}
}
?>
