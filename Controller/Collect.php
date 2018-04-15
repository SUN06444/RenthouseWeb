<?php
/**
* 
*/
class Collect 
{
	//查詢目前收藏的房屋比數（確保不超過5筆
	public static function limitfive()
	{
		$mysqli = Connect::conn();
		//SELECT count(*) FROM `collect` WHERE `mem_id`= '2'
		$mem_id = $_SESSION['mem_id'];


			$sql = "SELECT count(*) AS limitnum FROM `collect` WHERE `mem_id`= '$mem_id' ";

	    	$result= $mysqli->query($sql);
	    	
	        if ($result->num_rows > 0){
	           while($row = $result->fetch_array()) {
	              	$limitfive[]=$row;
	          	}
	          	
	            	return $limitfive;
	         	}else {
	         		return false;
	        }

	}


	//收藏房屋
	public static function collecthouse()
	{
		$mysqli = Connect::conn();
		//INSERT INTO `collect` (`collect_id`, `mem_id`, `house_id`, `date`) VALUES (NULL, '7', '11', CURRENT_TIMESTAMP);
		$house_id = $_POST['house_id'];
		$mem_id = $_POST['mem_id'];

			$sql = "INSERT INTO `collect` (`collect_id`, `mem_id`, `house_id`, `date`) VALUES (NULL, '".$mem_id."' , '".$house_id."' , CURRENT_TIMESTAMP)";
			

	    	if (!$mysqli->query($sql)) {  //讀取錯誤訊息
               printf("Errormessage: %s\n", $mysqli->error);
            }else{
                return true;
                return redirect('houseinfo.php?house_id='.$house_id.'');

            }
            unset($sql);
            $mysqli->close();

	}

	//記錄 - 使用者「增加」收藏房屋
	public static function record_add_collect()
	{
		$mysqli = Connect::conn();
		//INSERT INTO `collect` (`collect_id`, `mem_id`, `house_id`, `date`) VALUES (NULL, '7', '11', CURRENT_TIMESTAMP);
		$house_id = $_POST['house_id'];
		$mem_id = $_POST['mem_id'];
		$delete_date='null';
			$addrecord = "INSERT INTO `record_collect` (`record_id`, `mem_id`, `house_id`,`add_date`, `delete_date`) VALUES (NULL, '".$mem_id."' , '".$house_id."', CURRENT_TIMESTAMP , '".$delete_date."')";

	    	if (!$mysqli->query($addrecord)) {  //讀取錯誤訊息
               printf("Errormessage: %s\n", $mysqli->error);

            }else{
                return true;
            }
            unset($addrecord);
            $mysqli->close();

	}


	//防止使用者重複刪除房屋
	public static function found_collect()
	{
		$mysqli = Connect::conn();
		//DELETE FROM `collect` WHERE `collect`.`collect_id` = 5" $SESSION['collect_id']

		
		$collect_id = $_POST['collect_id'] ;

			$sql = "SELECT * FROM `collect` WHERE `collect_id` ='$collect_id'";
			
	    	$result= $mysqli->query($sql);
	    	
	        if ($result->num_rows > 0){
	           while($row = $result->fetch_array()) {
	              	$found_collect[]=$row;
	          	}
	          	
	            	return $found_collect;
	        }else {

	         		return false;
	        }

	}


	//使用者刪除收藏房屋
	public static function delete_collect()
	{
		$mysqli = Connect::conn();
		//DELETE FROM `collect` WHERE `collect`.`collect_id` = 5" $SESSION['collect_id']

		
		$collect_id = $_POST['collect_id'] ;

			$sql = "DELETE FROM `collect` WHERE `collect`.`collect_id` = $collect_id";
			
	    	if (!$mysqli->query($sql)) {  //讀取錯誤訊息
               printf("Errormessage: %s\n", $mysqli->error);
            }else{
                return true;
            }
            unset($sql);
            $mysqli->close();

	}

	//記錄 - 使用者「刪除」收藏房屋
	public static function record_delete_collect()
	{
		$mysqli = Connect::conn();
		$mem_id = $_POST['mem_id'];
		$house_id = $_POST['house_id'];
		$add_date='null';
			$deleterecord = "INSERT INTO `record_collect` (`record_id`, `mem_id`, `house_id`,`add_date`, `delete_date`) VALUES (NULL, '".$mem_id."' , '".$house_id."' , '".$add_date."' , CURRENT_TIMESTAMP)";
			
	    	if (!$mysqli->query($deleterecord)) {  //讀取錯誤訊息
               printf("Errormessage: %s\n", $mysqli->error);
            }else{

                return true;
            }
            unset($deleterecord);
            $mysqli->close();

	}
	
	
	
	//查詢收藏房屋資料庫內的房屋id，以便與會員確認，確認是否已收藏
	public static function checkcollect()
	{
		$mysqli = Connect::conn();
		//SELECT * FROM `collect` WHERE `house_id`='5'
		$house_id = $_SESSION['house_id'];
		$mem_id = $_SESSION['mem_id'];

			$sql = "SELECT * FROM `collect` WHERE `house_id`= '$house_id' ";

	    	$result= $mysqli->query($sql);
	    	
	        if ($result->num_rows > 0){
	           while($row = $result->fetch_array()) {
	              	$checkcollect[]=$row;
	          	}
	            	return $checkcollect;
	         	}else {
	         		return false;
	        }

	}

	//根據收藏的房屋進行比較
	public static function compare()
	{
		$mysqli = Connect::conn();
		//SELECT collect.*,member.account,housetype,ping,house_age,deposit,pet,opened,elevator,parking_spaces,balcony FROM `collect` INNER JOIN member ON collect.mem_id=member.mem_id INNER JOIN houseinfo_seed ON collect.house_id=houseinfo_seed.house_id
		$account = $_SESSION['account'];
		$houseinfo_seed = $_SESSION['house_id'];

			$sql = "SELECT `collect`.*,`member`.`account`,`housename`,`housetype`,`ping`,`house_age`,`deposit`,`pet`,`opened`,`elevator`,`parking_spaces`,`balcony` FROM `collect` INNER JOIN member ON `collect`.`mem_id`=`member`.`mem_id` INNER JOIN `houseinfo` ON `collect`.`house_id`=`houseinfo`.`house_id` WHERE `member`.`account` = '$account' LIMIT 0,5";
			
			$result= $mysqli->query($sql);
	        if ($result->num_rows > 0){
	           while($row = $result->fetch_array()) {
	              	$comparedata[]=$row;
	          	}
	          	//echo $sql;
	            	return $comparedata;
	         	}else {
	         		//echo $sql;
	         		return false;
	        }

		
	}

		//找尋增加紀錄
		public static function record()
		{
			$mysqli = Connect::conn();
			$mem_id = $_SESSION['mem_id'];
				$sql = "SELECT record_collect.*,houseinfo.housename as housename FROM `record_collect` INNER JOIN houseinfo on record_collect.house_id = houseinfo.house_id  WHERE record_collect.mem_id =$mem_id ORDER BY `record_collect`.`record_id` DESC";
				
				$result= $mysqli->query($sql);
		    		
		        if ($result->num_rows > 0){
		           while($row = $result->fetch_array()) {
		              	$record_compare[]=$row;
		          	}
		            	return $record_compare;
		         	}else {
		         		return false;
		        }

			
		}

		
}
?>