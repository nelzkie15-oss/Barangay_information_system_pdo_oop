<?php 
	include_once('../../Private/conn/db-connection.php');
	 if(isset($_POST['certificate_id'])){ 	
	    $id = trim($_POST['certificate_id']);
		$stmt = $db->query("SELECT * FROM `tbl_certificateofresidencyequest` WHERE certificate_id = '$id'");	 
	    $row = $stmt->fetch(PDO::FETCH_ASSOC);
		echo json_encode($row);
    }
?>