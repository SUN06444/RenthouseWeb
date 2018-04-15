<?php 
session_start();

include_once 'Controller/ErrorSettings.php';
?>

<?php
include ('Controller/Auth.php');
include ('Controller/House.php');
include ('Controller/Url.php');
?>
<?php
include('common/head.php');
include('common/navigation.php');
?>

<?php
    
    $loggedin = Auth::check();  //判斷權限等級是否為2
     if(!$loggedin){
        return redirect('login_entrance.php?message=nologin');
     }

    $level2 = Auth::checklev_value2();  //判斷權限等級是否為2

   
    if(!$level2){      
       
        return redirect('login_entrance.php?message=notlandlord');
    }else{


      
?>



<link rel="stylesheet" type="text/css" href="css/one.css">

<link rel="stylesheet" type="text/css" href="layui/css/layui.css">
<div class="form-box l-col-wrap">

<?php include("step.php");
 /* if(isset($_POST['landlord_info'])){
   $_SESSION['contact']=$_POST['contact'];

            $_SESSION['relationship']=$_POST['relationship'];
            $_SESSION['phone']=$_POST['phone'];
            echo $_SESSION['contact']."+".$_SESSION['relationship']."+".$_SESSION['phone'];
  }
*/
?>
 
 <form name="landlord_info" id="landlord_info" action="published_selectschool.php" method="post" class="layui-form" enctype="multipart/form-data" onfocus="">
  <input type="hidden" name="landlord_info" value="true">
  <div class="layui-form-mid layui-word-aux" style="font-size: 16px;margin-bottom: 10px;">第一步驟 - 請先填寫房東資料：</div>
   <div class="layui-form-item">
    <label class="layui-form-label">聯絡人</label>
    <div class="layui-input-block">
      <input id="contact" name="contact"  type="text"  placeholder="請輸入聯絡人"  class="layui-input" required="true">
    </div>
  </div>

    <div class="layui-form-item">
    <label class="layui-form-label">關係</label>
    <div class="layui-input-block">
      <input id="relationship" name="relationship" type="text" placeholder="上述聯絡人與房東的關係"  class="layui-input" required="true">
    </div>
  </div>

    <div class="layui-form-item">
    <label class="layui-form-label">聯絡人電話</label>
    <div class="layui-input-block">
      <input id="phone" name="phone" type="text" placeholder="請輸入聯絡電話" class="layui-input" quired="true">
    </div>
  </div>

  <div class="layui-form-item">
   <br>
     <div class="btns">

        <button  name="nextBtn" type="button" class="layui-btn" id="nextBtn">下一步</button>
    </div>
  </div>
 

 
<script type="text/javascript">
        var $step = $("#step");
      var $index = $("#index");

      $step.step({
        index: 0,
        time: 500,
        title: ["填寫房東相關資料","選擇房屋鄰近的學校","填寫房屋詳細資訊", "提交成功"]
      });

      $index.text($step.getIndex());

      $("#nextBtn").on("click", function() {
        //window.location = "form.php";
        document.getElementById('landlord_info').submit();
      });

</script>
</form>

</div>

<?php
  }
?>
 <br>

  <br>

 <!-- Footer -->
<?php
  include('common/footer.php');
?>

<script src="layui/layui.all.js" type="text/javascript" charset="utf-8" async defer></script>
