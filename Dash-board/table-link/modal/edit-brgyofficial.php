<!-- <div class="modal fade" id="edit-brgyofficial"> -->
<div class="modal fade" id="edit-brgyofficial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-user"></i> &nbsp;Edit Barangay Official</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST">
                    <div class="row">
                      <div class="col-12" id="msgx">

                      </div>
                    </div>
                    <div class="col-12">
                        <label>Positions: </label>
                        <select type="text" class="form-control" id="edit_sPostion" alt="sPostion" name="sPostion" >
                            <!-- <option value="" disabled="" disabled="" selected="true">--Select Positions--</option> -->
                            <option id="edit_sPostion" hidden></option>
                            <option value="Punong Barangay/Barangay Captain">Punong Barangay/Barangay Captain</option>
                            <option value="regular Sangguniang Barangay Members">regular Sangguniang Barangay Members</option>
                            <option value="Sangguniang Kabataan Chairmen">Sangguniang Kabataan Chairmen</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="edit_completeName" alt="completeName" name="completeName">
                    </div>
                     <div class="col-12">
                        <label>Contact #:</label>
                        <input type="number" class="form-control" alt="pcontact" name="pcontact" id="edit_pcontact"  minlength="11" maxlength="11">
                    </div>
                     <div class="col-12">
                        <label>Address:</label> 
                        <input type="text" class="form-control" name="paddress" alt="paddress" id="edit_paddress">
                    </div>
                     <div class="col-12">
                        <label>Start Term:</label>
                        <input type="date" class="form-control" name="termStart" alt="termStart" id="edit_termStart">
                    </div>
                     <div class="col-12">
                        <label>End Term:</label>
                        <input type="date" class="form-control" name="termEnd" alt="termEnd" id="edit_termEnd">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" class="form-control" alt="user_name" name="user" value="<?php echo $f_name;?>">
                <input type="hidden" name="id" alt="id" id="edit_id">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="logs" >Update Official</button>
            </div>
        </form>
         </div>
 
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let btn = document.querySelector('#logs');
        btn.addEventListener('click', () => {

            const sPostion = $('#edit_sPostion option:selected').val();
            const completeName = document.querySelector('input[alt=completeName]').value;
            const pcontact = document.querySelector('input[alt=pcontact]').value;
            const paddress = document.querySelector('input[alt=paddress]').value;
            const termStart = document.querySelector('input[alt=termStart]').value;
            const termEnd = document.querySelector('input[alt=termEnd]').value;
            const user_name = document.querySelector('input[alt=user_name]').value;
            const id = document.querySelector('input[id=edit_id]').value;

           // var delay = 100;
            var data = new FormData(this.form);

            data.append('sPostion', sPostion);
            data.append('completeName', completeName);
            data.append('pcontact', pcontact);
            data.append('paddress', paddress);
            data.append('termStart', termStart);
            data.append('termEnd', termEnd);
            data.append('user_name', user_name);
            data.append('id', id);

            $.ajax({
                url: 'controllers/edit-brgyofficial.php',
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
                        $('#msgx').html(data);
                //  setTimeout(location.reload.bind(location), 200);

                },
                error: function(data) {
                    console.log("Failed");
                }
            });

        });
    });
</script>