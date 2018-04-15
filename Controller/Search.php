<?php

class Search
{
	
	public static function schtype()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT * FROM `tw_schtype`";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$schtype[]=$row;
		 	}
		 		return $schtype;
		 }else {
		    echo "0 results";
		}
	}




//ok:-----------------------------//
    public static function checkhouse_id(){ //確認房屋id
    
        $mysqli = Connect::conn();
			if(isset($_GET['house_id'])){      
                      $house_id =$_GET['house_id']; 
            }
        $sql = "SELECT * FROM `houseinfo` WHERE `house_id` = '$house_id'";  //確認房屋id
        
          $result= $mysqli->query($sql);

          if ($result->num_rows > 0){
           while($row = $result->fetch_array()) {
              $houseinfo[]=$row;
          }
            return $houseinfo;
         }else {
            echo $sql;
        }
    }
//------------------------------//

//ok:-----------------------------//
    public static function school(){ //尋找學校
        $mysqli = Connect::conn();
			if(isset($_GET['region'], $_GET['county'])){
					$region = $_GET['region'];
					$county = $_GET['county'];  
		 	}
			switch ($county) {
				case '台北市':
					$county_id = '1';
					break;
				case '新北市':
					$county_id = '2';
					break;
				case '桃園市':
					$county_id = '3';
					break;
				case '基隆市':
					$county_id = '4';
					break;
				case '新竹縣':
					$county_id = '5';
					break;
				case '新竹市':
					$county_id = '6';
					break;
				case '苗栗縣':
					$county_id = '7';
					break;
				case '臺中市':
					$county_id = '8';
					break;
				case '彰化縣':
					$county_id = '9';
					break;
				case '南投縣':
					$county_id = '10';
					break;
				case '雲林縣':
					$county_id = '11';
					break;
				default:
					$county_id = '0';
					break;
			}

       //SELECT tw_location.id,tw_location.location_ch,tw_county.county_ch,tw_school.region_ch FROM tw_location INNER JOIN tw_county ON tw_location.id=tw_county.id INNER JOIN tw_school ON tw_location.id=tw_school.id WHERE tw_location.location_ch='中部' AND tw_county.county_ch='臺中市'
        $sql = "SELECT tw_location.id,tw_location.location_ch,tw_county.county_ch,tw_school.region_ch,tw_school.region_eg FROM tw_location INNER JOIN tw_county ON tw_location.id=tw_county.id INNER JOIN tw_school ON tw_location.id=tw_school.id WHERE tw_school.id='$region' AND tw_school.cid='$county_id' GROUP BY tw_school.region_ch";

          $result= $mysqli->query($sql);

          if ($result->num_rows > 0){
           while($row = $result->fetch_array()) {
              $school[]=$row;
          }
            return $school;
         }else {
            echo "目前尚無資料";
        }
    }
