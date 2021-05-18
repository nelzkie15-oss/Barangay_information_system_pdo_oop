<?php
   // session_start();
    include_once('../Private/conn/db-connection.php');
    include_once('../Private/class/brgy-information-system.php');
      $brgy_stat = new Brgy_status();
        if(ISSET($_POST['add-activity'])){

               $dateofactivity = trim($_POST['dateofactivity']);
               $activity = trim($_POST['activity']);
               $description = trim($_POST['description']);

               $image = addslashes(file_get_contents($_FILES['imageBanner']['tmp_name']));
               $Get_image_name =  addslashes($_FILES['imageBanner']['name']);
               $imageupload = "uploads/" .date("Ymd").time().'_'. basename($Get_image_name);

              // ==========audit trail==================
               $user = trim($_POST['user']);
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
               $action = "Added Activity";    
            // ==========end audit trail==============


               $brgy_stat->add_activity($dateofactivity, $activity, $description, $imageupload, $user, $ip, $host,  $logdate, $action);
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal("Add Activity Successfully!","Message!","success");';
                  echo '}, 1000);</script>';
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function(){';
                  echo 'window.location = "/Barangay_Information_System/Dash-board/table-link/manage-activitystaff.php"';
                  echo '},2000)';
                  echo '</script>';
             
        }
?>