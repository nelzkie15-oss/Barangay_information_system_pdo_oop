
<?php
class Brgy_status
{
    private $db = null;
    public function login_user($username, $password, $type)
    {
        session_start();
        global $db;
        
        if ($type == "Admin") {
            
            $query = $db->prepare("SELECT  username, password, type FROM tblusertype where username=? AND password=? AND type = ?");
            $query->execute(array(
                $username,
                $password,
                $type
            ));
            $count = $query->rowCount();
            
            if ($count == 1) {
                $res                   = $query->fetch(PDO::FETCH_ASSOC);
                $_SESSION['user_no']   = htmlentities($res['username']);
                $_SESSION['logged_in'] = true;
                
                header('Location: Dash-board/main-dashboard.php');
                exit();
            } else {
                echo '<center><div class="alert alert-warning">
                               <strong>Login Failed, Please try again!</strong>
                            </div></center>';
            }
            
            
        } else if ($type == "Staff") {
            
            $query = $db->prepare("SELECT  username, password, type FROM tblusertype where username=? AND password=? AND type = ?");
            $query->execute(array(
                $username,
                $password,
                $type
            ));
            $count = $query->rowCount();
            
            if ($count == 1) {
                $res                   = $query->fetch(PDO::FETCH_ASSOC);
                $_SESSION['user_no']   = htmlentities($res['username']);
                $_SESSION['logged_in'] = true;
                
                header('Location: Dash-board/staff-dashboard.php');
                exit();
            } else {
                echo '<center><div class="alert alert-warning">
                               <strong>Login Failed, Please try again!</strong>
                            </div></center>';
            }
            
            
        } else if ($type == "Zone Leader") {
            
            $query = $db->prepare("SELECT  username, password, type FROM tblusertype where username=? AND password=? AND type = ?");
            $query->execute(array(
                $username,
                $password,
                $type
            ));
            $count = $query->rowCount();
            
            if ($count == 1) {
                $res                   = $query->fetch(PDO::FETCH_ASSOC);
                $_SESSION['user_no']   = htmlentities($res['username']);
                $_SESSION['logged_in'] = true;
                
                header('Location: Dash-board/Zoneleader-dashboard.php');
                exit();
            } else {
                echo '<center><div class="alert alert-warning">
                               <strong>Login Failed, Please try again!</strong>
                            </div></center>';
            }
            
            
        }
        
        
    }
}
?>


