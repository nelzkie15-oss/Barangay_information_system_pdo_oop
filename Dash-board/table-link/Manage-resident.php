
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
    $residents = $brgy->fetch_residents(); 
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
                    <h1>Resident</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../main-dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Resident</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="card">
       <div class="card-header">
            <h3 class="card-title" style="float: right;"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-resident"> Add Resident</button>
             <?php include 'modal/add_resident.php';?>
        </div>
        <div class="table-responsive">
        <div class="card-body">
             <table class="table table-colored table-centered table-inverse m-0" id="brgy-officials" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <!--<th>ID</th> -->
                        <th>Full Name</th>
                        <th>Birthday</th>
                        <th>Birth Place</th>
                        <th>Age</th>
                        <th>Civil Status</th>
                        <th>Religion</th>
                        <th>Nationality</th>
                        <th>Gender</th>
                        <th>Action</th>

                    </tr>
                </thead>
            <tbody>
                 <?php
                     foreach($residents as $rcdents){ ?>
                    <tr>
                        <td><?= ucfirst(htmlentities($rcdents['lname'])); ?> <?= ucfirst(htmlentities($rcdents['fname'])); ?> <?= ucfirst(htmlentities($rcdents['mname'])); ?>.</td>
                        <td><?= ucfirst(htmlentities($rcdents['bdate'])); ?></td>
                        <td><?= ucfirst(htmlentities($rcdents['bplace'])); ?></td>
                        <td><?= ucfirst(htmlentities($rcdents['age'])); ?></td>
                        <td><?= ucfirst(htmlentities($rcdents['civilstatus'])); ?></td>
                        <td><?= ucfirst(htmlentities($rcdents['religion'])); ?></td>
                        <td><?= ucfirst(htmlentities($rcdents['nationality'])); ?></td>
                        <td><?= ucfirst(htmlentities($rcdents['gender'])); ?></td>
                      <td>
                         <div class="d-flex"><div class="flex-1"> <button class="btn btn-info btn-sm res" data-res="<?= htmlentities($rcdents['id']); ?>">Edit</button></div> | <div class="flex-1"> <button class="btn btn-danger btn-sm delete" data-ids="<?= htmlentities($rcdents['id']); ?>">Delete</button></div></div>
                         </td>

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
 <?php include 'modal/edit-resident.php'; ?>
 <?php include 'modal/delete-resident.php'; ?>
    <script>
           $(document).ready(function() {   
               load_data();    
               var count = 1; 
               function load_data() {
                   $(document).on('click', '.res', function() {
                     $('#edit-resident').modal('show');
                        var id = $(this).data("res");
                       // console.log(logid);
                        getIDr(id); //argument    
                 
                   });
                }

                 function getIDr(id) {
                      $.ajax({
                          type: 'POST',
                          url: 'row_pro/logs_row5.php',
                          data: {
                              id: id
                          },
                          dataType: 'json',
                          success: function(responses) {
                          $('#edit_id').val(responses.id);
                          $('#edit_lname').val(responses.lname);
                          $('#edit_fname').val(responses.fname);
                          $('#edit_mname').val(responses.mname);
                          $('#edit_bdate').val(responses.bdate);
                          $('#edit_bplace').val(responses.bplace);
                          $('#edit_age').val(responses.age);
                          $('#edit_barangay').val(responses.barangay);
                          $('#edit_zone').val(responses.zone);
                          $('#edit_totalhousehold').val(responses.totalhousehold);
                          $('#edit_differentlyabledperson').val(responses.differentlyabledperson);
                          $('#edit_relationtohead').val(responses.relationtohead);
                          $('#edit_maritalstatus').val(responses.maritalstatus);
                          $('#edit_bloodtype').val(responses.bloodtype);
                          $('#edit_civilstatus').val(responses.civilstatus);
                          $('#edit_occupation').val(responses.occupation);
                          $('#edit_monthlyincome').val(responses.monthlyincome);
                          $('#edit_householdnum').val(responses.householdnum);
                          $('#edit_lengthofstay').val(responses.lengthofstay);
                          $('#edit_religion').val(responses.religion);
                          $('#edit_nationality').val(responses.nationality);
                          $('#edit_gender').val(responses.gender);
                          $('#edit_skills').val(responses.skills);
                          $('#edit_igpitID').val(responses.igpitID);
                          $('#edit_philhealthNo').val(responses.philhealthNo);
                          $('#edit_highestEducationAttainment').val(responses.highestEducationAttainment);
                          $('#edit_landOwnershipStatus').val(responses.landOwnershipStatus);
                          $('#edit_houseOwnershipStatus').val(responses.houseOwnershipStatus);
                          $('#edit_dwellingtype').val(responses.dwellingtype);
                          $('#edit_waterUsage').val(responses.waterUsage);
                          $('#edit_lightningFacilities').val(responses.lightningFacilities);
                          $('#edit_sanitaryToilet').val(responses.sanitaryToilet);
                          $('#edit_formerAddress').val(responses.formerAddress);
                          $('#edit_remarks').val(responses.remarks);
                          $('#edit_username').val(responses.username);
                          $('#edit_password').val(responses.password);

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
                     $('#delete-resident').modal('show');
                        let id = $(this).data("ids");
                       // console.log(logid);
                        getIDs_del(id); //argument    
                 
                   });
                }

                 function getIDs_del(id) {
                      $.ajax({
                          type: 'POST',
                          url: 'row_pro/logs_row5.php',
                          data: {
                              id: id
                          },
                          dataType: 'json',
                          success: function(responses2) {
                          $('#delete_id').val(responses2.id);
                          $('#delete_fullname').html(responses2.lname +', '+ responses2.fname);

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