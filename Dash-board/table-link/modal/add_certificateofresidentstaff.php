<div class="modal fade" id="add-certificateofresidentstaff">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
            <div class="card-body">
      <!--       <div class="table-responsive"> -->
                <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                  <div class="row">
                      <div class="col-12">
                          <?php include 'controllers/add-certificateofresidentstaff.php';?>
                      </div>
                    </div>
                <table width="762" align="center" cellpadding='3'>
                  <tr>
                     <td align="center">
                        <img src="header_logo/barangay1.png" width="762" class="img-fluid" alt="Responsive image">
                     </td>
                  </tr>
                  <tr>
                     <td align="center">
                        <b>OFFICE OF THE BARANGAY CAPTAIN</b>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <hr>
                     </td>
                  </tr>
                  <tr>
                     <td align="center">
                        <h2><b>CERTIFICATE OF RESIDENCY</b></h2>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <table width="100%" cellpadding='3'>
                        </table>
                     </td>
                  <tr>
                   <tr>
                     <td align="left" style="padding-left: 10%;padding-bottom: 20px">
                        <b>TO WHOM IT MAY CONCERN:</b>
                     </td>
                  </tr>
                 <br><br>
                 <tr>
                     <td width="100%" align='left' style=" text-indent: 50px;padding-left: 10%;padding-right: 10%;;padding-bottom: 15px">
                      
                           This is to certify that <strong>&nbsp;<select name="self_status"><option value="MRS.">MRS.</option><option value="MS.">MS.</option><option value="MISS.">MISS.</option></select><?php
                              require_once '../Private/conn/db-connection.php';
                              $smt = $db->prepare('SELECT resident_name FROM tbl_certificateofresidency');
                              $smt->execute();
                              $data = $smt->fetchAll();
                           ?>
                            <select name="residence_name">
                                <option value="" disabled="disabled" selected="true"> --Select Resident Name--</option>
                                <?php foreach ($data as $row): ?>
                               <option value="<?=ucfirst(htmlentities($row["resident_name"]));?>"><?=ucfirst(htmlentities($row["resident_name"]));?> </option>
                                <?php endforeach ?>
                            </select></strong>, of legal age, marriead, Filipino citizin, whose specimen signature appears below, is a  <strong>PERMANENT RESIDENT</strong> of this Barangay Minanga Norte, Iguig, Cagayan.
                       
                     </td>

                  </tr>
                      <td width="100%" align='left' style=" text-indent: 50px;padding-left: 10%;padding-right: 10%">
                      
                       Based on records of this office, she has been residing at Barangay Minanga Norte, Municipality of Iguig, Cagayan.<br><br>


                        This <STRONG>CERTIFICATION</STRONG> is being issued upon the request of the above-named person for whatever legal purpose it may serve.<br><br>
                       <p style=" text-indent: 50px">Issued this 28<sup>th</sup> day of June, 2013 at Barangay Minanga Norte, Iguig,</p><br><Br>

                       Specimen Signature: <br><br>


                       _____________________
                       <br><Br>

                      <div class="row">
                       <div class="col-md-6">
                       </div>
                        <div class="col-md-6">
                       <strong style="right: "><u>RUBIN R. MACABABBAD</u></strong><br>
                                                   <p style=" text-indent: 65px">Punong Barangay</p>
                     </div>
                     </div>
                       

                       Note:  <br>

                        <p style="font-size: 12px">"Not valid without official seal"</p>


                     </td>


               </table>
             </div>
            <div class="modal-footer justify-content-between">
              <input type="hidden" class="form-control" name="user" value="<?php echo $f_name;?>">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="add-certifi">submit</button>
            </div>
             </form>
         </div>
 
     </div>
</div>

</div>
