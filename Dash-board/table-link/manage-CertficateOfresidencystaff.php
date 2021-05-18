
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
    $certificateofresidency = $brgy->certificateofresidency(); 
    $certificateofresidencyequest = $brgy->certificateofresidencyequest();  
    $certificateofresidencyequest1 = $brgy->certificateofresidencyequest1();  
    $recordby = $brgy->fetch_recordby($user_session); 
    foreach($recordby as $rby);
    $f_name =  htmlentities($rby['fullname']);
?>

<?php include '../header/main-header_3.php';?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Certificate of Residency</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../main-dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Certificate of Residency</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="true">Add</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="approved-tab" data-toggle="tab" href="#approved" role="tab" aria-controls="approved" aria-selected="false">Approved</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="disapproved-tab" data-toggle="tab" href="#disapproved" role="tab" aria-controls="disapproved" aria-selected="false">Disapproved</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">

  <!-- add tab-->
  <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">
    
    <div class="card">
       <div class="card-header">
            <h3 class="card-title" style="float: right;"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-certificateofresidentstaff"> Add Certificate</button>
             <?php include 'modal/add_certificateofresidentstaff.php';?>
        </div>
        <div class="table-responsive">
        <div class="card-body">
             <table class="table table-colored table-centered table-inverse m-0" id="brgy-certificate" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <!--<th>ID</th> -->
                        <th>Resident Name</th>
                        <th>Purpose</th>
                        <th>Purok</th>
                        <th>Date Created</th>

                    </tr>
                </thead>
            <tbody>
                 <?php
                     foreach($certificateofresidency as $certificate){ ?>
                    <tr>
                        <td><?= ucfirst(htmlentities($certificate['resident_name'])); ?></td>
                        <td><?= ucfirst(htmlentities($certificate['purpose'])); ?></td>
                        <td><?= ucfirst(htmlentities($certificate['purok'])); ?></td>
                        <td><?= ucfirst(htmlentities($certificate['date_created'])); ?></td>

                        <td>

                    </tr>
                    <?php } 
                     ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

  </div>
    <!--end add tab-->

    <!-- approved tab-->
  <div class="tab-pane fade" id="approved" role="tabpanel" aria-labelledby="approved-tab">
    

        <div class="table-responsive">
        <div class="card-body">
             <table class="table table-colored table-centered table-inverse m-0" id="brgy-certificate" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <!--<th>ID</th> -->
                        <th>Self Status</th>
                        <th>Resident Name</th>
                        <th>Date Created</th>
                         <th>Zoneleader Name</th>
                        <th>Certificate</th>
                        <th>Status</th>

                    </tr>
                </thead>
            <tbody>
                 <?php
                     foreach($certificateofresidencyequest as $approved){ ?>
                    <tr>
                        <td><?= ucfirst(htmlentities($approved['self_status'])); ?></td>
                        <td><?= ucfirst(htmlentities($approved['residence_name'])); ?></td>
                        <td><?= ucfirst(htmlentities($approved['date_created'])); ?></td>
                         <td><?= ucfirst(htmlentities($approved['zoneleader_name'])); ?></td>
                        <td><button type="button" class="btn btn-info btn-sm click_cert" data-id="<?= htmlentities($approved['certificate_id']); ?>">Print</button></td>
                 
                         <td>
                         <?php

                           if(htmlentities($approved['status']) == 1){
                              echo "<button type='button' class='btn btn-primary btn-sm' value='Aprroved'>Aprroved</button>";
                             }else if(htmlentities($approved1['status']) == ""){
                              echo "";
                             }else{

                             }

                          ?> 

                        </td>    
                    </tr>
                    <?php } 
                     ?>
                </tbody>
            </table>
        </div>
      </div>


  </div>
   <!--end approved tab-->

   <!-- disapproved tab-->
  <div class="tab-pane fade" id="disapproved" role="tabpanel" aria-labelledby="disapproved-tab">
    
        <div class="table-responsive">
        <div class="card-body">
             <table class="table table-colored table-centered table-inverse m-0" id="brgy-certificate" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <!--<th>ID</th> -->
                        <th>Self Status</th>
                        <th>Resident Name</th>
                        <th>Date Created</th>
                         <th>Zoneleader Name</th>
                        <th>Status</th>

                    </tr>
                </thead>
               <tbody>
                 <?php
                     foreach($certificateofresidencyequest1 as $approved1){ ?>
                    <tr>
                        <td><?= ucfirst(htmlentities($approved1['self_status'])); ?></td>
                        <td><?= ucfirst(htmlentities($approved1['residence_name'])); ?></td>
                         <td><?= ucfirst(htmlentities($approved1['date_created'])); ?></td>
                          <td><?= ucfirst(htmlentities($approved1['zoneleader_name'])); ?></td>
                 
                         <td>
                         <?php

                           if(htmlentities($approved1['status']) == 2){
                              echo "<button type='button' class='btn btn-danger btn-sm' value='Disaprroved'>Disaprroved</button>";
                             }else if(htmlentities($approved1['status']) == ""){
                               echo "";
                             }else{

                             }

                          ?> 

                        </td>    
                    </tr>
                    <?php } 
                     ?>
                </tbody>
            </table>
        </div>
      </div>
  </div>
   <!--end disapproved tab-->
</div>
</div>
</div>
</div>
</section>
</div>
 <?php include 'modal/view-certificate.php'; ?>
     <script>
           $(document).ready(function() {   
               load_data();    
               var count = 1; 
               function load_data() {
                   $(document).on('click', '.click_cert', function() {
                     $('#view-certificate').modal('show');
                        var certificate_id = $(this).data("id");
                     
                       // console.log(logid);
                        getID(certificate_id); //argument    
                 
                   });
                }

                 function getID(certificate_id) {
                      $.ajax({
                          type: 'POST',
                          url: 'row_pro/logs_row8.php',
                          data: {
                              certificate_id: certificate_id
                          },
                          dataType: 'json',
                          success: function(responses) {
                          $('#edit_certificateid').val(responses.certificate_id);
                          $('#edit_selfstatus').html(responses.self_status);
                          $('#edit_residencename').html(responses.residence_name);

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