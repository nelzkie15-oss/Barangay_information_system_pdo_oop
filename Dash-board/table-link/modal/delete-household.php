<div class="modal fade" id="delete-household" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-home"></i> &nbsp;Delete Household</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="row">
                      <div class="col-12" id="msgx3">

                      </div>
                    </div>
                   <h5><center>Do you want to delete ? <u id="delete_householdno"></u></center></h5>
               </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" class="form-control" alt="user_name" name="user" value="<?php echo $f_name;?>">
                <input type="hidden" class="form-control" name="id" id="delete_id">
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" id="delete-h">Yes</button>
            </div>
          </form>
       </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let btn = document.querySelector('#delete-h');
        btn.addEventListener('click', () => {

            const user_name = document.querySelector('input[alt=user_name]').value;
            const id = document.querySelector('input[id=delete_id]').value;

           // var delay = 100;
            var data = new FormData(this.form);

            data.append('user_name', user_name);
            data.append('id', id);

            $.ajax({
                url: 'controllers/delete-household.php',
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
                        $('#msgx3').html(data);
                //  setTimeout(location.reload.bind(location), 200);

                },
                error: function(data) {
                    console.log("Failed");
                }
            });

        });
    });
</script>

