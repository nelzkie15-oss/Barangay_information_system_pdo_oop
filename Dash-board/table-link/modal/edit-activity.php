<div class="modal fade" id="edit-activity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-calendar"></i> &nbsp;Edit Activity</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST">
                    <div class="row">
                      <div class="col-12" id="msgx7">

                      </div>
                    </div>
                  <div class="col-12">
                        <label>Date of Activity:</label>
                        <input type="date" class="form-control" name="dateofactivity" alt="dateofactivity" id="edit_dateofactivity"  required="">
                    </div>
                     <div class="col-12">
                        <label>Activity:</label>
                        <input type="text" class="form-control"  name="activity" alt="activity" id="edit_activity" required="">
                    </div>
                     <div class="col-12">
                        <label>Description:</label>
                        <textarea type="text" cols="3" rows="3" name="description" alt="description" id="edit_description" class="form-control"></textarea>
                    </div>

             </div>
            <div class="modal-footer justify-content-between">
               <input type="hidden" class="form-control" alt="user_name" name="user" value="<?php echo $f_name;?>">
                <input type="hidden" name="id" id="edit_id">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="edit-acty">Update</button>
            </div>
           </form>
         </div>
 
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        let btn = document.querySelector('#edit-acty');
        btn.addEventListener('click', () => {


            const dateofactivity = document.querySelector('input[alt=dateofactivity]').value;
            const activity = document.querySelector('input[alt=activity]').value;
            const description = document.querySelector('textarea[alt=description]').value;
            const user_name = document.querySelector('input[alt=user_name]').value;
            const id = document.querySelector('input[id=edit_id]').value;

           // var delay = 100;
            var data = new FormData(this.form);

            data.append('dateofactivity', dateofactivity);
            data.append('activity', activity);
            data.append('description', description);
            data.append('user_name', user_name);
            data.append('id', id);

            $.ajax({
                url: 'controllers/edit-activity.php',
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
                        $('#msgx7').html(data);
                //  setTimeout(location.reload.bind(location), 200);

                },
                error: function(data) {
                    console.log("Failed");
                }
            });

        });
    });
</script>
