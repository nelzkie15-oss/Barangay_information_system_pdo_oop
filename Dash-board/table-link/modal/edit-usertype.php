<div class="modal fade" id="edit-usertype">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-user"></i> &nbsp;Edit User Type</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST">
                    <div class="row">
                      <div class="col-12" id="msgx02">

                      </div>
                    </div>
                  <div class="col-12">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" name="fullname" alt="fullname" id="edit_fullname"  required="">
                    </div>
                     <div class="col-12">
                        <label>Username:</label>
                        <input type="text" class="form-control" name="username" alt="username" id="edit_username"  required="">
                    </div>
                     <div class="col-12">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" alt="password" id="edit_password" required="">
                    </div>
                    <div class="col-12">
                        <label>Type: </label>
                        <select type="text" class="form-control" name="type" id="edit_type">
                            <option id="edit_type" hidden></option>
                            <option value="Admin">Admin</option>
                            <option value="Staff">Staff</option>
                            <option value="Zone Leader">Zone Leader </option>   
                        </select>
                    </div>


            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" class="form-control" alt="user_name2" name="user" value="<?php echo $f_name;?>">
                <input type="hidden" class="form-control" name="id" id="edit_id">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="edit-type">Update</button>
            </div>
           </form>
         </div>
 
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        let btn = document.querySelector('#edit-type');
        btn.addEventListener('click', () => {


            const fullname = document.querySelector('input[alt=fullname]').value;
            const username = document.querySelector('input[alt=username]').value;
            const password = document.querySelector('input[alt=password]').value;
            const type = $('#edit_type option:selected').val();
            const user_name = document.querySelector('input[alt=user_name2]').value;
            const id = document.querySelector('input[id=edit_id]').value;

           // var delay = 100;
            var data = new FormData(this.form);

            data.append('fullname', fullname);
            data.append('username', username);
            data.append('password', password);
            data.append('type', type);
            data.append('user_name', user_name);
            data.append('id', id);

            $.ajax({
                url: 'controllers/edit-usertype.php',
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
                        $('#msgx02').html(data);
                //  setTimeout(location.reload.bind(location), 200);

                },
                error: function(data) {
                    console.log("Failed");
                }
            });

        });
    });
</script>
