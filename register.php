<!DOCTYPE html>
<?php
session_start();

include_once 'Controller/ErrorSettings.php';
?>
<?php
include ('Connect/Connect.php');
include ('Controller/Url.php');
include ('Controller/Auth.php');

    if(isset($_POST['register_1'])){
        $post = Auth::register_1($_POST);
    }
    if(isset($_POST['register_2'])){
        $post = Auth::register_2($_POST);
    }
      
?>


<?php
   include('common/head.php');
   include('common/navigation.php');
?>
<link rel="stylesheet" type="text/css" href="css/member.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>-->
<script src="layer/layer.js" type="text/javascript" charset="utf-8" async defer></script>     


<?php 
$lev_value = Auth::checklev_value();
$val_id = $_SESSION['val_id'];
if($val_id==""){
  return redirect ("register_entrance.php");
}
?> 

<?php if($val_id=='1'){ ?>
<div class="form-box l-col-wrap">
  <div class="l-col form-box__content">
    <h1 class="form-box__title">房客註冊須知</h1>
    <div class="u-auto-format-text">
    <ul class="A">
　      <li>本系統由各房東所刊登的租屋資料僅供同學們參考用，請同學們還是要實地去參觀比較，慎重考慮後再承租，以減少租屋糾紛的發生。</li>
　      <li>本租屋網僅提供學生租屋參考，房東不會向學生收取仲介費，如發現有收費情形，煩請點選上方“連絡我們”或以電話告知，『請勿給予任何費用』，以確保同學們的權益。</li></br>
        <li>若發覺房東所刊登的資料和實際狀況差距過大，煩請點選上方“聯絡我們”或以電話告知，以確保同學們的權益。</li></br>
        <li>若您所住之租屋處所之評估等級有誤，亦可告知，我們將為您作更正，您的評估是供學弟妹們未來租屋的參考，請客觀的評估。</li></br>
      </ul>

    </div>
  </div>
  <div class="l-col form-box__form">

    <form name="register" id="register" action="register.php?val=1" method="post" class="form form--sign-up" enctype="multipart/form-data" onfocus="">
      <input type="hidden" name="register_1" value="true">
      <label for="account" class="form__label">帳號：<em style="text-decoration:underline;">(最多可輸入8個字) </em></label>&nbsp;<span id=validateaccount style="color: red;"></span><span id=warnaccountlength style="color: red;"></span><br><span id=warnaccount style="color: red;"></span>
      <input id="account" name="account" type="text" class="form__field" placeholder="請輸入帳號" required="true">
      
      <label for="password" class="form__label">密碼：<em style="text-decoration:underline;">(最多可輸入20個字) </em></label>&nbsp;<span id=warnpasswordlength style="color: red;"></span><br><span id=warnpassword style="color: red;"></span>
      <input id="password" name="password" type="password" class="form__field" placeholder="請輸入密碼" required="true">
      
      <label for="password2" class="form__label">確認密碼：<em style="text-decoration:underline;">(需與上述密碼一致) </em></label>&nbsp;<span id=warnpassword2length style="color: red;"></span><br><span id=warnpassword2 style="color: red;"></span>
      <input id="password2" name="password2" type="password" class="form__field" placeholder="請輸入確認密碼" required="true">
      
      <label for="name" class="form__label">房客(學生)姓名：<em style="text-decoration:underline;">(請輸入真實姓名以供驗證) </em></label><br><span id=warnname style="color: red;"></span>
      <input id="name" name="name" type="text" class="form__field" placeholder="請輸入姓名" required="true">

      <label for="email" class="form__label">email:</label>&nbsp;<span id=warnemail style="color: red;"></span>
      <input id="email" name="email" type="text" class="form__field" placeholder="請輸入email" required="true">
      
      <label for="file" class="form__label">學生證（相關證明文件）：</label>
      <div class="custom_file_upload">
          <div class="file_upload">
              <input type="file" id="file_upload" name="file">
          </div>
      </div>     
       <br>
       
      <input id="button" name="button" type="button" class="form__button button" value="Register">
    </form>
  
    
    <small class="form-box__addon u-auto-format-text">
      已經註冊過了? <a href="login.php?val=1">登入</a>
    </small>
    <br>
    <small class="form-box__addon u-auto-format-text">
      不是要註冊房客? <a href="register_entrance.php">返回</a>
    </small>

  </div>
</div>
<?php
}
?>

