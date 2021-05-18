<div class="modal fade" id="delete-clearance<?= htmlentities($clearance['id']); ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-file-alt"></i> &nbsp;Delete Permit Clearance</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <div class="row">
                      <div class="col-12">
                          <?php include 'controllers/delete-clearance.php';?>
                      </div>
                    </div>
                   <h5><center>Do you want to delete ? <u><?= ucfirst(htmlentities($clearance['residentFullname'])); ?></u></center></h5>
               </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" name="id" value="<?= htmlentities($clearance['id']); ?>">
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary" name="delete-clearance">Yes</button>
            </div>
          </form>
       </div>
    </div>
</div>
