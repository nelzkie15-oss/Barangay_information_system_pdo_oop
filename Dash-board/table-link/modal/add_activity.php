<div class="modal fade" id="add-activity">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-calendar"></i> &nbsp;Add Activity</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <div class="row">
                      <div class="col-12">
                          <?php include 'controllers/add-activity.php';?>
                      </div>
                    </div>
                  <div class="col-12">
                        <label>Date of Activity:</label>
                        <input type="date" class="form-control" name="dateofactivity"  required="">
                    </div>
                     <div class="col-12">
                        <label>Activity:</label>
                        <input type="text" class="form-control" name="activity"  required="">
                    </div>
                     <div class="col-12">
                        <label>Description:</label>
                        <textarea type="text" cols="3" rows="3" name="description" class="form-control"></textarea>
                    </div>
                    <div class="col-12">
                        <label>Image: </label>
                        <input type="file" class="form-control" name="imageBanner" accept=".jpg, .JPEG, .png, .gif"  required="">
                    </div>
             </div>
            <div class="modal-footer justify-content-between">
              <input type="hidden" class="form-control" name="user" value="<?php echo $f_name;?>">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="add-activity">Add Activity</button>
            </div>
             </form>
         </div>
 
    </div>
</div>
