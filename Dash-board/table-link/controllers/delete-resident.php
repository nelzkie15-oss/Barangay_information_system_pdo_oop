<?php
   // session_start();
     include_once('../../Private/conn/db-connection.php');
    include_once('../../Private/class/brgy-information-system.php');
      $brgy_stat = new Brgy_status();
        if(ISSET($_POST['id'])){
           // ==========audit trail==================
               $user = trim($_POST['user_name']);
               $id = trim($_POST['id']); 

               if(!empty($_SERVER["HTTP_CLIENT_IP"])){
                     $ip = $_SERVER["HTTP_CLIENT_IP"];
                  }elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){ 
                     $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                  }else{
                     $ip = $_SERVER["REMOTE_ADDR"];
                }
               $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
               date_default_timezone_set("asia/manila");
               $logdate =  date('M-d-Y h:i A', strtotime("+0 HOURS"));
               $action = "Delete Resident";    
            // ==========end audit trail==============
     
               $brgy_stat->delete_resident($id, $user, $ip, $host,  $logdate, $action);
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal("Delete Resident Successfully!","Message!","success");';
                  echo '}, 1000);</script>';
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function(){';
                  echo 'window.location = "/Barangay_Information_System/Dash-board/table-link/manage-resident.php"';
                  echo '},2000)';
                  echo '</script>';
             
        }
?>