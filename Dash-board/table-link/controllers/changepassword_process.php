

<?php
//error_reporting(0);
 include_once('../../Private/conn/db-connection.php');
 
if(isset($_POST['id'])) {

    $password = trim($_POST['admin_password']);
    $newpassword = trim($_POST['new_password']);
    $pass=sha1($newpassword);
    $salt="C567sRz2ql9024DaCxPoxEaSo90zIm3Zeso0RzE0";
    $pass=$salt.$pass;
    $cnewpassword = trim($_POST['confirm_newpassword']);
      $pass2=sha1($cnewpassword);
      $salt="C567sRz2ql9024DaCxPoxEaSo90zIm3Zeso0RzE0";
      $pass2=$salt.$pass2;

    $reg_id = trim($_POST['id']);

 $sql ="SELECT `password` FROM `tblusertype` WHERE id=:user_id AND password=:password";//select old password.
    $query= $db->prepare($sql);
    $query->bindParam(':user_id', $reg_id, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0){

 if($pass == "" && $pass2==""){//kapag empty new and confirm pass not update  
      echo '<div class="alert alert-warning">
             <strong>Both new and confirm Password are required</strong>
          </button>
        </div>'; 


    }else{
  //  $pass3=sha1($pass2);
    // $salt="C567sRz2ql9024DaCxPoxEaSo90zIm3Zeso0RzE0";
    // $pass3=$salt.$pass3;
       $passwordx = $pass2;
        $con="UPDATE `tblusertype` SET password=:newpassword WHERE id=:user_id";//kapag match ang password mag update ito.
            $chngpwd1 = $db->prepare($con);

            $chngpwd1-> bindParam(':user_id', $reg_id, PDO::PARAM_STR);
            $chngpwd1-> bindParam(':newpassword', $passwordx, PDO::PARAM_STR);
            $chngpwd1->execute();
                echo '<div class="alert alert-success">
                 <strong>Changed Password Sucessfully!</strong>
            </div>';

            }
           
         } else {
          echo '<div class="alert alert-warning">
                 <strong>Your current password is wrong</strong>
            </div>';   
       }
   }
?>
