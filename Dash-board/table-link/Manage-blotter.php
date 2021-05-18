
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
    $fetchblotters = $brgy->fetch_blotters(); 
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
                    <h1>Blotter</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../main-dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Blotter</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="card">
       <div class="card-header">
            <h3 class="card-title" style="float: right;"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-blotter"> Add Blotter</button>
             <?php include 'modal/add_blotter.php';?>
        </div>
        <div class="table-responsive">
        <div class="card-body">
             <table class="table table-colored table-centered table-inverse m-0" id="brgy-officials" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <!--<th>ID</th> -->
                        <th>Complainant</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Contact #</th>
                        <th>Person to Complain</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Contact #</th>
                        <th>Complaint</th>
                        <th>Action Taken</th>
                        <th>Status</th>
                        <th>Location of Incidence</th>
                        <th>Recordedby</th>
                        <th>Date Recorded</th>
                        <th>Year Recorded</th>


                        <th>Action</th>

                    </tr>
                </thead>
            <tbody>
                 <?php
                     foreach($fetchblotters as $blotters){ ?>
                    <tr>
                        <td><?= ucfirst(htmlentities($blotters['complainant'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['cage'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['caddress'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['ccontact'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['personToComplain'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['page'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['paddress'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['pcontact'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['complaint'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['actionTaken'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['sStatus'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['locationOfincidence'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['recordedby'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['dateRecorded'])); ?></td>
                        <td><?= ucfirst(htmlentities($blotters['yearRecorded'])); ?></td>
                        <td>
                         <div class="d-flex"><div class="flex-1"> <button class="btn btn-info btn-sm b_hold" data-btr="<?= htmlentities($blotters['id']); ?>">Edit</button></div> | <div class="flex-1"> <button class="btn btn-danger btn-sm delete" data-ids="<?= htmlentities($blotters['id']); ?>">Delete</button></div></div>
                        </td>
                     </tr>
                    <?php } 
                     ?>           
                  <?php include 'modal/edit-blotter.php'; ?>
                  <?php include 'modal/delete-blotter.php'; ?>
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
                   $(document).on('click', '.b_hold', function() {
                     $('#edit-blotter').modal('show');
                        var id = $(this).data("btr");
                       // console.log(logid);
                        getIDb(id); //argument    
                 
                   });
                }

                 function getIDb(id) {
                      $.ajax({
                          type: 'POST',
                          url: 'row_pro/logs_row6.php',
                          data: {
                              id: id
                          },
                          dataType: 'json',
                          success: function(responses) {
                          $('#edit_id').val(responses.id);
                          $('#edit_yearRecorded').val(responses.yearRecorded);
                          $('#edit_dateRecorded').val(responses.dateRecorded);
                          $('#edit_complainant').val(responses.complainant);
                          $('#edit_cage').val(responses.cage);
                          $('#edit_caddress').val(responses.caddress);
                          $('#edit_ccontact').val(responses.ccontact);
                          $('#edit_personToComplain').val(responses.personToComplain);
                          $('#edit_page').val(responses.page);
                          $('#edit_paddress').val(responses.paddress);
                          $('#edit_pcontact').val(responses.pcontact);
                          $('#edit_complaint').val(responses.complaint);
                          $('#edit_actionTaken').val(responses.actionTaken);
                          $('#edit_sStatus').val(responses.sStatus);
                          $('#edit_locationOfincidence').val(responses.locationOfincidence);
                          $('#edit_recordedby').val(responses.recordedby);

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
                     $('#delete-blotter').modal('show');
                        let id = $(this).data("ids");
                       // console.log(logid);
                        getIDs_del(id); //argument    
                 
                   });
                }

                 function getIDs_del(id) {
                      $.ajax({
                          type: 'POST',
                          url: 'row_pro/logs_row6.php',
                          data: {
                              id: id
                          },
                          dataType: 'json',
                          success: function(responses2) {
                          $('#delete_id').val(responses2.id);
                           $('#delete_complainant').html(responses2.complainant);

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