<?php if($val_id=='2'){ ?>
<div class="form-box l-col-wrap">
  <div class="l-col form-box__content">
    <h1 class="form-box__title">房東註冊須知</h1>
    <div class="u-auto-format-text">

      <ul class="A">
　      <li>租屋刊登成功後，需經審核通過，才開放查詢。</li>
　      <li>請儘量提供照片供學生參考，但注意檔案限制。</li></br>
        <li>為保持資料庫之最新狀態，於每學期會作整理一次，若您的資料被刪除，請再上“租屋刊登”上傳一次。</li></br>
        <li>任何意見及建議請點選右上方“聯絡我們”或以電話告知。</li></br>
        </br>
      </ul>

    </div>
  </div>
  <div class="l-col form-box__form">

    <form name="register" id="register" action="register.php?val=2" method="post" class="form form--sign-up" enctype="multipart/form-data" onfocus="">
      <input type="hidden" name="register_2" value="true">
      <label for="account" class="form__label">帳號：<em>(最多可輸入8個字) </em></label>&nbsp;<span id=validateaccount style="color: red;"></span><span id=warnaccountlength style="color: red;"></span><br><span id=warnaccount style="color: red;"></span>
      <input id="account" name="account" type="text" class="form__field" placeholder="請輸入帳號" required="true">
      
      <label for="password" class="form__label">密碼：<em>(最多可輸入20個字) </em></label>&nbsp;<span id=warnpasswordlength style="color: red;"></span><br><span id=warnpassword style="color: red;"></span>
      <input id="password" name="password" type="password" class="form__field" placeholder="請輸入密碼" required="true">
      
      <label for="password2" class="form__label">確認密碼：<em>(需與上述密碼一致) </em></label>&nbsp;<span id=warnpassword2length style="color: red;"></span><br><span id=warnpassword2 style="color: red;"></span>
      <input id="password2" name="password2" type="password" class="form__field" placeholder="請輸入確認密碼" required="true">   
            
      <label for="name" class="form__label">房東姓名：<em>(請輸入真實姓名以供驗證) </em></label>&nbsp;<span id=warnname style="color: red;"></span>
      <input id="name" name="name" type="text" class="form__field" placeholder="請輸入姓名" required="true">

      <label for="email" class="form__label">email:</label>&nbsp;<span id=warnemail style="color: red;"></span>
      <input id="email" name="email" type="text" class="form__field" placeholder="請輸入email" required="true">

      <label for="file" class="form__label">房屋相關證明文件：</label>
      <div class="custom_file_upload">
          <div class="file_upload">
              <input type="file" id="file" name="file">
          </div>
      </div>
      
      <br>      
      <input id="button" name="button" type="button" class="form__button button"  value="Register">
    </form>
     
    <small class="form-box__addon u-auto-format-text">
      已經註冊過了? <a href="login.php?val=2.php">登入</a>
    </small>
     <br>
     <small class="form-box__addon u-auto-format-text">
      不是要註冊房東? <a href="register.php">返回</a>
      </small>

  </div>
</div>

<?php
}
?>
<!-- Footer -->
<?php
  include('common/footer.php');
?>

