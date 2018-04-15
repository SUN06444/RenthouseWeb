<?php
class Auth
    {

        public $mem_id;
        public $account;
        public $name;
        public $file;
        public function __construct()
        {

            if(self::check()){
                $this->mem_id= $_SESSION['mem_id'];
                $this->account = $_SESSION['account'];
                $this->name = $_SESSION['name'];
                $this->email = $_SESSION['email'];
                $this->file = $_SESSION['file'];
                $this->level = $_SESSION['level'];
            }

        }

        public static function check(){  //檢查是否登入$s = Auth::check();(檔案在register.php內)
            if(isset($_SESSION['mem_id']))
            {
                if(($_SESSION['mem_id']!="")){
                     $loggedin =TRUE;
                    return true;
                }
            }
            else
            {
                 $loggedin =false;
                return false;
            }

        }

          public static function checklev_value(){ //確認level_value權限等級

            if(isset($_GET['val'])){
                if($_GET['val']=='1'){ 
                      $_SESSION['val_id'] =$_GET['val']; 
                }elseif ($_GET['val']=='2') {
                      $_SESSION['val_id'] =$_GET['val']; 
                }elseif ($_GET['val']=='3') {
                      $_SESSION['val_id'] =$_GET['val']; 
                }
            }

        }


        public static function checklev_value1(){ //確認level_value權限等級

            if(isset($_SESSION['val_id']))
            {
                if(($_SESSION['val_id']!="1")){
                     $level1 =false;
                    return false;
                }else{
                    $level1 =true; //為1
                     return true;
                }
            }
        }


        public static function checklev_value2(){ //確認level_value權限等級

            if(isset($_SESSION['val_id']))
            {

                if(($_SESSION['val_id']!="2")){
                     $level2 =false;
                    return false;
                }else{
                    $level2 =TRUE; //為2
                     return true;
                }
            }
            //if(isset($_GET['val'])){
            //    if($_GET['val']=='1'){ 
              //        $_SESSION['val_id'] =$_GET['val']; 
                //}elseif ($_GET['val']=='2') {
                  //    $_SESSION['val_id'] =$_GET['val']; 
                // }elseif ($_GET['val']=='3') {
                 //     $_SESSION['val_id'] =$_GET['val']; 
               // }
           // }

        }

        public static function registerlevel(){ //判斷要註冊的權限等級(level)
            $mysqli = Connect::conn();
            $sql = "SELECT * FROM `level` LIMIT 0,2";
            $result= $mysqli->query($sql);
            if ($result->num_rows > 0){
               while($row = $result->fetch_array()) {
               $_SESSION['lev_id']=$row['lev_id'];
                    $levels[]=$row;

                }
                    return $levels;
             }else {
                echo "error";
             }

        }

        public static function loginlevel(){ //登入會員等級
            $mysqli = Connect::conn();
            $sql = "SELECT * FROM `level`";
            $result= $mysqli->query($sql);
            if ($result->num_rows > 0){
               while($row = $result->fetch_array()) {
               $_SESSION['lev_id']=$row['lev_id'];
                    $levels[]=$row;

                }
                    return $levels;
             }else {
                echo "error";
             }
        }

        public static function register_1($request){ //註冊房客(學生)
            $mysqli = Connect::conn();

            if(!self::checkaccount($request['account'])){
                echo "1";
            }

            $photopath = self::uploadPhoto($_FILES['file'],$request['account']);  //uploadPhoto為下方的function

            $sql="INSERT INTO `member` (`mem_id`, `account`, `password`, `name`, `email`, `file`, `mday`, `verify`, `level`,`withdrawal`) VALUES (NULL, '";

            $sql=$sql.$request['account']."', '".md5($request['password'])."','".$request['name']."','".$request['email']."', '".$photopath."',";
            $sql=$sql." CURRENT_TIMESTAMP,0,1,0)";
            if (!$mysqli->query($sql)) {  //讀取錯誤訊息
               printf("Errormessage: %s\n", $mysqli->error);
            }else{
                //return true;
                return redirect('register.php?message=register');
            }
            unset($sql);
            $mysqli->close();
        }

        public static function register_2($request){ //註冊房東
            $mysqli = Connect::conn();

            if(!self::checkaccount($request['account'])){
                echo "1";
            }

            $photopath = self::uploadPhoto($_FILES['file'],$request['account']);  //uploadPhoto為下方的function


            $sql="INSERT INTO `member` (`mem_id`, `account`, `password`, `name`, `email`, `file`, `mday`, `verify`, `level`,`withdrawal`) VALUES (NULL, '";

            $sql=$sql.$request['account']."', '".md5($request['password'])."','".$request['name']."','".$request['email']."', '".$photopath."',";
            $sql=$sql." CURRENT_TIMESTAMP,0,2,0)";
            if (!$mysqli->query($sql)) {  //讀取錯誤訊息
               printf("Errormessage: %s\n", $mysqli->error);
            }else{
                //return true;
                return redirect('register.php?message=register');
            }
            unset($sql);
            $mysqli->close();
        }

         public static function uploadPhoto($file,$name){ //與上方self::uploadPhoto做對應
            $uploaddir = 'img/users/';
            $uploadfile = $uploaddir . basename(rand(1111, 9999).$file['name']);
            if (move_uploaded_file($file['tmp_name'], $uploadfile)) {
                return $uploadfile;
            } else {
                return false;
            }
        }


         public static function headPhoto($file,$name){ //與上方self::uploadPhoto做對應
            $uploaddir = '../head/users/';
            $uploadfile = $uploaddir . basename(rand(1111, 9999).$file['name']);

            if (move_uploaded_file($file['tmp_name'], $uploadfile)) {
                return $uploadfile;
            } else {
                return false;
            }
        }

        public static function user_head(){ //後台大頭貼顯示
            $mysqli = Connect::conn();
            $account = $_SESSION['account'];
            $sql = "SELECT * FROM `member` WHERE `account` = '$account'";
            $result= $mysqli->query($sql);
            if ($result->num_rows > 0){
               while($row = $result->fetch_array()) {
                    $user_head[]=$row;

                }
                    return $user_head;
             }else {
                echo "error";
             }
        }

        public static function allmember(){ //顯示所有會員
            $mysqli = Connect::conn();
            $sql = "SELECT * FROM `member`  WHERE  `verify`='1'";
            $result= $mysqli->query($sql);
            if ($result->num_rows > 0){
               while($row = $result->fetch_array()) {
                    $user_head[]=$row;

                }
                    return $user_head;
             }else {
                echo "目前尚未審核通過的會員";
             }
        }


        public static function view_all_tenant(){ //只顯示房客
            $mysqli = Connect::conn();
            $sql = "SELECT * FROM `member` WHERE `level`='1' AND `verify`='1'";
            $result= $mysqli->query($sql);
            if ($result->num_rows > 0){
               while($row = $result->fetch_array()) {
                    $user_head[]=$row;

                }
                    return $user_head;
             }else {
                echo "error";
             }
        }
        public static function view_all_landlord(){ //只顯示房東
            $mysqli = Connect::conn();
            $sql = "SELECT * FROM `member` INNER JOIN houseinfo ON member.mem_id=houseinfo.mem_id WHERE `level`='2' AND `verify`='1'";
            $result= $mysqli->query($sql);
            if ($result->num_rows > 0){
               while($row = $result->fetch_array()) {
                    $user_head[]=$row;

                }
                    return $user_head;
             }else {
                echo "error";
             }
        }

        public static function house_add_time(){ //顯示房東新增房屋的時間
            $mysqli = Connect::conn();
            $account = $_SESSION['account'];
            $sql = "SELECT * FROM `member` WHERE `account` = '$account'";
            $result= $mysqli->query($sql);
            if ($result->num_rows > 0){
               while($row = $result->fetch_array()) {
                    $house_add_time[]=$row;

                }
                    return $house_add_time;
             }else {
                echo "error";
             }
        }

       public static function head_pic(){  //確認帳號不重複
            $mysqli = Connect::conn();
            //UPDATE `member` SET `email` = 'student3-3@gmail.com' WHERE `member`.`account` = 'student3'

            $account = $_POST['account'];
            $photopath = self::headPhoto($_FILES['file'],$request['account']);  //uploadPhoto為下方的function

            $sql="UPDATE `member` SET `head` = '$photopath' WHERE `member`.`account` = '$account'";
            $_SESSION['head'] =  $photopath;
           if (!$mysqli->query($sql)) {  //讀取錯誤訊息
               printf("Errormessage: %s\n", $mysqli->error);
            }else{

                return true;
            }
            unset($sql);
            $mysqli->close();
        }




        public static function loggedin_1($request){    //房客登入
            $mysqli = Connect::conn();
            $sql="select * from `member` where `account` like '".$request['account']."' and `password` like'".md5($request['password'])."' AND `level`='1' AND `verify` = '1' ";
            //echo $sql;
            $result= $mysqli->query($sql);
            if(($result->num_rows)==1){
                $user = $result->fetch_object();
                $_SESSION['mem_id']=$user->mem_id;
                $_SESSION['account']=$user->account;
                $_SESSION['name']=$user->name;
                $_SESSION['email']=$user->email;
                $_SESSION['file']=$user->file;
                $_SESSION['level']=$user->level;
                return redirect('index.php');
            }else{
                return redirect('login.php?message=error');
            }
            $result->close();
            $mysqli->close();
        }

        public static function loggedin_2($request){    //房東登入
            $mysqli = Connect::conn();
            $sql="select * from `member` where `account` like '".$request['account']."' and `password` like'".md5($request['password'])."' AND `level`='2' AND `verify` = '1'";
            //echo $sql;
            $result= $mysqli->query($sql);
            if(($result->num_rows)==1){
                $user = $result->fetch_object();
                $_SESSION['mem_id']=$user->mem_id;
                $_SESSION['account']=$user->account;
                $_SESSION['name']=$user->name;
                $_SESSION['email']=$user->email;
                $_SESSION['file']=$user->file;
                $_SESSION['level']=$user->level;
                return redirect('index.php');
            }else{
                return redirect('login.php?message=error');
            }
            $result->close();
            $mysqli->close();
        }

        public static function loggedin_3($request){    //管理人員登入
            $mysqli = Connect::conn();
            $sql="select * from `member` where `account` like '".$request['account']."' and `password` like'".md5($request['password'])."' AND `level`='3' AND `verify` = '1'";
            //echo $sql;
            $result= $mysqli->query($sql);
            if(($result->num_rows)==1){
                $user = $result->fetch_object();
                $_SESSION['mem_id']=$user->mem_id;
                $_SESSION['account']=$user->account;
                $_SESSION['name']=$user->name;
                $_SESSION['email']=$user->email;
                $_SESSION['file']=$user->file;
                $_SESSION['level']=$user->level;
                return redirect('production/index.php');
            }else{
                return redirect('login.php?message=error');
            }
            $result->close();
            $mysqli->close();
        }

        public static function checkaccount($account){  //確認帳號不重複
            $mysqli = Connect::conn();
            $sql="select * from `member` where account='".$account."'";
            //echo $sql;
            $result= $mysqli->query($sql);
            if(($result->num_rows)==1){
                return false;
            }else{
                return true;
            }
            $result->close();
            $mysqli->close();
        }

        public static function update_email(){  //確認帳號不重複
            $mysqli = Connect::conn();
            //UPDATE `member` SET `email` = 'student3-3@gmail.com' WHERE `member`.`account` = 'student3'

            $account = $_POST['account'];
            $update_email = $_POST['email'];
            $sql="UPDATE `member` SET `email` = '$update_email' WHERE `member`.`account` = '$account'";
            $_SESSION['email'] =  $update_email;
           if (!$mysqli->query($sql)) {  //讀取錯誤訊息
               printf("Errormessage: %s\n", $mysqli->error);
            }else{

                return true;
            }
            unset($sql);
            $mysqli->close();
        }

         


        //UPDATE `member` SET `account` = 'student3-1' WHERE `member`.`mem_id` = 24;




        public static function logout(){    //登出
            $_SESSION['mem_id'] = "";
            $_SESSION['account']="";
            $_SESSION['name']="";
            return true;
        }

    }
?>