<div class="modal fade" id="add-household">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-home"></i> &nbsp;Add Household</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <div class="row">
                      <div class="col-12">
                          <?php include 'controllers/add-household.php';?>
                      </div>
                    </div>

                    <div class="col-12">
                        <label>Household #:</label>
                        <input type="text" class="form-control" name="householdno"  required="">
                    </div>
                     <div class="col-12">
                        <label>Zone:</label>
                        <input type="text" class="form-control" name="zone" required="">
                    </div>

                     <div class="col-12">
                        <label>Total Number of Family:</label>
                        <input type="text" class="form-control" name="totalhousemembers" required="">
                    </div>
                      <div class="col-12">
                        <label>Head of Family: </label>
                        <select type="text" class="form-control" name="headoffamily">
                            <option value="" disabled="" disabled="" selected="true">--Select Head of family--</option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <input type="hidden" class="form-control" name="user" value="<?php echo $f_name;?>">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="add-household">Add Household</button>
            </div>
           </form>
         </div>
    </div>
</div>
