
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
    $fetchpermitclearance = $brgy->fetch_permitclearance(); 
    $fetchresidents = $brgy->fetch_residents_status($user_session); 
    foreach($fetchresidents as $statres);
    $f_name =  htmlentities($statres['fullname']);
     $utype =  htmlentities($statres['type']);

?>

<?php include '../header/main-header.php';?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Permit Clearance</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../main-dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Permit Clearance</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="card">
      <?php
         if($utype == 'Admin'){
            
            echo '<h3 class="card-title" style="float: right;"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-clearance"> Add Clearance</button>';
         include "modal/add_clearance.php";
       } ?>
        <div class="table-responsive">
            <div id="msg"></div>
        <div class="card-body">
             <table class="table table-colored table-centered table-inverse m-0" id="brgy-officials" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Resident Fullname</th>
                        <th>Business Name</th>
                        <th>Business Address</th>
                        <th>Type of Business</th>
                        <th>OR Number</th>
                        <th>Samount</th>
                        <th>Date Recorded</th>
                        <th>Recorded By</th>
                        <th>Status</th>
   

                    </tr>
                </thead>
            <tbody>
                 <?php
                     foreach($fetchpermitclearance as $clearance){ ?>
                    <tr>
                        <td><?= ucfirst(htmlentities($clearance['residentFullname'])); ?></td>
                        <td><?= ucfirst(htmlentities($clearance['businessName'])); ?></td>
                        <td><?= ucfirst(htmlentities($clearance['businessAddress'])); ?></td>
                        <td><?= ucfirst(htmlentities($clearance['typeOfBusiness'])); ?></td>
                        <td><?= ucfirst(htmlentities($clearance['orNo'])); ?></td>
                        <td><?= ucfirst(htmlentities($clearance['samount'])); ?></td>
                        <td><?= date('M-d-Y h:i A', strtotime(htmlentities($clearance['dateRecorded'])));?></td>
                        <td><?= ucfirst(htmlentities($clearance['recordedBy'])); ?></td>
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
                                    <a class="dropdown-item approv" style="color: green" data-approved="1" data-id="<?= htmlentities($clearance['id']); ?>"><i class="fas fa-check"></i> &nbsp;Approved</a> 
                                </form>
                             </li>
                          <li>
                             <a class="dropdown-item approv2" href="#" style="color: red" data-approved2="2" data-id2="<?= htmlentities($clearance['id']); ?>"><i class="fas fa-times"></i> &nbsp;Disapproved</a>    
                            </li>
                          </div>
                        </div>
                    </div>&nbsp;
                     <div class="flex-1">
                     <?php 
                      if($clearance['status'] == 1){
                            echo ' <button type="button" class="btn btn-success btn-sm" title="Approved By Zone Leader"><i class="fas fa-check"></i></button>';  
                          }else if($clearance['status'] == 2){
                                 echo ' <button type="button" class="btn btn-danger btn-sm" title="Disapproved By Zone Leader"><i class="fas fa-times"></i></button>';
                            }else{
                              echo ' ';
                            }
                         ?>
                        
                    </div>
                    </div>
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
 <script>
    $(document).ready(function() {

            $(document).on('click', '.approv', function(e) {
                e.preventDefault();
                const fullname = $('input[alt=fullname]').val();
                const status = $(this).attr("data-approved");
                const id  = $(this).attr("data-id");
             $.ajax({    
                 type: 'POST',
                 data: {

                         fullname: fullname,
                         status: status,
                         id: id,                         
                      },
                     url: 'controllers/edit_status2.php',
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
                 const id  = $(this).attr("data-id2");
             $.ajax({    
                 type: 'POST',
                 data: {
                         fullname: fullname,
                         status: status,
                         id: id,                         
                      },
                     url: 'controllers/edit_status2.php',
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