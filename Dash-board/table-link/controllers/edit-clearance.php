<?php
   // session_start();
    include_once('../Private/conn/db-connection.php');
    include_once('../Private/class/brgy-information-system.php');
      $brgy_stat = new Brgy_status();
        if(ISSET($_POST['edit-clearance'])){

               $residentFullname = trim($_POST['residentFullname']);
               $businessName = trim($_POST['businessName']);
               $businessAddress = trim($_POST['businessAddress']);
               $typeOfBusiness = trim($_POST['typeOfBusiness']);
               $orNo = trim($_POST['orNo']);
               $samount = trim($_POST['samount']);
               date_default_timezone_set("asia/manila");
               $dateRecorded =  date('Y-m-d', strtotime("+0 HOURS"));
               $recordedBy = trim($_POST['recordedBy']);
               $id = trim($_POST['id']);


               $brgy_stat->edit_pclearance($residentFullname, $businessName, $businessAddress, $typeOfBusiness, $orNo, $samount, $dateRecorded, $recordedBy,$id);
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal("Update Permit Clearance Successfully!","Message!","success");';
                  echo '}, 1000);</script>';
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function(){';
                  echo 'window.location = "/Barangay_Information_System/Dash-board/table-link/manage-permitclearance.php"';
                  echo '},2000)';
                  echo '</script>';
             
        }
?>