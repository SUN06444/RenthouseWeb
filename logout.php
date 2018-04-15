<?php 
include_once 'Controller/ErrorSettings.php';
?>
<?php
session_start();
include ('Connect/Connect.php');
include ('Controller/Url.php');
include('Controller/Auth.php');
$t = Auth::check();
if(!$t){
    return redirect('login.php'); //沒有登入的話,跳到登入畫面
}else{
        $logout = Auth::logout();
        if($logout){
            return redirect('index.php?meg=logout');
        }
}
?>