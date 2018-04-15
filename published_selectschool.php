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

?>



  <form id="myForm" name="myForm" action="published_house_info.php" method="post" enctype="multipart/form-data" onfocus="">
    
      <input type="hidden" name="myForm" value="true">
      <input type="hidden" name="contact" value="<?php echo $_POST['contact'];?>">
  <input type="hidden" name="relationship" value="<?php echo $_POST['relationship'];?>">
  <input type="hidden" name="phone" value="<?php echo $_POST['phone'];?>">
  <div class="layui-form-mid layui-word-aux" style="font-size: 16px;margin-bottom: 20px;">第二步驟 - 選擇刊登房屋鄰近的學校：</div>

<div class="layui-form-item">

    <div class="layui-input-block">地區選擇：
      <select name="region"  id="region" lay-verify="required"  style="color: #999;" onChange="renew1(this.selectedIndex);">
        <option  value="0"> --請點擊選擇地區-- </option>
        <option value="1">台北市</option>
        <option value="2">新北市</option>
        <option value="3">桃園市</option>
        <option value="4">基隆市</option>
        <option value="5">新竹縣</option>
        <option value="6">新竹市</option>
        <option value="7">苗栗縣</option>
        <option value="8">臺中市</option>
        <option value="9">彰化縣</option>
        <option value="10">南投縣</option>
        <option value="11">雲林縣</option>
        <option value="12">嘉義縣</option>
        <option value="13">嘉義市</option>
        <option value="14">臺南市</option>
        <option value="15">高雄市</option>
        <option value="16">屏東縣</option>
        <option value="17">宜蘭縣</option>
        <option value="18">花蓮縣</option>
        <option value="19">臺東縣</option>
        <option value="20">澎湖縣</option>
        <option value="21">金門連江</option>
      </select>
    </div>
<br>
    <div class="layui-input-block">選擇大學：


      <select name="county" id="county"  style="color: #999;"  lay-verify="required">
        <option value=""> --請點擊選取大學-- </option>
      </select>
    </div>

  </div>

    <div class="btns">
          <button class="layui-btn" id="prevBtn">上一步</button>
          <button class="layui-btn" id="nextBtn">下一步</button>
  </div>

</form>

