<div class="modal fade" id="edit-household" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-home"></i> &nbsp;Edit Household</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST">
                    <div class="row">
                      <div class="col-12" id="msgx4">

                      </div>
                    </div>
                    <div class="col-12">
                        <label>Household #:</label>
                        <input type="text" class="form-control" alt="householdno" id="edit_householdno" name="householdno"  required="">
                    </div>
                     <div class="col-12">
                        <label>Zone:</label>
                        <input type="text" class="form-control" id="edit_zone" alt="zone" name="zone" required="">
                    </div>

                     <div class="col-12">
                        <label>Total Number of Family:</label>
                        <input type="text" class="form-control" id="edit_totalhousemembers" alt="totalhousemembers" name="totalhousemembers" required="">
                    </div>
                      <div class="col-12">
                     <label>Head of Family: </label>
                        <select type="text" class="form-control" id="edit_headoffamily" alt="headoffamily" name="headoffamily" >
                            <!-- <option value="" disabled="" disabled="" selected="true">--Select Positions--</option> -->
                            <option id="edit_headoffamily" hidden></option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" class="form-control" alt="user_name2" name="user" value="<?php echo $f_name;?>">
                <input type="hidden" class="form-control" name="id" id="edit_id">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="edit_h">Update Household</button>
            </div>
          </form>
       </div> 
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let btn = document.querySelector('#edit_h');
        btn.addEventListener('click', () => {


            const householdno = document.querySelector('input[alt=householdno]').value;
            const zone = document.querySelector('input[alt=zone]').value;
            const totalhousemembers = document.querySelector('input[alt=totalhousemembers]').value;
            const headoffamily = $('#edit_headoffamily option:selected').val();
            const user_name = document.querySelector('input[alt=user_name2]').value;
            const id = document.querySelector('input[id=edit_id]').value;

           // var delay = 100;
            var data = new FormData(this.form);

            data.append('householdno', householdno);
            data.append('zone', zone);
            data.append('totalhousemembers', totalhousemembers);
            data.append('headoffamily', headoffamily);
            data.append('user_name', user_name);
            data.append('id', id);

            $.ajax({
                url: 'controllers/edit-household.php',
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
                        $('#msgx4').html(data);
                //  setTimeout(location.reload.bind(location), 200);

                },
                error: function(data) {
                    console.log("Failed");
                }
            });

        });
    });
</script>
