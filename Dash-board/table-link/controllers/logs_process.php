<?php
include_once('../Private/conn/db-connection.php');
 if(ISSET($_POST)){
try{
	 $id = htmlspecialchars($_POST['id']);

       $stmt = $db->prepare("INSERT INTO tbllogs(`id_log`) VALUES(?)");
       $stmt->execute([$id]);

		}catch(PDOException $e){
			echo $e->getMessage();
		}

		$db = null;
	     echo '';

	}
?>

