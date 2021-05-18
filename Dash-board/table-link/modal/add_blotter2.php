<div class="modal fade" id="add-blotter">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-people-arrows"></i> &nbsp;Add Blotter</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <div class="row">
                      <div class="col-12">
                         <?php include 'controllers/add-blotter2.php';?>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-6">
                    <label>Complainant:</label>
                        <div class="form-group">
                            <?php
                              require_once '../Private/conn/db-connection.php';
                              $smt = $db->prepare('SELECT id, lname, fname, mname FROM tblresident');
                              $smt->execute();
                              $data = $smt->fetchAll();
                           ?>
                            <select name="complainant" id="complainant" class="form-control">
                                <option value="" disabled="disabled" selected="true"> --Select Complainant--</option>
                                <?php foreach ($data as $row): ?>
                               <option value="<?=ucfirst(htmlentities($row["lname"]));?> <?=ucfirst($row["fname"]);?> <?=ucfirst($row["mname"]);?>"><?=ucfirst(htmlentities($row["lname"]));?> <?=ucfirst($row["fname"]);?> <?=ucfirst($row["mname"]);?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div> 
                     <div class="col-6">
                        <label>Age:</label>
                        <input type="text" class="form-control" name="cage"  required="">
                    </div>

                    </div>

                  <div class="row">
                    <div class="col-6">
                        <label>Address:</label>
                        <input type="text" class="form-control" name="caddress"  required="">
                    </div>
                    <div class="col-6">
                        <label>Contact #:</label>
                        <input type="text" class="form-control" minlength="11" maxlength="11" name="ccontact" required="">
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-6">
                        <label>Person to Complain:</label>
                        <input type="text" class="form-control" name="personToComplain"  required="">
                    </div>
                    <div class="col-6">
                        <label>Age:</label>
                        <input type="text" class="form-control" name="page" required="">
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-6">
                        <label>Address:</label>
                        <input type="text" class="form-control" name="paddress"  required="">
                    </div>
                    <div class="col-6">
                        <label>Contact #:</label>
                        <input type="text" class="form-control" name="pcontact" minlength="11" maxlength="11" required="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <label>Complaint:</label>
                        <input type="text" class="form-control" name="complaint"  required="">
                    </div>
                    <div class="col-6">
                        <label>Action:</label>
                            <select type="text" class="form-control" name="actionTaken">
                            <option value="" disabled="" disabled="" selected="true">--Select Action--</option>
                            <option value="Negotiating">Negotiating</option>
                            <option value="They both signed">They both signed</option>
                        </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                        <label>Status:</label>
                          <select type="text" class="form-control" name="sStatus">
                            <option value="" disabled="" disabled="" selected="true">--Select Status--</option>
                            <option value="Solved">Solved</option>
                            <option value="Not Solved">Not Solved</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label>Location of Incendence:</label>
                        <input type="text" class="form-control" name="locationOfincidence" required="">
                    </div>
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
               <input type="hidden" class="form-control" name="recordedby" value="<?php echo $f_name;?>">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="add-blotter">Add Blotter</button>
            </div>
                   </form>
         </div>
 
    </div>
</div>
