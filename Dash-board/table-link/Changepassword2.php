
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
    $pass =  htmlentities($statres['password']);
    $ids =  htmlentities($statres['id']);

?>

<?php include '../header/main-header_2.php';?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Change Password</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../main-dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Change Password</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="card">
     <div class="card-body">
              <div class="col-md-6 offset-3">
                       <form class="form-horizontal" method="POST">
                       <div id="msgx"></div>
                       <label class="form-label" for="form1Example1">User Name</label>
                        <div class="form-outline">
                          <input type="text" value="<?php echo $f_name;?>" class="form-control" readonly/>

                        </div>
                           <label class="form-label" for="form1Example2">Old Password</label>
                         <div class="form-outline">
                          <input type="password" id="admin_password" value="<?php echo $pass;?>" name="admin_password" class="form-control" readonly/>

                        </div>
                          <label class="form-label" for="form1Example2">New Password</label>
                        <div class="form-outline">
                          <input type="password" id="new_password" name="new_password" class="form-control" />

                        </div>
                         <label class="form-label" for="form1Example2">Confirm password</label>
                         <div class="form-outline mb-3">
                          <input type="password" id="confirm_newpassword" name="confirm_newpassword" class="form-control" />

                        </div>
                        <!-- Submit button -->
                        <input type="hidden" class="form-control ml-4" id="id" value="<?php echo $ids;?>">
                        <button type="submit" class="btn btn-primary btn-block changes">Update</button>
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
<script type="text/javascript">
 /*=====================start change password=====================*/ 
 $('#new_password, #confirm_newpassword').on('keyup', function() {
   if ($('#new_password').val() == $('#confirm_newpassword').val()) {
        $('#message').html('<img src="../img/35e56e96-8a3f-4f53-ac80-f32568f5878f.svg" width="20" height="20">&nbsp;Matching...').css('color', 'green');
        $(".changes").prop('disabled', false);
      } else {
        $('#message').html('<img src="../img/35e56e96-8a3f-4f53-ac80-f32568f5878f.svg" width="20" height="20">&nbsp;Not Matching...').css('color', 'red');
        $('.changes').prop('disabled', true);
      }
  }); 
 $(document).ready(function() {

     $('.changes').click(function(e) {
        e.preventDefault();///i hahandle nito yung submit button kung wala laman na, nilagay sa field
            var delay = 100;
           const admin_password = document.getElementById('admin_password').value;
           const new_password = document.getElementById('new_password').value;
           const confirm_newpassword = document.getElementById('confirm_newpassword').value;
           const id = document.getElementById('id').value;
      
       $.ajax({
   
               type: 'POST',
               data: {
                       admin_password: admin_password,
                       new_password: new_password,
                       confirm_newpassword: confirm_newpassword,
                       id:id

                 },
                url: 'controllers/changepassword_process.php',
                async: false,
                cache: false,
                success: function(data) {
                    setTimeout(function() {
                        $('#msgx').html(data);
                    }, delay);
                   setTimeout(location.reload.bind(location), 1000);

                },
               error: function(data) {
                 $("#msgx").html(data);
               }              

           });
   
       }); 

    });

/*=====================end change password=====================*/
</script>
 
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