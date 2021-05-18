<?php
   // session_start();
     include_once('../Private/conn/db-connection.php');
    include_once('../Private/class/brgy-information-system.php');
      $brgy_stat = new Brgy_status();
        if(ISSET($_POST['delete-clearance'])){
               $id = trim($_POST['id']);       
               $brgy_stat->delete_clearance($id);
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal("Delete Permit Clearance Successfully!","Message!","success");';
                  echo '}, 1000);</script>';
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function(){';
                  echo 'window.location = "/Barangay_Information_System/Dash-board/table-link/manage-permitclearance.php"';
                  echo '},2000)';
                  echo '</script>';
             
        }
?>