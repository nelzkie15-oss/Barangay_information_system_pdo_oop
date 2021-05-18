<?php 
	include_once('../../Private/conn/db-connection.php');
	 if(isset($_POST['id'])){ 	
	    $id = trim($_POST['id']);
		$stmt = $db->query("SELECT * FROM `tblusertype` WHERE id = '$id'");	 
	    $row = $stmt->fetch(PDO::FETCH_ASSOC);
		echo json_encode($row);
    }
?>