<script>

    $(document).ready(function(){
      $('#account').focusout(function() {
          $.ajax({
            url: 'id_validate.php',
            type: 'POST',          
            data: {
              request:'checkaccount',account: $('#account').val()
            },
            error: function(xhr) {
              alert('Ajax request 發生錯誤');
            },
            success: function(response) {
              if(response==1){
                $('#validateaccount').html("帳號已存在，請更改");
              }else{
                $('#validateaccount').html("");
              }        
            }
          });
       });
   

      $("#button").click(function(){
      var warning = "";
      var checkaccount = false;
      var checkpassword = false;
      var checkpassword2 = false;      
      var checkname = false;
      var checkemail = false;
      var checkfile = false;
      var account = document.getElementById('account').value;
      var password = document.getElementById('password').value;
      var password2 = document.getElementById('password2').value;
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var file = document.register.file.value;
      //確認帳號不重複
      var validateaccount = document.getElementById('validateaccount');
      var validateaccountlength = validateaccount.innerHTML;
       //console.log(validateaccountlength);
       if(validateaccountlength.length!=0){
          alert("請修改帳號");
        }else if(validateaccountlength.length ==0){
                if(account.length==0){ //判斷帳號不為空值
                    var a = "請輸入帳號!\r";
                    warning = warning + a;
                }
                if(password.length==0){ //判斷密碼不為空值
                    var b = "請輸入密碼!\r";
                    warning = warning + b;
                }
                if(password2.length==0){ //判斷密碼不為空值
                    var c = "請輸入確認密碼!\r";
                    warning = warning + c;
                }
                if(name.length==0){ //判斷信箱不為空值
                    var d = "請輸入房客姓名!\r";
                    warning = warning + d;
                }
                if(email.length==0){ //判斷信箱不為空值
                    var e = "請輸入信箱!\r";
                    warning = warning + e;
                }
                if(file== ""){ //判斷是否上傳檔案
                    var f = "請上傳檔案!";
                    warning = warning + f;  
                     alert(warning);    
                }             
        }        
            


      if(file !=""){
          checkfile=true;
      }
      if(account.length>0 && password.length>0 && password2.length>0 && name.length>0 && email.length>0 && file !=""){
            if(/^([u4e00-u9fa5]|[0-9a-zA-Z|[\x21-\x7e]])+$/.test(account)){ //限制帳號只能輸入英文、數字、及部分特殊符號
               $('#warnaccount').html("");
                //console.log('帳號正確!!');
                checkaccount =true;
            }else{
                 $('#warnaccount').html("※帳號只能輸入英文、數字、及部分特殊符號!");
                 $('#account').css("border-color","rgb(253, 13, 77)");
                 $('#account').css("border-color","rgb(253, 13, 77)");
                 $('#account').css("background-color","rgb(255, 255, 255)");      
                 //console.log('帳號只能輸入英文、數字、及部分特殊符號!!');
                checkaccount =false;
            }

          var accountlength = account.length;
            if(accountlength>=1 && accountlength<=8){  //判斷帳號長度在1~8個字
              $('#warnaccountlength').html("");
              //console.log('帳號長度正確!!');
              checkaccount =true;
            }else{
               $('#warnaccountlength').html("※帳號請輸入1～8個字!");
               $('#account').css("border-color","rgb(253, 13, 77)");
               $('#account').css("background-color","rgb(255, 255, 255)");      
               //console.log('帳號長度不正確!!');
              checkaccount =false;
            }          

            if(/^([u4e00-u9fa5]|[0-9a-zA-Z|[\x21-\x7e]])+$/.test(password)){ //限制密碼只能輸入英文、數字、及部分特殊符號
               $('#warnpassword').html("");
                //console.log('密碼正確!!');
                checkpassword =true;
            }else{
                 $('#warnpassword').html("※密碼只能輸入英文、數字、及部分特殊符號!");
                 $('#account').css("border-color","rgb(253, 13, 77)");
                 $('#account').css("background-color","rgb(255, 255, 255)");      
                 //console.log('密碼只能輸入英文、數字、及部分特殊符號!!');
                checkpassword =false;
            }

          var passwordlength = password.length;
            if(passwordlength>=1 && passwordlength<=20){  //判斷密碼長度在1~8個字
              $('#warnpasswordlength').html("");
              //console.log('密碼正確!!');
              checkpassword =true;
            }else{
               $('#warnpasswordlength').html("※密碼請輸入1～20個字!");
               $('#password').css("border-color","rgb(253, 13, 77)");
               $('#password').css("background-color","rgb(255, 255, 255)");      
               //console.log('密碼請輸入1～20個字!');
              checkpassword =false;
            }

            if(password!=password2){
              alert("密碼輸入不一致，請再次輸入");
              document.getElementById('password').value = "";
              document.getElementById('password2').value = "";   
            }else{
              checkpassword2="true";
            }
       

            if(/[^\u4e00-\u9fa5]/.test(name)){ //限制名稱只能為中文
                $('#warnname').html("※只能輸入中文字!");
                 $('#name').css("border-color","rgb(253, 13, 77)");
                 $('#name').css("background-color","rgb(255, 255, 255)");      
                 //console.log('只能輸入中文字!');
                checkname =false;        
            }else{
                $('#warnname').html("");
                //console.log('名字正確!!');
                checkname =true;
            }

            if (email.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/) != -1){ //判斷email格式
              $('#warnemail').html("");
              //console.log('email格式正確!!');
              checkemail =true;
            }else{
              $('#warnemail').html("※email格式錯誤，請修正!");
              $('#email').css("border-color","rgb(253, 13, 77)");
              $('#email').css("background-color","rgb(255, 255, 255)");   
              //console.log('email格式錯誤!!');
              checkemail =false;
            }
        }
        
          if(checkaccount && checkpassword && checkpassword2 && checkname && checkemail && checkfile){
            document.getElementById('register').submit();
          }else{  
             return false;
          }       
       });
     });
</script>

<script>
    <?php if(isset($_GET['warning'])){?>
        <?php if($_GET['warning']=='ckeckerror'){ ?> //驗證密碼錯誤
            layer.open({
          type: 1
          ,title: false //不显示标题栏
          ,closeBtn: false
          ,area: '300px;'
          ,shade: 0.8
          ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
          ,resize: false
          ,btn: ['放棄', '再次輸入']
          ,btnAlign: 'c'
          ,moveType: 1 //拖拽模式，0或者1
          ,content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">注意：<br>密碼與確認密碼需相同！<br></div>'
          ,success: function(layero){
            var btn = layero.find('.layui-layer-btn');
            btn.find('.layui-layer-btn0').attr({
              href: 'index.php'
            });
          }
        });
         <?php } ?>
    <?php } ?>

  <?php if(isset($_GET['message'])){?>
        <?php if($_GET['message']=='register'){ ?>  //於Auth.php 進行驗證帳號不會重複
          layer.alert('恭喜，註冊成功！請耐心等候驗證～', {
            skin: 'layui-layer-molv' //样式类名
            ,closeBtn: 0
          });
        <?php } ?>
  <?php } ?>
</script>



  

