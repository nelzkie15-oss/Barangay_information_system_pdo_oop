<div class="modal fade" id="edit-clearance<?= htmlentities($clearance['id']); ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-file-alt"></i> &nbsp;Edit Permit Clearance</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <div class="row">
                      <div class="col-12">
                         <?php include 'controllers/edit-clearance.php';?>
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
                            <select name="residentFullname" id="residentFullname" class="form-control" value="<?= htmlentities($clearance['residentFullname']); ?>">
                               <option value="<?= htmlentities($clearance['residentFullname']); ?>" hidden><?= htmlentities($clearance['residentFullname']); ?></option>
                               <!--  <option value="" disabled="disabled" selected="true"> --Select Resident--</option> -->
                                <?php foreach ($data as $row): ?>
                               <option value="<?=ucfirst(htmlentities($row["lname"]));?> <?=ucfirst($row["fname"]);?> <?=ucfirst($row["mname"]);?>"><?=ucfirst(htmlentities($row["lname"]));?> <?=ucfirst($row["fname"]);?> <?=ucfirst($row["mname"]);?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label>Business Name:</label>
                        <input type="text" class="form-control" name="businessName" value="<?= htmlentities($clearance['businessName']); ?>"  required="">
                    </div>
                     <div class="col-12">
                        <label>Business Address:</label>
                        <input type="text" class="form-control" name="businessAddress" value="<?= htmlentities($clearance['businessAddress']); ?>"  required="">
                    </div>
                     <div class="col-12">
                        <label>Type of Business:</label>
                          <select type="text" class="form-control" name="typeOfBusiness" value="<?= htmlentities($clearance['typeOfBusiness']); ?>">
                            <option value="<?= htmlentities($clearance['typeOfBusiness']); ?>" hidden><?= htmlentities($clearance['typeOfBusiness']); ?></option>
                           <!--  <option value="" disabled="" disabled="" selected="true">--Select Type of Business--</option> -->
                            <option value="Sari-sari store">Sari-sari store</option>
                            <option value="Computershop">Computershop</option>
                            <option value="Canteen">Canteen</option>
                            <option value="Online Business">Online Business</option>
                        </select>
                    </div>
                     <div class="col-12">
                        <label>OR Number:</label>
                        <input type="text" class="form-control" name="orNo" value="<?= htmlentities($clearance['orNo']); ?>" required="">
                    </div>
                     <div class="col-12">
                        <label>Amount:</label>
                        <input type="text" class="form-control" name="samount" value="<?= htmlentities($clearance['samount']); ?>" required="">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" class="form-control" name="recordedBy" value="<?php echo $f_name;?>">
                <input type="hidden" name="id" value="<?= htmlentities($clearance['id']); ?>">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="edit-clearance">Update</button>
            </div>
                   </form>
         </div>
 
    </div>
</div>
