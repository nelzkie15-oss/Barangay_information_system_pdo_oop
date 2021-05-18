
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
    $certificateofresidencyequest = $brgy->certificateofresidencyequest2();  
    $recordby = $brgy->fetch_recordby($user_session); 
    foreach($recordby as $rby);
    $f_name =  htmlentities($rby['fullname']);
?>

<?php include '../header/main-header_2.php';?>
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



    <div class="card">
        <div class="table-responsive">

      </div>
    </div>

        <div class="table-responsive">
        <div class="card-body">
           <div id="msg"></div>
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
                     foreach($certificateofresidencyequest as $review){ ?>
                    <tr>
                        <td><?= ucfirst(htmlentities($review['self_status'])); ?></td>
                        <td><?= ucfirst(htmlentities($review['residence_name'])); ?></td>
                        <td><?= ucfirst(htmlentities($review['date_created'])); ?></td>
                        <td><?= ucfirst(htmlentities($review['zoneleader_name'])); ?></td>
                        <td><button type="button" class="btn btn-info btn-sm click_cert" data-id="<?= htmlentities($review['certificate_id']); ?>">View</button></td>
                 
  
                         <td>
                        <div class="d-flex">
                        <div class="flex-1">
                        <div class="dropdown">
                         <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Status
                              </button> 
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                <form method="POST" action="">
                                    <input type="hidden" name="fullname" alt="fullname" value="<?php echo $f_name;?>">
                                    <a class="dropdown-item approv" style="color: green" data-approved="1" data-id="<?= htmlentities($review['certificate_id']); ?>"><i class="fas fa-check"></i> &nbsp;Approved</a> 
                                </form>
                             </li>
                          <li>
                             <a class="dropdown-item approv2" href="#" style="color: red" data-approved2="2" data-id2="<?= htmlentities($review['certificate_id']); ?>"><i class="fas fa-times"></i> &nbsp;Disapproved</a>    
                            </li>
                          </div>
                        </div>
                    </div>&nbsp;
                     <div class="flex-1">
                     <?php 
                      if($review['status'] == 1){
                            echo ' <button type="button" class="btn btn-success btn-sm" title="Approved By Zone Leader"><i class="fas fa-check"></i></button>';  
                          }else if($review['status'] == 2){
                                 echo ' <button type="button" class="btn btn-danger btn-sm" title="Disapproved By Zone Leader"><i class="fas fa-times"></i></button>';
                            }else{
                              echo ' ';
                            }
                         ?>
                        
                    </div>
                    </div>
                        </td>

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
</div>
</section>
</div>
 <?php include 'modal/view-certificate2.php'; ?>
  <script>
    $(document).ready(function() {

            $(document).on('click', '.approv', function(e) {
                e.preventDefault();
                const fullname = $('input[alt=fullname]').val();
                const status = $(this).attr("data-approved");
                const certificate_id  = $(this).attr("data-id");
             $.ajax({    
                 type: 'POST',
                 data: {

                         fullname: fullname,
                         status: status,
                         certificate_id: certificate_id,                         
                      },
                     url: 'controllers/edit_status003.php',
                    async: false,
                    cache: false,
                    success: function(data) {
                     $("#msg").html(data);
                    // window.location.reload(true);
                    }
            
               });     
          });
        
    });
</script>
  <script>
    $(document).ready(function() {

            $(document).on('click', '.approv2', function(e) {
                e.preventDefault();
                 const fullname = $('input[alt=fullname]').val();
                 const status = $(this).attr("data-approved2");
                 const certificate_id  = $(this).attr("data-id2");
             $.ajax({    
                 type: 'POST',
                 data: {
                         fullname: fullname,
                         status: status,
                         certificate_id: certificate_id,                         
                      },
                     url: 'controllers/edit_status003.php',
                    async: false,
                    cache: false,
                    success: function(data) {
                     $("#msg").html(data);
                    // window.location.reload(true);
                    }
            
               });     
          });
        
    });
</script>
     <script>
           $(document).ready(function() {   
               load_data();    
               var count = 1; 
               function load_data() {
                   $(document).on('click', '.click_cert', function() {
                     $('#view-certificate2').modal('show');
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