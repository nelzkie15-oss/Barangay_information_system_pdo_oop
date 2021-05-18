<?php
   // session_start();
error_reporting(0);
    include_once('Private/conn/db-connection.php');
    include_once('Private/class/brgy-information-system.php');
      $user_stat = new Brgy_status();
      session_start();
        if(ISSET($_POST['login-area'])){
               $username = trim($_POST['username']);
               $pass1 = trim($_POST['password']);
               $pass=sha1($pass1);
               $salt="C567sRz2ql9024DaCxPoxEaSo90zIm3Zeso0RzE0";
               $password = $salt.$pass;
               $type = trim($_POST['type']);
               $user_stat->login_user($username, $password, $type);
 
        }
?>