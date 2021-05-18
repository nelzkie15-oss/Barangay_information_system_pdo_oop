<?php  
     header('Content-Type: application/json');
   // session_start();
     include_once('../../Private/conn/db-connection.php');

       $query = $db->prepare("SELECT id,personToComplain,page FROM tblblotter ORDER BY id");
       $query->execute();
       $result = $query->fetchAll(PDO::FETCH_ASSOC); 

      $data = array();
      foreach ($result as $row) {
        $data[] = $row;
      }
      echo json_encode($data);
?>