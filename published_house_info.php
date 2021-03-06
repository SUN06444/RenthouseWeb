
<?php
session_start();
include_once 'Controller/ErrorSettings.php';
error_reporting(0);
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



  
     // $material = implode(',', $_POST['material']);
          //echo $material.$_SESSION['pet'];
   
   
      //  echo $_SESSION['curfew'].$_SESSION['lease_term'].$_SESSION['housetype'].$_SESSION['identity_requirements'];
     //house_limit
     //others
?>






<form name="house_info" id="house_info" action="ok.php" method="post" class="layui-form" enctype="multipart/form-data" onfocus="">
  <input type="hidden" name="house_info" value="true">
     <input type="hidden" name="contact" value="<?php echo $_POST['contact'];?>">
  <input type="hidden" name="relationship" value="<?php echo $_POST['relationship'];?>">
  <input type="hidden" name="phone" value="<?php echo $_POST['phone'];?>">
    <input type="hidden" name="school" value="<?php echo $_POST['county'];?>">


  <div class="layui-form-mid layui-word-aux" style="font-size: 16px;margin-bottom: 10px;">第三步驟 - 請填寫所要刊登的房屋資訊：</div>

  <div class="layui-form-item">
    <label class="layui-form-label">房屋名稱</label>
    <div class="layui-input-block">
      <input id="housename" name="housename"  type="text"  placeholder="請輸入房屋名稱"  class="layui-input" required="true">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">房屋地址</label>
    <div class="layui-input-block">
      <input id="address" name="address"  type="text"  placeholder="請輸入房屋地址"  class="layui-input" required="true">
    </div>
  </div>
 

    <div class="layui-form-item">
      <div class="layui-inline-two">
        <label class="layui-form-label">租金</label>
          <div class="layui-input-inline-two">
             <input id="rental" name="rental"  type="text"  placeholder="請輸入租金"  class="layui-input" required="true">
          </div>
      </div>
   
      <div class="layui-inline-two">
        <label class="layui-form-label">押金</label>
        <div class="layui-input-inline-two">
           <input id="deposit" name="deposit"  type="text"  placeholder="請輸入押金"  class="layui-input" required="true">
        </div>
      </div>    
  </div>



  <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">坪數</label>
        <div class="layui-input-inline">
           <input id="ping" name="ping"  type="text"  placeholder="請輸入坪數"  class="layui-input" required="true">
        </div>
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">屋齡</label>
        <div class="layui-input-inline">
            <input id="house_age" name="house_age"  type="text"  placeholder="請輸入屋齡"  class="layui-input" required="true">
        </div>
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">門禁管制</label>
        <div class="layui-input-inline">
          <input id="curfew" name="curfew"  type="text"  placeholder="請輸入門禁管制"  class="layui-input" required="true">
        </div>
      </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">租期</label>
    <div class="layui-input-block">
      <select name="lease_term" lay-verify="required">
        <option value="0">請選擇租期</option>
        <option value="1">1~3個月</option>
        <option value="2">半年</option>
        <option value="3">一年</option>
        <option value="4">二年</option>
        <option value="5">兩年以上</option>
      </select>
    </div>
  </div>

   <div class="layui-form-item">
    <label class="layui-form-label">房型</label>
    <div class="layui-input-block">
      <select name="housetype" lay-verify="required">
        <option value="0">請選擇房型</option>
        <option value="1">雅房</option>
        <option value="2">套房</option>
        <option value="3">公寓</option>
      </select>
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">身分要求</label>
    <div class="layui-input-block" name="identity_requirements">
      <input type="radio" name="identity_requirements" value="只限男生" title="只限男生" checked>
      <input type="radio" name="identity_requirements" value="只限女生" title="只限女生">
      <input type="radio" name="identity_requirements" value="男女不限" title="男女不限">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">可否養寵物</label>
    <div class="layui-input-block" name="pet">
      <input type="radio" name="pet" value="可" title="可" checked>
      <input type="radio" name="pet" value="否" title="否" >
    </div>
  </div>

   <div class="layui-form-item">
    <label class="layui-form-label">可否開伙</label>
    <div class="layui-input-block" name="opened">
      <input type="radio" name="opened" value="可" title="可" checked>
      <input type="radio" name="opened" value="否" title="否">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">有無陽台</label>
    <div class="layui-input-block" name="balcony">
      <input type="radio" name="balcony" value="有" title="有" checked>
      <input type="radio" name="balcony" value="無" title="無">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">有無電梯</label>
    <div class="layui-input-block" name="elevator">
      <input type="radio" name="elevator" value="有" title="有" checked>
      <input type="radio" name="elevator" value="無" title="無">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">有無車位</label>
    <div class="layui-input-block" name="parking_spaces">
      <input type="radio" name="parking_spaces" value="有" title="有" checked>
      <input type="radio" name="parking_spaces" value="無" title="無">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">生活機能</label>
    <div class="layui-input-block">
      <input type="checkbox" name="material[]" value="公園" title="公園">
      <input type="checkbox" name="material[]" value="市場" title="市場">
      <input type="checkbox" name="material[]" value="超市" title="超市">
      <input type="checkbox" name="material[]" value="夜市" title="夜市">
      <input type="checkbox" name="material[]" value="小吃店" title="小吃店">
      <input type="checkbox" name="material[]" value="警察局" title="警察局">
      <input type="checkbox" name="material[]" value="停車場" title="停車場">
      <input type="checkbox" name="material[]" value="公車站" title="公車站">
      <input type="checkbox" name="material[]" value="醫療機構" title="醫療機構">
      <input type="checkbox" name="material[]" value="便利商店" title="便利商店">
    </div>
  </div>
   
  <div class="layui-form-item">
    <label class="layui-form-label">提供設備</label>
    <div class="layui-input-block">
      <input type="checkbox" name="equipment[]" value="桌子" title="桌子">
      <input type="checkbox" name="equipment[]" value="椅子" title="椅子">
      <input type="checkbox" name="equipment[]" value="衣櫃" title="衣櫃">
      <input type="checkbox" name="equipment[]" value="床" title="床">
      <input type="checkbox" name="equipment[]" value="沙發" title="沙發">
      <input type="checkbox" name="equipment[]" value="熱水器" title="熱水器">
      <input type="checkbox" name="equipment[]" value="天然瓦斯" title="天然瓦斯">
      <input type="checkbox" name="equipment[]" value="電視" title="電視">
      <input type="checkbox" name="equipment[]" value="冰箱" title="冰箱">
      <input type="checkbox" name="equipment[]" value="冷氣" title="冷氣">
      <input type="checkbox" name="equipment[]" value="個人衛浴設備" title="個人衛浴設備">
      <input type="checkbox" name="equipment[]" value="洗衣機" title="洗衣機">
      <input type="checkbox" name="equipment[]" value="網路" title="網路">
      <input type="checkbox" name="equipment[]" value="第四台" title="第四台">
      <input type="checkbox" name="equipment[]" value="飲水機" title="飲水機">
      <input type="checkbox" name="equipment[]" value="晒衣場" title="晒衣場">

    </div>
  </div>

     
  <div class="layui-form-item">
    <label class="layui-form-label">安全設備</label>
    <div class="layui-input-block">
      <input type="checkbox" name="security_equipment[]" value="滅火器" title="滅火器">
      <input type="checkbox" name="security_equipment[]" value="緊急照明燈" title="緊急照明燈">
      <input type="checkbox" name="security_equipment[]" value="監視器" title="監視器">
      <input type="checkbox" name="security_equipment[]" value="煙霧警報器" title="煙霧警報器">
      <input type="checkbox" name="security_equipment[]" value="防火天花板" title="防火天花板">
      <input type="checkbox" name="security_equipment[]" value="安全走道" title="安全走道">
    </div>
  </div>

  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">租屋限制</label>
    <div class="layui-input-block" name="house_limit">
      <textarea id="house_limit" name="house_limit" placeholder="請輸入限制" class="layui-textarea"></textarea>
    </div>
  </div>

  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">備註</label>
    <div class="layui-input-block" name="others">
      <textarea id="others" name="others" placeholder="請輸入内容" class="layui-textarea"></textarea>
    </div>
  </div>

