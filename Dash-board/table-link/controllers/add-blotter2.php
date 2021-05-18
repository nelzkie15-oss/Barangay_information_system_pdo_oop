<?php
   // session_start();
    include_once('../Private/conn/db-connection.php');
    include_once('../Private/class/brgy-information-system.php');
      $brgy_stat = new Brgy_status();
        if(ISSET($_POST['add-blotter'])){

               date_default_timezone_set("asia/manila");
               $yearRecorded =  date('Y', strtotime("+0 HOURS"));
               date_default_timezone_set("asia/manila");
               $dateRecorded =  date('Y-m-d', strtotime("+0 HOURS"));

               $complainant = trim($_POST['complainant']);
               $cage = trim($_POST['cage']);
               $caddress = trim($_POST['caddress']);
               $ccontact = trim($_POST['ccontact']);
               $personToComplain = trim($_POST['personToComplain']);
               $page = trim($_POST['page']);
               $paddress = trim($_POST['paddress']);
               $pcontact = trim($_POST['pcontact']);
               $complaint = trim($_POST['complaint']);
               $actionTaken = trim($_POST['actionTaken']);
               $sStatus = trim($_POST['sStatus']);
               $locationOfincidence = trim($_POST['locationOfincidence']);
               $recordedby = trim($_POST['recordedby']);


             // ==========audit trail==================
               // $user = trim($_POST['user']);
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
               $action = "Added Blotter";    
            // ==========end audit trail==============




               $brgy_stat->add_blotter($yearRecorded, $dateRecorded, $complainant, $cage, $caddress, $ccontact, $personToComplain, $page,$paddress,$pcontact,$complaint,$actionTaken,$sStatus,$locationOfincidence,$recordedby, $ip, $host,  $logdate, $action);
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal("Add Blotter Successfully!","Message!","success");';
                  echo '}, 1000);</script>';
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function(){';
                  echo 'window.location = "/Barangay_Information_System/Dash-board/table-link/Manage-blotterstaff.php"';
                  echo '},2000)';
                  echo '</script>';
             
        }
?>