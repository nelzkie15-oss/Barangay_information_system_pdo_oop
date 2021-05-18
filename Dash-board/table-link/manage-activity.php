
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
    $fetchactivities = $brgy->fetch_activities(); 
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
                    <h1>Activity</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../main-dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Activity</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="card">
       <div class="card-header">
            <h3 class="card-title" style="float: right;"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-activity"> Add Activity</button>
             <?php include 'modal/add_activity.php';?>
        </div>
        <div class="table-responsive">
        <div class="card-body">
             <table class="table table-colored table-centered table-inverse m-0" id="brgy-officials" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <!--<th>ID</th> -->
                        <th>Date of Activity</th>
                        <th>Activity Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                </thead>
            <tbody>
                 <?php
                     foreach($fetchactivities as $activity){ ?>
                    <tr>
                        <td><?= ucfirst(htmlentities($activity['dateofactivity'])); ?></td>
                        <td><?= ucfirst(htmlentities($activity['activity'])); ?></td>
                        <td><?= ucfirst(htmlentities($activity['description'])); ?></td>
                        <td><img src="<?= ucfirst(htmlentities($activity['imageBanner'])); ?>" width="32px" height="32px"> </td>

                        <td>
                         <div class="d-flex"><div class="flex-1"> <button class="btn btn-info btn-sm acty" data-act="<?= htmlentities($activity['id']); ?>">Edit</button></div> | <div class="flex-1"> <button class="btn btn-danger btn-sm delete" data-ids="<?= htmlentities($activity['id']); ?>">Delete</button></div></div>
                         </td>

                    </tr>
                    <?php } 
                     ?>
                     <?php include 'modal/edit-activity.php'; ?>
                     <?php include 'modal/delete-activity.php'; ?>
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
    <script>
           $(document).ready(function() {   
               load_data();    
               var count = 1; 
               function load_data() {
                   $(document).on('click', '.acty', function() {
                     $('#edit-activity').modal('show');
                        var id = $(this).data("act");
                       // console.log(logid);
                        getIDa(id); //argument    
                 
                   });
                }

                 function getIDa(id) {
                      $.ajax({
                          type: 'POST',
                          url: 'row_pro/logs_row7.php',
                          data: {
                              id: id
                          },
                          dataType: 'json',
                          success: function(responses) {
                          $('#edit_id').val(responses.id);
                          $('#edit_dateofactivity').val(responses.dateofactivity);
                          $('#edit_activity').val(responses.activity);
                          $('#edit_description').val(responses.description);
                          // $('#edit_imageBanner').val(responses.imageBanner);

                       }
                    });
                 }
           
           });
            
     </script>

          <script>
           $(document).ready(function() {   
               load_data();    
               var count = 1; 
               function load_data() {
                   $(document).on('click', '.delete', function() {
                     $('#delete-activity').modal('show');
                        let id = $(this).data("ids");
                       // console.log(logid);
                        getIDs_del(id); //argument    
                 
                   });
                }

                 function getIDs_del(id) {
                      $.ajax({
                          type: 'POST',
                          url: 'row_pro/logs_row7.php',
                          data: {
                              id: id
                          },
                          dataType: 'json',
                          success: function(responses2) {
                          $('#delete_id').val(responses2.id);
                          $('#delete_activity').html(responses2.activity);

                       }
                    });
                 }
           
           });
            
    </script>
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