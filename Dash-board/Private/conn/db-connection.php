<?php
	try{
	$db = new PDO('mysql:host=localhost;dbname=barangay_informationsystem;charset=utf8mb4', 'root','');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>