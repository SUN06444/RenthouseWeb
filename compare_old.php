<?php
session_start();
include_once 'Controller/ErrorSettings.php';
?>
<?php

include('Connect/Connect.php');
include ('Controller/Auth.php');
include ('Controller/Url.php');
include('Controller/Search.php');
include('Controller/Collect.php');
    

 
?>

<?php
  include('common/head.php')
?>
<link rel="stylesheet" type="text/css" href="layui/css/layui.css">
<link rel="stylesheet" type="text/css" href="css/one.css">
<link rel="stylesheet" type="text/css" href="css/compare.css"> <!-- 收藏表格css-->
<?php
  include('common/navigation.php');
?>


<title>房屋比較表</title>
<div class="comparison">
 
  <table>



    <thead>
    
        
        <tr>

          <th class=""><p style="font-size: 30px;margin-bottom: 30px;border-bottom: 6px double black;border-top: 6px double black">房屋比較表</p></th>
  <?php
  //for($i=1;$i<=5;$i++){
   ?> 

          <th class="product" style="background:#98f; border-top-left-radius: 5px; border-left:0px;">房屋收藏<?php echo $i;?></th>

  <?php
  //}
  ?>    
        </tr>



  <?php
       $comparedata = Collect::compare();    
        if(!empty($comparedata)){
        foreach ($comparedata as $compare){
           echo $compare['ping'];
       
  ?>
        <tr>
          <th><span style="color: slategrey;">/~最多收藏5筆資料~/</span></th>
  <?php
  //for($i=1;$i<=5;$i++){
  ?> 
          <th class="price-info">
            <div class="price-now"><span>$ <?php echo $compare['deposit'];?></span>
              <p>  / 月</p>
            </div>
          </th>
  <?php
  //}
  ?>       
        </tr>
    </thead>
 
       <tbody>
      
      
<?php
for($k=1;$k<=20;$k++){
?>
      <tr class="compare-row">
        <td style="font-size: 25px;"><?php echo $k;?>房&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型</td>
      </tr>

<?php
}
?> 
        <td style="font-size: 25px;">
           <td> <?php echo $compare['ping'];?><?php echo $compare['housetype'];?></td>
        </td>

        <td><?php echo $compare['housetype'];?></td>
  


      <tr>
        <td> </td>
        <td colspan="3">item_2</td>
      </tr>
      <tr>
        <td style="font-size: 25px;">坪&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;數</td>
        <td><?php echo $compare['ping'];?></td>
      </tr>

      <tr>
        <td> </td>
        <td colspan="3">item_3</td>
      </tr>
      <tr class="compare-row">
        <td style="font-size: 25px;">屋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;齡</td>
        <td><?php echo $compare['house_age'];?></td>
      </tr>

      <tr>
        <td> </td>
        <td colspan="4">item_4</td>
      </tr>
      <tr>
        <td style="font-size: 25px;">押&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;金</td>
        <td><?php echo $compare['deposit'];?>元</td>
      </tr>

      <tr>
        <td> </td>
        <td colspan="3">item_5</td>
      </tr>
      <tr class="compare-row">
        <td style="font-size: 25px;">寵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;物</td>
        <td><span><?php echo $compare['pet'];?></span></td>
      </tr>

      <tr>
        <td> </td>
        <td colspan="4">item_6</td>
      </tr>
      <tr>
        <td style="font-size: 25px;">開&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;伙</td>
        <td><span><?php echo $compare['opened'];?></span></td>
      </tr>

      <tr>
        <td> </td>
        <td colspan="3">item_7</td>
      </tr>
      <tr class="compare-row">
        <td style="font-size: 25px;">電&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;梯</td>
        <td><span><?php echo $compare['elevator'];?></span></td>
      </tr>

      <tr>
        <td> </td>
        <td colspan="3">item_8</td>
      </tr>
      <tr>
        <td style="font-size: 25px;">車&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位</td>
        <td><span><?php echo $compare['parking_spaces'];?></span></td>
      </tr>

      <tr>
        <td> </td>
        <td colspan="3">item_9</td>
      </tr>
      <tr class="compare-row">
        <td style="font-size: 25px;">陽&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;台</td>
        <td><span><?php echo $compare['balcony'];?></span></td>
      </tr>
  
      <tr>
        <td> </td>
      </tr>
      <tr>
        <td></td>
        <td><a href="https://idc.wis.com.tw/contactUs?service=o365-email-security-solution" class="price-buy">刪除收藏<span class="hide-mobile"></span></a></td>
<?php
  }
}
?> 

      </tr>

    </tbody>

  </table>

</div>


<?php
  include('common/footer.php');
?>