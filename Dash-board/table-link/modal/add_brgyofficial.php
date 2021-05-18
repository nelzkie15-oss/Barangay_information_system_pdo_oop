<div class="modal fade" id="add-brgyofficial">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-user"></i> &nbsp;Add Barangay Official</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <div class="row">
                      <div class="col-12">
                          <?php include 'controllers/add-brgyofficial.php';?>
                      </div>
                    </div>
                    <div class="col-12">
                        <label>Positions: </label>
                        <select type="text" class="form-control" name="sPostion">
                            <option value="" disabled="" disabled="" selected="true">--Select Positions--</option>
                            <option value="Punong Barangay/Barangay Captain">Punong Barangay/Barangay Captain</option>
                            <option value="regular Sangguniang Barangay Members">regular Sangguniang Barangay Members</option>
                            <option value="Sangguniang Kabataan Chairmen">Sangguniang Kabataan Chairmen</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" name="completeName"  required="">
                    </div>
                     <div class="col-12">
                        <label>Contact #:</label>
                        <input type="text" class="form-control" name="pcontact" minlength="11" maxlength="11"  required="">
                    </div>
                     <div class="col-12">
                        <label>Address:</label>
                        <input type="text" class="form-control" name="paddress" required="">
                    </div>
                     <div class="col-12">
                        <label>Start Term:</label>
                        <input type="date" class="form-control" name="termStart" required="">
                    </div>
                     <div class="col-12">
                        <label>End Term:</label>
                        <input type="date" class="form-control" name="termEnd" required="">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" class="form-control" name="user" value="<?php echo $f_name;?>">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="add-bgryofficial">Add Official</button>
            </div>
          </form>
         </div>
 
    </div>
</div>
