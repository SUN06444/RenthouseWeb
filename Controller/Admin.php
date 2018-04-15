<?php

class Admin
{
	//計算目前會員總人數
	public static function count_all_member_num()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT COUNT(*) as num FROM `member`";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$count_member[]=$row;
		 	}
		 		return $count_member;
		 }else {
		    echo "0 results";
		}
	}

	//計算目前房客總人數(須以審核過)
	public static function count_all_tenant_num()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT COUNT(*) as num FROM `member` where `level`='1' AND `verify` = '1'";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$count_tentant[]=$row;
		 	}
		 		return $count_tentant;
		 }else {
		    echo "0 results";
		}
	}

	//計算目前房東總人數(須以審核過)
	public static function count_all_landlord_num()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT COUNT(*) as num FROM `member` where `level`='2' AND `verify` = '1'";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$count_landlord[]=$row;
		 	}
		 		return $count_landlord;
		 }else {
		    echo "0 results";
		}
	}

	//計算目前總房屋數
	public static function count_all_houses_num()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT COUNT(*) as num FROM `houseinfo` ";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$count_houses[]=$row;
		 	}
		 		return $count_houses;
		 }else {
		    echo "0 results";
		}
	}

	//計算目前房客總人數(須以審核過)
	public static function count_all_noverify_num()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT COUNT(*) as num FROM `member` where `verify`='0'";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$noverify[]=$row;
		 	}
		 		return $noverify;
		 }else {
		    echo "0 results";
		}
	}

	//計算目前總退件次數
	public static function count_all_withdrawals_num()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT COUNT(*) as num FROM `member` where `withdrawal`='1'";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$count_withdrawals[]=$row;
		 	}
		 		return $count_withdrawals;
		 }else {
		    echo "0";
		}
	}

	//審核房客資料
	public static function verify_tenant_data()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT * FROM `member` WHERE `level` = '1' AND `verify` = '0' AND `withdrawal`='0'";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$verify_tenant_data[]=$row;
		 	}
		 		return $verify_tenant_data;
		 }else {
		    echo " --目前尚未待審核房客資料--";
		}
	}

	//房客審核通過 更改verify的值
	public static function verify_tenant_checkok()
	{
		$mysqli = Connect::conn();
		$mem_id = $_SESSION['check_tenant_id'];
		$sql = "UPDATE `member` SET `verify` = '1' WHERE `member`.`mem_id` = $mem_id";
    	$result= $mysqli->query($sql);
    	 if (!$mysqli->query($sql)) {  //讀取錯誤訊息
    	 	echo $sql;
               printf("Errormessage: %s\n", $mysqli->error);
            }else{

                return true;
            }
            unset($sql);
            $mysqli->close();
	}

	//房客審核不通過者 增加退件次數
	public static function verify_tenant_nopass()
	{
		$mysqli = Connect::conn();
		$mem_id = $_GET['verify_tenant_nopass'];
		$sql = "UPDATE `member` SET `withdrawal` = '1' WHERE `member`.`mem_id` = $mem_id";
    	$result= $mysqli->query($sql);
    	 if (!$mysqli->query($sql)) {  //讀取錯誤訊息
               printf("Errormessage: %s\n", $mysqli->error);
            }else{

                return true;
            }
            unset($sql);
            $mysqli->close();
	}

	//查看目前房客須審核的筆數
	public static function verify_tenant_num()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT COUNT(*) AS num FROM `member` WHERE `level` = '1' AND `verify` = '0' AND `withdrawal`='0'";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$verify_tenant_data[]=$row;
		 	}
		 		return $verify_tenant_data;
		 }else {
		    echo "0";
		}
	}

//-----------------------------------------------//
	//審核房東資料
	public static function verify_landlord_data()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT * FROM `member` WHERE `level` = '2' AND `verify` = '0' AND `withdrawal`='0'";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$verify_landlord_data[]=$row;
		 	}
		 		return $verify_landlord_data;
		 }else {
		    echo " --目前尚未待審核房客資料--";
		}
	}

	//房東審核通過 更改verify的值
	public static function verify_landlord_checkok()
	{
		$mysqli = Connect::conn();
		$mem_id = $_SESSION['check_landlord_id'];
		$sql = "UPDATE `member` SET `verify` = '1' WHERE `member`.`mem_id` = $mem_id";
    	$result= $mysqli->query($sql);
    	 if (!$mysqli->query($sql)) {  //讀取錯誤訊息
               printf("Errormessage: %s\n", $mysqli->error);
            }else{

                return true;
            }
            unset($sql);
            $mysqli->close();
	}

	//房東審核不通過者 增加退件次數
	public static function verify_landlord_nopass()
	{
		$mysqli = Connect::conn();
		$mem_id = $_GET['verify_tenant_nopass'];
		$sql = "UPDATE `member` SET `withdrawal` = '1' WHERE `member`.`mem_id` = $mem_id";
    	$result= $mysqli->query($sql);
    	 if (!$mysqli->query($sql)) {  //讀取錯誤訊息
               printf("Errormessage: %s\n", $mysqli->error);
            }else{

                return true;
            }
            unset($sql);
            $mysqli->close();
	}

	//查看目前房客須審核的筆數
	public static function verify_landlord_num()
	{
		$mysqli = Connect::conn();
		$sql = "SELECT COUNT(*) AS num FROM `member` WHERE `level` = '2' AND `verify` = '0' AND `withdrawal`='0'";
    	$result= $mysqli->query($sql);

    	if ($result->num_rows > 0){
		   while($row = $result->fetch_array()) {
		   		$verify_landlord_data[]=$row;
		 	}
		 		return $verify_landlord_data;
		 }else {
		    echo "0";
		}
	}






	
}
?>