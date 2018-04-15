<?php 
		include ("Connect/Connect.php");
		if(!($_POST['request'])){
			$request_validate="-1";
		}else{
		$request_validate=$_POST['request'];			
		}
		//print_r($_POST); // 顯示post資料
		switch ($request_validate) {
			case 'checkaccount':
				$account = $_POST['account'];
	            $mysqli = Connect::conn();
	            $sql="SELECT * FROM `member` WHERE account='".$account."'";
            	$result= $mysqli->query($sql);
				if(($result->num_rows)==1){
					echo "1";
            	}else{
                	return true;
            	}
				break;
			
			default:
				echo '未發現要求,請求錯誤';
				print_r($_POST) ;
				break;
		}
?>