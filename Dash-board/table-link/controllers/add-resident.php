<?php
   // session_start();
    include_once('../Private/conn/db-connection.php');
    include_once('../Private/class/brgy-information-system.php');
      $brgy_stat = new Brgy_status();
        if(ISSET($_POST['add-resident'])){

               $lname = trim($_POST['lname']);
               $fname = trim($_POST['fname']);
               $mname = trim($_POST['mname']);
               $bdate = trim($_POST['bdate']);
               $bplace = trim($_POST['bplace']);
               $age = trim($_POST['age']);
               $barangay = trim($_POST['barangay']);
               $zone = trim($_POST['zone']);
               $totalhousehold = trim($_POST['totalhousehold']);
               $differentlyabledperson = trim($_POST['differentlyabledperson']);
               $relationtohead = trim($_POST['relationtohead']);
               $maritalstatus = trim($_POST['maritalstatus']);
               $bloodtype = trim($_POST['bloodtype']);
               $civilstatus = trim($_POST['civilstatus']);
               $occupation = trim($_POST['occupation']);
               $monthlyincome = trim($_POST['monthlyincome']);
               $householdnum = trim($_POST['householdnum']);
               $lengthofstay = trim($_POST['lengthofstay']);
               $religion = trim($_POST['religion']);
               $nationality = trim($_POST['nationality']);
               $gender = trim($_POST['gender']);
               $skills = trim($_POST['skills']);
               $igpitID = trim($_POST['igpitID']);
               $philhealthNo = trim($_POST['philhealthNo']);
               $highestEducationAttainment = trim($_POST['highestEducationAttainment']);
               $landOwnershipStatus = trim($_POST['landOwnershipStatus']);
               $houseOwnershipStatus = trim($_POST['houseOwnershipStatus']);
               $dwellingtype = trim($_POST['dwellingtype']);
               $waterUsage = trim($_POST['waterUsage']);
               $lightningFacilities = trim($_POST['lightningFacilities']);
               $sanitaryToilet = trim($_POST['sanitaryToilet']);
               $formerAddress = trim($_POST['formerAddress']);
               $remarks = trim($_POST['remarks']);
               $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
               $Get_image_name =  addslashes($_FILES['image']['name']);
               $image_upload = "uploads/" .date("Ymd").time().'_'. basename($Get_image_name);
               $username = trim($_POST['username']);
               $password = trim($_POST['password']);

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
               $action = "Added Resident";    
            // ==========end audit trail==============


               $brgy_stat->add_resident($lname, $fname, $mname, $bdate, $bplace, $age, $barangay, $zone, $totalhousehold, $differentlyabledperson, $relationtohead, $maritalstatus, $bloodtype, $civilstatus, $occupation, $monthlyincome, $householdnum, $lengthofstay, $religion, $nationality, $gender, $skills, $igpitID, $philhealthNo, $highestEducationAttainment, $landOwnershipStatus, $houseOwnershipStatus, $dwellingtype, $waterUsage, $lightningFacilities, $sanitaryToilet, $formerAddress, $remarks, $image_upload, $username, $password, $user, $ip, $host,  $logdate, $action);
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal("Add Resident Successfully!","Message!","success");';
                  echo '}, 1000);</script>';
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function(){';
                  echo 'window.location = "/Barangay_Information_System/Dash-board/table-link/manage-resident.php"';
                  echo '},2000)';
                  echo '</script>';
             
        }
?>