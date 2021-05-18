
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
    $fetchlogs = $brgy->fetch_logs();
    $recordby = $brgy->fetch_recordby($user_session); 
    foreach($recordby as $rby);
    $f_name =  htmlentities($rby['fullname']); 
?>

<?php include '../header/main-header.php';?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Logs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../main-dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Logs</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="card">

        <div class="table-responsive">
        <div class="card-body">
             <table class="table table-colored table-centered table-inverse m-0" id="brgy-officials" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <!--<th>ID</th> -->
                        <th>User Name</th>
                        <th>User IP</th>
                        <th>User Host</th>
                        <th>User Logdate</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <tbody>
                 <?php
                     foreach($fetchlogs as $log){ ?>
                    <tr>
                        <td><?= ucfirst(htmlentities($log['user_name'])); ?></td>
                        <td><?= ucfirst(htmlentities($log['user_ip'])); ?></td>
                        <td><?= ucfirst(htmlentities($log['user_host'])); ?></td>
                        <td><?= ucfirst(htmlentities($log['logdate'])); ?></td>
                        <td><?= ucfirst(htmlentities($log['action'])); ?></td>
                    </tr>
                    <?php } 
                     ?>
                </tbody>
            </table>
        </div>
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