


  <meta charset="UTF-8">


  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/info.css">
  <link rel="stylesheet" type="text/css" href="layui/css/layui.css">
  
  <style type="text/css">
    form{
      margin: 0;
    }  
  </style>
<?php
    $loggedin = Auth::check();  //判斷權限等級是否為2
     if($loggedin){
        $mem_id=$_SESSION['mem_id'];
     }    
?>

<?php
    $post = Search::checkhouse_id();
?>

<?php 
  $mysqli = Connect::conn();
  $search = new Search();
  $houseinfo = $search->checkhouse_id();
    if(!empty($houseinfo)){
      foreach ($houseinfo as $info){
        $_SESSION['house_id'] = $info['house_id'];
?>
  <div class="main">
    <div class="main-inner body-width">
      <div class="banner clearfix">
        <div class="slider" id="slider">
          <ul class="slider-wrapper">
            
            <li class="item" data-title="">
              <a href="#" class="pic"><img src="<?php echo $info['file1'];?>" alt="#"></a>
            </li>
            <li class="item" data-title="" data-author="">
              <a href="#" class="pic"><img src="<?php echo $info['file2'];?>" alt="#"></a>
            </li>
            <li class="item" data-title="" data-author="">
              <a href="#" class="pic"><img src="<?php echo $info['file3'];?>" alt="#"></a>
            </li>
            <li class="item" data-title="" data-author="">
              <a href="#" class="pic"><img src="<?php echo $info['file4'];?>" alt="#"></a>
            </li>
            <li class="item" data-title="">
              <a href="#" class="pic"><img src="<?php echo $info['file5'];?>" alt="#"></a>
            </li>
          </ul>
          <a href="javascript:;" class="slider-prev"></a>
          <a href="javascript:;" class="slider-next"></a>
          <div class="slider-title">
            <h2></h2>
            <span></span>
          </div>
          <div class="slider-btns">
            <span class="item"></span>
            <span class="item"></span>
            <span class="item"></span>
            <span class="item"></span>
            <span class="item"></span>
          </div>
        </div>

        <div class="banner-info">
         
                   

          <div class="news body-border">
         
            <ul>
              <li class="title"><?php echo $info['housename'];?></li>
<?php  
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
              <form name="collect" id="collect" action="<?php echo $URL;?>" method="post" class="form form--sign-up" onfocus="">
                <li class="choose">
                  <a href="#">租金：『<?php echo $info['rental'];?>元/月』 </a>
                  <input type="hidden" name = "house_id" value="<?php echo $info['house_id'];?>"></input>
                  <input type="hidden" name = "mem_id" value="<?php echo $mem_id;?>"></input>
<?php
    $checkcollect = Collect::checkcollect();
     

     if(!empty($checkcollect)){
      foreach ($checkcollect as $check){
        $check_collect=$check['mem_id'];
      }
      if($check_collect == $mem_id){

?>
            <span style="width: 45px;" class="icon-text__pink">已收藏</span>
<?php
        }else{
?>
            <button name="collect" type="submit" value="collect" >  <span class="icon-text__pink">收藏</span></button>

<?php
        }
      }else{
        //$limitfive = Collect::limitfive();
        //if(!empty($limitfive)){
         // foreach ($limitfive as $limit){
          //  $limitnum=$limit['limitnum '];
        //}
        //if($limitnum>5){
          //echo '收藏已五筆';
        //}else{


?>
            <button name="collect" type="submit" value="collect" >  <span class="icon-text__pink">收藏</span></button>
<?php
      //}
      }
    
?>

                  



                </li>
              </form>

              <li class="assistant">
                <p><i class="layui-icon">&#xe612;</i>&nbsp;聯絡人:  <span style="text-decoration:underline;"><?php echo $info['contact'];?></span></p>
                <p><i class="layui-icon">&#xe662;</i>&nbsp;與屋主關係:  <span style="text-decoration:underline;"><?php echo $info['relationship'];?></span></p>
                <p><i class="layui-icon">&#xe609;</i>&nbsp;信箱:  <span style="text-decoration:underline;"><?php echo $info['email'];?></span></p>
                <p><i class="layui-icon">&#xe63b;</i>&nbsp;連絡電話:  <span style="text-decoration:underline;"><?php echo $info['phone'];?></span>   </p>
              </li>
            </ul>
        
          </div>
         
        </div>
   
<?php
      }
    }
?> 
      </div>
    
      
    </div>
  </div>
  
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/script.js"></script>



