<div class="modal fade" id="edit-blotter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-people-arrows"></i> &nbsp;Edit Blotter</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form method="POST">
                    <div class="row">
                      <div class="col-12" id="msgx6">

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
                            <select name="complainant"  class="form-control" id="edit_complainant">
                              <option id="edit_complainant" hidden></option>
                               <?php foreach ($data as $row): ?>
                               <option value="<?=ucfirst(htmlentities($row["lname"]));?> <?=ucfirst($row["fname"]);?> <?=ucfirst($row["mname"]);?>"><?=ucfirst(htmlentities($row["lname"]));?> <?=ucfirst($row["fname"]);?> <?=ucfirst($row["mname"]);?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div> 
                     <div class="col-6">
                        <label>Age:</label>
                        <input type="text" class="form-control" name="cage" alt="cage" id="edit_cage"  required="">
                    </div>

                    </div>

                  <div class="row">
                    <div class="col-6">
                        <label>Address:</label>
                        <input type="text" class="form-control" name="caddress" alt="caddress" id="edit_caddress"  required="">
                    </div>
                    <div class="col-6">
                        <label>Contact #:</label>
                        <input type="text" class="form-control" minlength="11" maxlength="11" id="edit_ccontact" name="ccontact" alt="ccontact" required="">
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-6">
                        <label>Person to Complain:</label>
                        <input type="text" class="form-control" name="personToComplain" alt="personToComplain" id="edit_personToComplain"  required="">
                    </div>
                    <div class="col-6">
                        <label>Age:</label>
                        <input type="text" class="form-control" name="page" alt="page" id="edit_page" required="">
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-6">
                        <label>Address:</label>
                        <input type="text" class="form-control" name="paddress" alt="paddress" id="edit_paddress" required="">
                    </div>
                    <div class="col-6">
                        <label>Contact #:</label>
                        <input type="text" class="form-control" name="pcontact" alt="pcontact" id="edit_pcontact" minlength="11" maxlength="11" required="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <label>Complaint:</label>
                        <input type="text" class="form-control" name="complaint" alt="complaint" id="edit_complaint" required="">
                    </div>
                    <div class="col-6">
                        <label>Action:</label>
                            <select type="text" class="form-control" name="actionTaken" id="edit_actionTaken">
                            <option id="edit_actionTaken" hidden></option>
                           <!--  <option value="" disabled="" disabled="" selected="true">--Select Action--</option> -->
                            <option value="Negotiating">Negotiating</option>
                            <option value="They both signed">They both signed</option>
                        </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                        <label>Status:</label>
                          <select type="text" class="form-control" name="sStatus" id="edit_sStatus">
                            <option id="edit_sStatus" hidden></option>
                            <!-- <option value="" disabled="" disabled="" selected="true">--Select Status--</option> -->
                            <option value="Solved">Solved</option>
                            <option value="Not Solved">Not Solved</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label>Location of Incendence:</label>
                        <input type="text" class="form-control" name="locationOfincidence" alt="locationOfincidence" id="edit_locationOfincidence" required="">
                    </div>
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
               <input type="hidden" class="form-control" name="recordedby" alt="recordedby" value="<?php echo $f_name;?>">
               <input type="hidden" name="id" id="edit_id">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="edit-btr">Update</button>
            </div>
            </form>
         </div>
 
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        let btn = document.querySelector('#edit-btr');
        btn.addEventListener('click', () => {

            const complainant = $('#edit_complainant option:selected').val();
            const cage = document.querySelector('input[alt=cage]').value;
            const caddress = document.querySelector('input[alt=caddress]').value;
            const ccontact = document.querySelector('input[alt=ccontact]').value;
            const personToComplain = document.querySelector('input[alt=personToComplain]').value;
            const page = document.querySelector('input[alt=page]').value;
            const paddress = document.querySelector('input[alt=paddress]').value;
            const pcontact = document.querySelector('input[alt=pcontact]').value;
            const complaint = document.querySelector('input[alt=complaint]').value;
            const actionTaken = $('#edit_actionTaken option:selected').val();
            const sStatus = $('#edit_sStatus option:selected').val();
            const locationOfincidence = document.querySelector('input[alt=locationOfincidence]').value;
            const recordedby = document.querySelector('input[alt=recordedby]').value;
            const id = document.querySelector('input[id=edit_id]').value;

           // var delay = 100;
            var data = new FormData(this.form);

            data.append('complainant', complainant);
            data.append('cage', cage);
            data.append('caddress', caddress);
            data.append('ccontact', ccontact);
            data.append('personToComplain', personToComplain);
            data.append('page', page);
            data.append('paddress', paddress);
            data.append('pcontact', pcontact);
            data.append('complaint', complaint);
            data.append('actionTaken', actionTaken);
            data.append('sStatus', sStatus);
            data.append('locationOfincidence', locationOfincidence);
            data.append('recordedby', recordedby);
            data.append('id', id);

            $.ajax({
                url: 'controllers/edit-blotter.php',
                type: "POST",
                data: data,
                processData: false,
                contentType: false,

                async: false,
                cache: false,
                // headers: {
                //         'X-CSRF-TOKEN': '". csrf_token() ."'
                //         },
                success: function(data) {
                        $('#msgx6').html(data);
                //  setTimeout(location.reload.bind(location), 200);

                },
                error: function(data) {
                    console.log("Failed");
                }
            });

        });
    });
</script>