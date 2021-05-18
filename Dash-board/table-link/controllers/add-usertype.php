<?php
 error_reporting(0);
   // session_start();
    include_once('../Private/conn/db-connection.php');
    include_once('../Private/class/brgy-information-system.php');
      $brgy_stat = new Brgy_status();
        if(ISSET($_POST['add-usertype'])){

               $fullname = trim($_POST['fullname']);
               $username = trim($_POST['username']);
               $pass1 = trim($_POST['password']);
               $pass=sha1($pass1);
               $salt="C567sRz2ql9024DaCxPoxEaSo90zIm3Zeso0RzE0";
               $password = $salt.$pass;
               $type = trim($_POST['type']);

               $brgy_stat->add_usertype($fullname, $username, $password, $type);
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal("Add User Type Successfully!","Message!","success");';
                  echo '}, 1000);</script>';
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function(){';
                  echo 'window.location = "/Barangay_Information_System/Dash-board/table-link/manage-usertype.php"';
                  echo '},2000)';
                  echo '</script>';
             
        }
?>