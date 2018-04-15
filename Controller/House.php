<?php
class House
    {

        public $mem_id;
        public $account;
        public $name;
        public $file;
        public function __construct()
        {

            if(Auth::check()==true){
                $this->mem_id = $_SESSION['mem_id'];
                $this->email = $_SESSION['email'];
            }else{
                return redirect('login_entrance.php');
            }
                $this->mysqli=Connect::conn();

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


        //INSERT INTO `houseinfo_seed` (`house_id`, `mem_id`, `email`, `phone`, `contact`, `relationship`, `housename`, `address`, `lease_term`, `rental`, `housetype`, `ping`, `house_age`, `deposit`, `pet`, `elevator`, `opened`, `parking_spaces`, `house_limit`, `material`, `curfew`, `equipment`, `identity_requirements`, `balcony`, `supply`, `others`) VALUES ('1', '6', 'kido@gmail.com', '0912345678', '阿王', '房東兒子', '最棒房屋', '地球上某一處', '1~3個月', '5000', '套房', '5', '10年', '5000', '可', '有', '可', '有', '無', '公園,公車站', '無', '消防設備', '男女不限', '1', '很多', '無');

        public static function house_info($request){ //新增房屋
            $mysqli = Connect::conn();
            
            //$search = "SELECT * FROM `member` WHERE `mem_id` = $this->mem_id";
          
              $uploadFiles = $_SESSION['uploadFiles'];

              $lease=$request['lease_term'];
              switch ($lease) {
                case '1':
                  $lease = "1~3個月";
                  break;
                case '2':
                  $lease = "半年";
                  break;
                case '3':
                  $lease = "一年";
                  break;
                case '4':
                  $lease = "二年";
                  break;
                case '5':
                  $lease = "兩年以上";
                  break;
                default:
                  $lease = "未選擇租期";
                  break;
              }

                $housetype=$request['housetype'];
                switch ($housetype) {
                  case '1':
                    $housetype = "雅房";
                    break;
                  case '2':
                    $housetype = "套房";
                    break;
                  case '3':
                    $housetype = "公寓";                  
                    break;
                  default:
                    $housetype = "未選擇房型";            
                    break;
                }

                $material = implode(',', $request['material']);
                $equipment = implode(',', $request['equipment']);
                $security_equipment = implode(',', $request['security_equipment']);

            $sql="INSERT INTO `houseinfo` (`house_id`, `mem_id`, `email`, `phone`, `contact`, `relationship`, `housename`, `address`, `lease_term`, `rental`, `housetype`, `ping`, `house_age`, `deposit`, `pet`, `elevator`, `opened`, `parking_spaces`, `house_limit`, `material`, `curfew`, `equipment`, `security_equipment`,`identity_requirements`, `balcony`, `others`, `school`, `file1`,  `file2`,  `file3`,  `file4`,  `file5`,  `file6`, `date`) VALUES (NULL, '";

            $sql=$sql.$_SESSION['mem_id']."','".$_SESSION['email']."','".$request['phone']."','".$request['contact']."','".$request['relationship']."','".$request['housename']."','".$request['address']."','".$lease."','".$request['rental']."','".$housetype."','".$request['ping']."','".$request['house_age']."','".$request['deposit']."','".$request['pet']."','".$request['elevator']."','".$request['opened']."', '".$request['parking_spaces']."','".$request['house_limit']."','".$material."','".$request['curfew']."','".$equipment."','".$security_equipment."','".$request['identity_requirements']."','".$request['balcony']."','".$request['others']."','".$request['school']."','".$uploadFiles[0]."','".$uploadFiles[1]."','".$uploadFiles[2]."','".$uploadFiles[3]."','".$uploadFiles[4]."','".$uploadFiles[5]."',CURRENT_TIMESTAMP";
            $sql=$sql.");";
            
            if (!$mysqli->query($sql)) {  //讀取錯誤訊息
               printf("Errormessage: %s\n", $mysqli->error);
            }else{
                return true;
            }
            unset($sql);
            $mysqli->close();
        }

         



        public static function logout(){    //登出
            $_SESSION['mem_id'] = "";
            $_SESSION['account']="";
            $_SESSION['name']="";
             $_SESSION['email']="";
            $_SESSION['file']="";
            return true;
        }

    }
?>