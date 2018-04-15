<?php

class Connect
{
	public static function conn(){
		//$dbServer = "localhost";
		//$dbUser = "root";
		//$dbPass = " ";
		//$dbName = "renthouse";
 		$config = parse_ini_file('database.ini');
		//$mysqli = @new mysqli ($dbServer, $dbUser, $dbPass, $dbName);  //使用 @ 抑制建構方法可能產生的錯誤/警告訊息
 		$mysqli = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);   //主機,帳號,密碼,資

		if ($mysqli->connect_errno){
			printf("無法連線資料庫伺服器");
		}

		//設定連線的字元集為 UTF8 編碼
		$mysqli->set_charset("utf8");
		        return $mysqli;
	}
}

/*
	/查詢資料表
	$sql = "SELECT * FROM member";
	$result = $mysqli->query($sql); //查詢結果物件

	while ($row = $result->fetch_array()) { //fetch_array() 取得每筆紀錄的陣列
		echo $row0[0];
	}
*/



?>
