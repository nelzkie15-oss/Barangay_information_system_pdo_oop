
<?php
  session_start();
    include_once('../Private/conn/db-connection.php');
    include_once('../Private/class/brgy-information-system.php');

if(!isset($_SESSION['logged_in']))
    {
       header("location:../index.php");
    }else{
    //display some thing here
    $user_session = trim($_SESSION['user_no']);
    $brgy = new Brgy_status();
    $permits = $brgy->fetch_permits(); 
    $fetchresidents = $brgy->fetch_residents_status($user_session); 
    foreach($fetchresidents as $statres);
    $f_name =  htmlentities($statres['fullname']);
    $uname =  htmlentities($statres['username']);
    $type =  htmlentities($statres['type']);

?>

<?php include '../header/main-header_2.php';?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>My Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../main-dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">My Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="card">
     <div class="card-body">
              <div class="col-md-6 offset-3">
               <form method="POST">
                  <div class="col-12">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" name="user" value="<?php echo $f_name;?>" readonly>
                    </div>
                     <div class="col-12">
                        <label>Username:</label>
                        <input type="text" class="form-control" name="user" value="<?php echo $uname;?>" readonly>
                    </div>
                     <div class="col-12">
                        <label>Type:</label>
                        <input type="text" class="form-control" name="user" value="<?php echo $type;?>" readonly>
                    </div>
                    <div class="col-12">
                    </div>

               </form>
     

            </div>
          </div>
      </div>
    </div>
</div>
</section>
</div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="#">Created By : Junil Toledo</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
 
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../dist/js/demo.js"></script>
 <?php } ?>
</body>

</html>