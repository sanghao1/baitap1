<?php 
	function getDB(){
		$dsn = "pgsql:host=ec2-54-221-212-126.compute-1.amazonaws.com;port=5432;dbname=d1076a0qjphl29";
		$username = 'fxsnfensjjofho';
		$password = '7ea16c76d7f4977389f8bef041415aaeefde5630a78e27455f50d9d836302197';
		$options=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		try {
			$db = new PDO($dsn, $username, $password,$options);
			return $db;					
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error connecting to database".$error_message; 
		}
	}
 ?>