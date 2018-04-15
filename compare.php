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
<?php
  if(isset($_POST['delete_collect'])){
        

        $found_collect = Collect::found_collect();
        if($found_collect==false){
          
?>
<script type="text/javascript">
  alert('目前房屋收藏無此筆紀錄!');
</script>
<?php
  
        }else{
           $delete_collect = Collect::delete_collect();
           $record_delete_collect = Collect::record_delete_collect();
        }

?>

<?php
    }
?>

<div class="comparison">

<table>
 <thead>
  <tr>

          <th class=""><p style="font-size: 30px;margin-bottom: 30px;border-bottom: 6px double black;border-top: 6px double black">房屋比較表</p></th>
<?php
       $comparedata = Collect::compare();    
        if(!empty($comparedata)){
        foreach ($comparedata as $compare){
       
?>

          <th class="product" style="background:#98f; border-top-left-radius: 5px; border-left:0px;"><?php echo $compare['housename'];?></th>
<?php
  }
}
?>
  </tr>
  <tr>
    <th><span style="color: slategrey;">/~最多收藏5筆資料~/</span></th>
<?php
       $comparedata = Collect::compare();    
        if(!empty($comparedata)){
        foreach ($comparedata as $compare){
       
?>
          
    <th class="price-info">
        <div class="price-now"><span>$ <?php echo $compare['deposit'];?></span>
          <p>  / 月</p>
        </div>
    </th>
  
<?php
  }
}
?>   
  </tr>

  <tr class="compare-row">
      <td style="font-size: 25px;"><?php echo $k;?>房&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型</td>
<?php
       $comparedata = Collect::compare();    
        if(!empty($comparedata)){
        foreach ($comparedata as $compare){
       
?>
      <td><?php echo $compare['housetype'];?></td>
<?php
  }
}
?>
  </tr>

  <tr>
        <td style="font-size: 25px;">坪&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;數</td>
<?php
       $comparedata = Collect::compare();    
        if(!empty($comparedata)){
        foreach ($comparedata as $compare){
       
?>
    <td><?php echo $compare['ping'];?></td>
<?php
  }
}
?>
  </tr>

  <tr class="compare-row">
        <td style="font-size: 25px;">屋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;齡</td>
<?php
       $comparedata = Collect::compare();    
        if(!empty($comparedata)){
        foreach ($comparedata as $compare){
       
?>
        <td><?php echo $compare['house_age'];?></td>
<?php
  }
}
?>        
  </tr>

   <tr>
        <td style="font-size: 25px;">押&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;金</td>
<?php
       $comparedata = Collect::compare();    
        if(!empty($comparedata)){
        foreach ($comparedata as $compare){
       
?>
        <td><?php echo $compare['deposit'];?>元</td>
<?php
  }
}
?>  
  </tr>

  <tr class="compare-row">
        <td style="font-size: 25px;">寵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;物</td>
<?php
       $comparedata = Collect::compare();    
        if(!empty($comparedata)){
        foreach ($comparedata as $compare){
       
?>
        <td><span><?php echo $compare['pet'];?></span></td>
<?php
  }
}
?>
  </tr>

  <tr>
        <td style="font-size: 25px;">開&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;伙</td>
<?php
       $comparedata = Collect::compare();    
        if(!empty($comparedata)){
        foreach ($comparedata as $compare){
       
?>
        <td><span><?php echo $compare['opened'];?></span></td>
<?php
  }
}
?> 
  </tr>



  <tr class="compare-row">
        <td style="font-size: 25px;">電&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;梯</td>
<?php
       $comparedata = Collect::compare();    
        if(!empty($comparedata)){
        foreach ($comparedata as $compare){
       
?>
        <td><span><?php echo $compare['elevator'];?></span></td>
<?php
  }
}
?> 
  </tr>

  <tr>
        <td style="font-size: 25px;">車&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位</td>
<?php
       $comparedata = Collect::compare();    
        if(!empty($comparedata)){
        foreach ($comparedata as $compare){
       
?>
        <td><span><?php echo $compare['parking_spaces'];?></span></td>
<?php
  }
}
?> 
  </tr>

  <tr class="compare-row">
        <td style="font-size: 25px;">陽&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;台</td>
<?php
       $comparedata = Collect::compare();    
        if(!empty($comparedata)){
        foreach ($comparedata as $compare){
       
?>
        <td><span><?php echo $compare['balcony'];?></span></td>
<?php
  }
}
?> 
  </tr>


    <tr>
        <td></td>
<?php
       $comparedata = Collect::compare();    
        if(!empty($comparedata)){
        foreach ($comparedata as $compare){
       
?>

        <td> 
          <form name="delete_collect" id="delete_collect" action="compare.php?delete_collect" method="post">
                  <input type="hidden" name="collect_id" value="<?php echo $compare['collect_id'];?>"></input>
                  <input type="hidden" name="mem_id" value="<?php echo $compare['mem_id'];?>"></input>
                  <input type="hidden" name="house_id" value="<?php echo $compare['house_id'];?>"></input>
          <button id="delete_collect" name="delete_collect" type="submit" value="delete_collect" class="price-buy"> 刪除收藏</button>
        </form>
</td>
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