<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
  <legend>請選擇一張圖片作為刊登展示封面</legend>
</fieldset>
    <!-- 限制上傳檔案的最大值 -->
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">

    <!-- accept 限制上傳檔案類型。多檔案上傳 name 的屬性值須定義為 array -->
    <input type="file" name="myFile[]" accept="image/jpeg,image/jpg,image/gif,image/png" style="display: block;margin-bottom: 5px;">
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
  <legend>上傳其他房屋圖片</legend>
</fieldset>
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">

    <input type="file" name="myFile[]" accept="image/jpeg,image/jpg,image/gif,image/png" style="display: block;margin-bottom: 5px;">
    <input type="file" name="myFile[]" accept="image/jpeg,image/jpg,image/gif,image/png" style="display: block;margin-bottom: 5px;">
    <input type="file" name="myFile[]" accept="image/jpeg,image/jpg,image/gif,image/png" style="display: block;margin-bottom: 5px;">
    <input type="file" name="myFile[]" accept="image/jpeg,image/jpg,image/gif,image/png" style="display: block;margin-bottom: 5px;">
    <input type="file" name="myFile[]" accept="image/jpeg,image/jpg,image/gif,image/png" style="display: block;margin-bottom: 5px;">

<br><br>

  <div class="btns">
          <button class="layui-btn" id="prevBtn">上一步</button>
          <button class="layui-btn" id="nextBtn">下一步</button>
    
  </div>

</form>
<?php
}
?>
<script type="text/javascript">
      var $step = $("#step");
      var $index = $("#index");

      $step.step({
        index: 2,
        time: 500,
        title: ["填寫房東相關資料","選擇房屋鄰近的學校","填寫房屋詳細資訊", "提交成功"]
      });

      $index.text($step.getIndex());

      $("#prevBtn").on("click", function() {
          window.location = "published_selectschool.php";

      });

      $("#nextBtn").on("click", function() {
          //window.location = "published.php";
          document.getElementById('house_info').submit();
          //window.location = "published_house_info.php";
      });



</script>
<script src="layui/layui.all.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="layui/layui.js" charset="utf-8"></script>

 <br>



 <!-- Footer -->
<?php
  include('common/footer.php');
?>