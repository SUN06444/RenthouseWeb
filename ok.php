<?php
session_start();
include_once 'Controller/ErrorSettings.php';
?>

<?php
include ('Connect/Connect.php');
include ('Controller/Auth.php');
include ('Controller/House.php');
include ('Controller/Url.php');

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
    /**
 * 表單接收頁面
 */

// 網頁編碼宣告（防止產生亂碼）
//header('content-type:text/html;charset=utf-8');
// 封裝好的單一及多檔案上傳 function
include_once 'upload.func.php';
// 重新建構上傳檔案 array 格式
$files = getFiles();

// 依上傳檔案數執行
foreach ($files as $fileInfo) {
    // 呼叫封裝好的 function
    $res = uploadFile($fileInfo);

    // 顯示檔案上傳訊息
    //echo $res['mes'] . '<br>';

    // 上傳成功，將實際儲存檔名存入 array（以便存入資料庫）
    if (!empty($res['dest'])) {
        $uploadFiles[] = $res['dest'];
    }
}

//print_r($uploadFiles);
    $_SESSION['uploadFiles'] = $uploadFiles;
    }
?>

 <?php
 if(isset($_POST['house_info'])){

    $post = House::house_info($_POST);
?>

?>
 <div class="jumbotron" style="width: 80%;margin: 0 auto;">
  <p style=" font-size: 21px;text-align: center;">資料提交成功，請等待管理人員審核...</p>
  <br>
  <p style="text-align: center;"><a class="layui-btn layui-btn-lg layui-btn-normal" href="index.php">回首頁</a></p>
</div>
 

 
<script type="text/javascript">
        var $step = $("#step");
      var $index = $("#index");

      $step.step({
        index: 3,
        time: 500,
        title: ["填寫房東相關資料","選擇房屋鄰近的學校","填寫房屋詳細資訊", "提交成功"]
      });

      $index.text($step.getIndex());

</script>

</div>
 <br>

  <br>

 <!-- Footer -->
<?php
  include('common/footer.php');
?>
<?php
}
?>

<script src="layui/layui.all.js" type="text/javascript" charset="utf-8" async defer></script>

