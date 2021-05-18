<div class="modal fade" id="add-usertype">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-user"></i> &nbsp;Add User Type</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <div class="row">
                      <div class="col-12">
                          <?php include 'controllers/add-usertype.php';?>
                      </div>
                    </div>
                  <div class="col-12">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" name="fullname"  required="">
                    </div>
                     <div class="col-12">
                        <label>Username:</label>
                        <input type="text" class="form-control" name="username"  required="">
                    </div>
                     <div class="col-12">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" required="">
                    </div>
                    <div class="col-12">
                        <label>Type: </label>
                        <select type="text" class="form-control" name="type">
                            <option value="" disabled="" disabled="" selected="true">--Select Type--</option>
                            <option value="Admin">Admin</option>
                            <option value="Staff">Staff</option>
                            <option value="Zone Leader">Zone Leader </option>   
                        </select>
                    </div>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="add-usertype">Add User Type</button>
            </div>
                   </form>
         </div>
 
    </div>
</div>
