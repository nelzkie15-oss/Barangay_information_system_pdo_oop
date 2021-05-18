<div class="modal fade" id="add-permit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-file"></i> &nbsp;Add Permit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <div class="row">
                      <div class="col-12">
                         <?php include 'controllers/add-permit.php';?>
                      </div>
                    </div>
                  <div class="col-12">
                    <label>Resident:</label>
                        <div class="form-group">
                            <?php
                              require_once '../Private/conn/db-connection.php';
                              $smt = $db->prepare('SELECT id, lname, fname, mname FROM tblresident');
                              $smt->execute();
                              $data = $smt->fetchAll();
                           ?>
                            <select name="residentFullname" id="residentFullname" class="form-control">
                                <option value="" disabled="disabled" selected="true"> --Select Resident--</option>
                                <?php foreach ($data as $row): ?>
                               <option value="<?=ucfirst(htmlentities($row["lname"]));?> <?=ucfirst($row["fname"]);?> <?=ucfirst($row["mname"]);?>"><?=ucfirst(htmlentities($row["lname"]));?> <?=ucfirst($row["fname"]);?> <?=ucfirst($row["mname"]);?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label>Business Name:</label>
                        <input type="text" class="form-control" name="businessName"  required="">
                    </div>
                     <div class="col-12">
                        <label>Business Address:</label>
                        <input type="text" class="form-control" name="businessAddress"  required="">
                    </div>
                     <div class="col-12">
                        <label>Type of Business:</label>
                        <input type="text" class="form-control" name="typeOfBusiness" required="">
                    </div>
                     <div class="col-12">
                        <label>OR Number:</label>
                        <input type="text" class="form-control" name="orNo" required="">
                    </div>
                     <div class="col-12">
                        <label>Amount:</label>
                        <input type="text" class="form-control" name="samount" required="">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
               <input type="hidden" class="form-control" name="user" value="<?php echo $f_name;?>">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="add-permit">Add Permit</button>
            </div>
             </form>
         </div>
 
    </div>
</div>