<script>
  tw_county = new Array();
  tw_county[1]=["請選擇學校","臺北市立大學","國立臺北大學(臺北校區)", "國立臺北藝術大學", "國立臺灣師範大學", "國立政治大學", "國立臺北教育大學", "國立臺灣大學", "國立交通大學(臺北校區)", "國立陽明大學", "中國文化大學", "大同大學", "世新大學", "臺北醫學大學", "東吳大學", "淡江大學(臺北校區)", "實踐大學", "銘傳大學", "國防醫學院", "基督教臺灣浸會神學院", "國立臺北科技大學", "國立臺北商業大學", "國立臺北護理健康大學", "國立臺灣科技大學", "國立臺灣戲曲學院", "中國科技大學", "中華科技大學", "台北海洋科技大學(士林校區)", "台北城市科技大學", "德明財經科技大學"]; 
  
  tw_county[2]=["請選擇學校","國立臺北大學","國立臺灣師範大學(林口校區)","國立臺灣藝術大學", "真理大學", "法鼓文理學院", "淡江大學", "華梵大學", "輔仁大學", "國立空中大學", "馬偕醫學院", "台北海洋科技大學(淡水校區)", "亞東技術學院", "明志科技大學", "東南科技大學", "致理科技大學", "景文科技大學", "華夏科技大學", "聖約翰科技大學", "宏國德霖科技大學", "黎明科技大學", "醒吾科技大學"]; 
  
  tw_county[3]=["請選擇學校", "國立中央大學", "國立體育大學", "中原大學", "元智大學", "長庚大學", "開南大學", "銘傳大學(桃園校區)", "中央警察大學", "國防大學", "長庚科技大學", "南亞技術學院", "健行科技大學", "萬能科技大學", "龍華科技大學"];
  
  tw_county[4]=["請選擇學校","國立海洋大學", "崇右影藝科技大學", "經國管理暨健康學院"];
  
  tw_county[5]=["請選擇學校","大華科技大學", "中國科技大學(新竹校區)", "中華科技大學(新竹校區)", "明新科技大學"];
  
  tw_county[6]=["請選擇學校","國立交通大學", "國立清華大學", "國立新竹教育大學", "中華大學", "玄奘大學", "元培醫事科技大學"];
  
  tw_county[7]=["請選擇學校","國立聯合大學", "育達科技大學", "亞太創意技術學院"];
  tw_county[8]=["請選擇學校","國立中興大學", "國立臺中教育大學", "國立臺灣體育運動大學", "中山醫學大學", "中國醫藥大學", "東海大學", "逢甲大學", "亞洲大學", "靜宜大學", "國立臺中科技大學", "國立勤益科技大學", "中臺科技大學", "僑光科技大學", "嶺東科技大學", "弘光科技大學", "修平科技大學", "朝陽科技大學"];
  
  tw_county[9]=["請選擇學校","國立彰化師範大學", "大葉大學", "明道大學", "中州科技大學", "建國科技大學"];
  
  tw_county[10]=["請選擇學校","國立暨南國際大學", "南開科技大學"];
  
  tw_county[11]=["請選擇學校","中國醫藥大學(北港分部)", "國立虎尾科技大學", "國立雲林科技大學","環球科技大學"];
  
  tw_county[12]=["請選擇學校","國立中正大學", "國立嘉義大學(民雄校區)", "南華大學", "稻江科技暨管理學院", "大同技術學院(太保校區)", "吳鳳科技大學", "長庚科技大學(嘉義校區)"];
  
  tw_county[13]=["請選擇學校","國立嘉義大學", "大同技術學院"];
  
  tw_county[14]=["請選擇學校","國立台南大學", "國立成功大學", "國立台南藝術大學", "康寧大學", "中信金融管理學院", "長榮大學", "台灣首府大學","真理大學(麻豆校區)", "中華醫事科技大學", "台南應用科技大學", "南台科技大學", "南榮科技大學", "崑山科技大學", "嘉南藥理大學", "遠東科技大學"];
  
  tw_county[15]=["請選擇學校", "國立中山大學", "國立高雄大學", "國立高雄師範大學", "高雄醫學大學", "義守大學", "實踐大學(高雄校區)", "高雄市立空中大學", "陸軍官校", "海軍官校", "空軍官校", "國立高雄海洋科技大學", "國立高雄餐旅大學", "國立高雄第一科技大學", "國立高雄應用科技大學", "文藻外語大學", "正修科技大學", "東方設計大學", "輔英科技大學", "和春技術學院", "高苑科技大學", "樹德科技大學", "國立空軍航空技術學院"];
  
  tw_county[16]=["請選擇學校","國立屏東教育大學", "國立屏東科技大學", "大仁科技大學", "美和科技大學"];
  
  tw_county[17]=["請選擇學校","國立宜蘭大學", "佛光大學", "淡江大學(蘭陽校區)","蘭陽技術學院"];
  
  tw_county[18]=["請選擇學校","國立東華大學", "慈濟大學", "大漢技術學院", "慈濟科技大學", "台灣觀光學院"];
  
  tw_county[19]=["請選擇學校","國立台東大學", "國立台東專科學校"];
  
  tw_county[20]=["請選擇學校","國立澎湖科技大學"];
  
  tw_county[21]=["請選擇學校","銘傳大學(金門校區)", "國立金門大學"];
  
     
  function renew1(index){
    for(var i=0;i<tw_county[index].length;i++)
      document.myForm.county.options[i]=new Option(tw_county[index][i], tw_county[index][i]); // 設定新選項
    document.myForm.county.length=tw_county[index].length;  // 刪除多餘的選項    
  }

</script>
 
  <br>
 
</div>
 

 
<script type="text/javascript">
        var $step = $("#step");
      var $index = $("#index");

      $step.step({
        index: 1,
        time: 500,
        title: ["填寫房東相關資料","選擇房屋鄰近的學校","填寫房屋詳細資訊", "提交成功"]
      });

      $index.text($step.getIndex());


      $("#prevBtn").on("click", function() {
          window.location = "published_landlord_info.php";

      });

        $("#nextBtn").on("click", function() {
          //window.location = "published.php";
          document.getElementById('myForm').submit();
          //window.location = "published_house_info.php";
      });

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