//------------------------------//根據點選的學校顯示學校


	public static function houseinfo()
	{
		$mysqli = Connect::conn();
		
		//房屋類型(雅房、套房、公寓)	
		if(isset($_GET['house_type'])){	
			$house_type = $_GET['house_type'];
		}else{
			$house_type = '%%%';
		}

		//預算
		if(isset($_GET['budget'])){	
			$budget = $_GET['budget'];
			switch ($budget) {
				case '*':
					$budget1 = '0';
					$budget2 = '100000';
					break;
				case '2000~2500':
					$budget1 = '2000';
					$budget2 = '2501';
					break;
				case '2500~3000':
					$budget1 = '2500';
					$budget2 = '3001';
					break;
				case '3000~3500':
					$budget1 = '3000';
					$budget2 = '3501';
					break;
				case '3500~4000':
					$budget1 = '3500';
					$budget2 = '4001';
					break;
				case '4000':
					$budget1 = '4001';	
					$budget2 = '1000000';	
				break;
				default:
					$budget1 = '0';
					$budget2 = '100000';
					break;
			}
		}else{
			$budget1 = '0';
			$budget2 = '100000';
		}

		//坪數
		if(isset($_GET['ping'])){	
			$ping = $_GET['ping'];
			switch ($ping) {
				case '*':
					$ping1 = '0';
					$ping2 = '100000';
					break;
				case '1~5':
					$ping1 = '1';
					$ping2= '5';
					break;
				case '5~10':
					$ping1 = '5';
					$ping2 = '11';
					break;
				case '10~15':
					$ping1 = '10';
					$ping2 = '16';
					break;
				case '15~20':
					$ping1 = '15';
					$ping2= '21';
					break;
				case '20~25':
					$ping1 = '20';
					$ping2 = '26';
					break;
				case '25':
					$ping1 = '25';	
					$ping2 = '1000000';	
				break;
				default:
					$ping1 = '0';
					$ping2 = '100000';
					break;
			}
		}else{
			$ping1 = '0';
			$ping2 = '100000';
		}

		//租期
		if(isset($_GET['lease_term'])){	
			$lease_term = $_GET['lease_term'];		
		}else{
			$lease_term = '%%%';
		}

		//生活機能
		if(isset($_GET['material'])){	
		 $material = implode(',', $_GET['material']);
    	}else{
    		$material = '%%%';
    	}

    	//學校
		if(isset($_GET['school'])){
			$_SESSION['school']=$_GET['school'];
			$school=$_GET['school'];
			$sql = "SELECT * FROM `houseinfo` WHERE `school` = $school";
		}else{
			$sql = "SELECT * FROM `houseinfo` ORDER BY `houseinfo`.`rental` DESC ";
		}

		//搜尋
		if(isset($_GET['search'])){

			if($_SESSION['school'] != null){
				//echo $_SESSION['school'];
				//$sql = "SELECT * FROM `houseinfo_seed` WHERE  `housetype` LIKE '$house_type' AND `rental` BETWEEN $budget1 AND $budget2  AND `ping` BETWEEN $ping1 AND $ping2 AND `lease_term` LIKE '$lease_term' AND `material` LIKE '$material' "; 
				$school=$_SESSION['school'];
				$sql = "SELECT * FROM `houseinfo` WHERE `school` = $school AND `housetype` LIKE '$house_type' AND `rental` BETWEEN $budget1 AND $budget2  AND `ping` BETWEEN $ping1 AND $ping2 AND `lease_term` LIKE '$lease_term' AND `material` LIKE '$material' "; 
				//$_SESSION['school']='';
			}else if($_SESSION['school'] == null){
				$sql = "SELECT * FROM `houseinfo` WHERE  `housetype` LIKE '$house_type' AND `rental` BETWEEN $budget1 AND $budget2  AND `ping` BETWEEN $ping1 AND $ping2 AND `lease_term` LIKE '$lease_term' AND `material` LIKE '$material' ";
			}
		}
		//echo $sql;
    	$result= $mysqli->query($sql);
    
    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$houseinfo[]=$row;

		 	}
		 		return $houseinfo;

		 }else {
		 	//echo $sql;
		    echo "--找不到相關結果--";
		}		
	}

	public static function view_house()
	{
		$mysqli = Connect::conn();

			$sql = "SELECT *,member.mem_id FROM `houseinfo` INNER JOIN member ON member.mem_id=houseinfo.mem_id ";
	
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$view_house[]=$row;
		 	}
		 		return $view_house;
		 }else {
		    echo $sql;
		}
	}

//------------------------------//快速搜索界面顯示點選學校
	public static function viewschool()
	{
		$mysqli = Connect::conn();
		//if(isset($_GET['school'])){
			//$_SESSION['school'] = $_GET['school'];

			$school=$_SESSION['school'];
			$sql = "SELECT * FROM `tw_school` WHERE `region_eg` = $school";
		//}
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$viewschool[]=$row;
		 	}
		 		return $viewschool;
		 }else {
		    echo $sql;
		}
	}
/*
//------------------------------//搜尋房型
	public static function viewhousetype()
	{
		$mysqli = Connect::conn();
		if(isset($_GET['house_type'])){
			
			$school=$_GET['house_type'];
			$sql = "SELECT * FROM `houseinfo_seed` WHERE `housetype` = $school";
		}
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$viewschool[]=$row;
		 	}
		 		return $viewschool;
		 }else {
		    echo $sql;
		}
	}
*/

	public static function county_id1()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT `county_ch` FROM `tw_county` WHERE id=1";

    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$county_id1[]=$row;	   		
		 	}
		 		return $county_id1;
		 }else {
		    echo "0 results";
		}
	}

	public static function county_id2()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT `county_id` FROM `tw_county` WHERE id=2";

    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$county_id2[]=$row;
		 	}
		 		return $county_id2;
		 }else {
		    echo "0 results";
		}
	}

	public static function location()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT * FROM `tw_location`";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$location[]=$row;
		 	}
		 		return $location;
		 }else {
		    echo "0 results";
		}
	}

	public static function type()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT * FROM `housetype`";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$info[]=$row;
		 	}
		 		return $info;
		 }else {
		    echo "0 results";
		}
	}

	public static function vital()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT * FROM `vital function`";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$vital[]=$row;
			}
		 		return $vital;
		 }else {
		    echo "0 results";
		}
	}

	public static function budget()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT * FROM `budget`";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$budget[]=$row;
			}
		 		return $budget;
		 }else {
		    echo "0 results";
		}
	}

	public static function ping()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT * FROM `ping`";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$ping[]=$row;
			}
		 		return $ping;
		 }else {
		    echo "0 results";
		}
	}
}
?>