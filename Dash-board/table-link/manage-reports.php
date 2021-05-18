
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
    $countage = $brgy->fetch_blotters_countage(); 
    foreach($fetchresidents as $statres);
    $f_name =  htmlentities($statres['fullname']);

    

?>

<?php include '../header/main-header.php';?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blotter Reports</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../main-dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Blotter Reports</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="card">
 <div class="card-body">
<div class="flex-container">
  <div>
    <div class="row">
   <div class="col-sm-11">
    <div id="chart-container" style="width:40%">
        <canvas id="graphCanvas" ></canvas>
    </div>
  </div>
 <div class="col-sm-1">
    <div style=";position: absolute;left: -500%;">
      <div class="callout callout-danger" style="height: 180px;overflow-y: scroll;width: 150%">
        <h6><strong>Blotter List</strong></h6><hr>
        <?php
         foreach($countage as $blotter_age){

           if(htmlentities($blotter_age['page']) < 18){
            
            $var = "Minor Age"; 
           }else if(htmlentities($blotter_age['page']) >= 18){
            $var = "Old"; 
           }else{

           }

          ?>

          <p style="font-size: 12px;"><b>Full Name: </b> <?= ucwords(htmlentities($blotter_age['personToComplain'])); ?> | <b> Age: </b> <?= ucwords(htmlentities($blotter_age['cage'])); ?> | <b>Status: </b><?= ucwords(htmlentities($var)); ?></p> 
          <?php } 
         ?>  
      </div>

   </div> 
</div>
</div>
<script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("controllers/barchart_data.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var page = [];

                    for (var i in data) {
                        name.push(data[i].personToComplain);
                        page.push(data[i].page);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Age',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: page
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>
<!-- end bar Chart -->

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