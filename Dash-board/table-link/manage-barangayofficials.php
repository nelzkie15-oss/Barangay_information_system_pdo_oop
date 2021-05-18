
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
    $brgyofficials = $brgy->fetch_brgyofficials(); 
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
                    <h1>Barangay Officials</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../main-dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Barangay Officials</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="card">
       <div class="card-header">
            <h3 class="card-title" style="float: right;"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-brgyofficial"> Add Brgy. Official</button>
             <?php include 'modal/add_brgyofficial.php';?>
        </div>
        <div class="table-responsive">
        <div class="card-body">
             <table class="table table-colored table-centered table-inverse m-0" id="brgy-officials" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <!--<th>ID</th> -->
                        <th>Position</th>
                        <th>Full Name</th>
                        <th>Contact #</th>
                        <th>Address</th>
                        <th>Start of Term</th>
                        <th>End of Term</th>
                        <th>Action</th>

                    </tr>
                </thead>
            <tbody>
                 <?php
                     foreach($brgyofficials as $official){ ?>
                    <tr>
                        <td><?= ucfirst(htmlentities($official['sPostion'])); ?></td>
                        <td><?= ucfirst(htmlentities($official['completeName'])); ?></td>
                        <td><?= ucfirst(htmlentities($official['pcontact'])); ?></td>
                        <td><?= ucfirst(htmlentities($official['paddress'])); ?></td>
                        <td><?= htmlentities($official['termStart']); ?></td>
                        <td><?= htmlentities($official['termEnd']); ?></td>
                        <td>
                          <div class="d-flex"><div class="flex-1"> <button class="btn btn-info btn-sm logs" data-id="<?= htmlentities($official['id']); ?>">Edit</button></div> | <div class="flex-1"> <button class="btn btn-danger btn-sm delete" data-ids="<?= htmlentities($official['id']); ?>">Delete</button></div></div>

                         </td>

                    </tr>
                    <?php } 
                     ?>
                      <?php include 'modal/edit-brgyofficial.php'; ?>
                      <?php include 'modal/delete-brgyofficial.php'; ?>
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
                   $(document).on('click', '.logs', function() {
                     $('#edit-brgyofficial').modal('show');
                        var id = $(this).data("id");
                       // console.log(logid);
                        getIDs(id); //argument    
                 
                   });
                }

                 function getIDs(id) {
                      $.ajax({
                          type: 'POST',
                          url: 'row_pro/logs_row.php',
                          data: {
                              id: id
                          },
                          dataType: 'json',
                          success: function(responses) {
                          $('#edit_id').val(responses.id);
                          $('#edit_sPostion').val(responses.sPostion);
                          $('#edit_completeName').val(responses.completeName);
                          $('#edit_pcontact').val(responses.pcontact);
                          $('#edit_paddress').val(responses.paddress);
                          $('#edit_termStart').val(responses.termStart);
                          $('#edit_termEnd').val(responses.termEnd);


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
                     $('#delete-brgyofficial').modal('show');
                        let id = $(this).data("ids");
                       // console.log(logid);
                        getIDs_del(id); //argument    
                 
                   });
                }

                 function getIDs_del(id) {
                      $.ajax({
                          type: 'POST',
                          url: 'row_pro/logs_row.php',
                          data: {
                              id: id
                          },
                          dataType: 'json',
                          success: function(responses2) {
                          $('#delete_id').val(responses2.id);
                          $('#delete_completeName').html(responses2.completeName);

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