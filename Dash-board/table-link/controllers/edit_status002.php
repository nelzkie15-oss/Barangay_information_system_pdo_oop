
<?php
   // session_start();
    include_once('../../Private/conn/db-connection.php');
    include_once('../../Private/class/brgy-information-system.php');

      $brgy_stat = new Brgy_status();
        if(ISSET($_POST)){
               $fullname = trim($_POST['fullname']);
               $status = trim($_POST['status']);
               $id = trim($_POST['id']);


             // ==========audit trail==================

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

               if($status == 1){
                   $stat_zl = 'Approved'; 
                  }else if($status== 2){
                   $stat_zl = 'Disapproved'; 
                }
               $action = $stat_zl ." By " .$fullname. " the Permit Clearance";    
            // ==========end audit trail==============

               $brgy_stat->edit_status2($fullname, $status, $id, $ip, $host,  $logdate, $action);
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal("Update Clearance Successfully!","Message!","success");';
                  echo '}, 1000);</script>';
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function(){';
                  echo 'window.location = "/Barangay_Information_System/Dash-board/table-link/Manage-permitclearancezleader.php"';
                  echo '},2000)';
                  echo '</script>';
             
        }
?>