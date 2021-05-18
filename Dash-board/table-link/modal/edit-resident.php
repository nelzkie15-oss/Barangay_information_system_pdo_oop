<div class="modal fade" id="edit-resident" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-user"></i> &nbsp;Edit Resident</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST">
                    <div class="row">
                      <div class="col-12" id="msgx5">

                      </div>
                    </div>
                   <div class="row">  
                         <div class="col-4">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" alt="lname" name="lname" id="edit_lname"  required="">
                        </div>
                         <div class="col-4">
                            <label>First Name:</label>
                            <input type="text" class="form-control"  alt="fname" name="fname" id="edit_fname" required="">
                        </div>
                         <div class="col-4">
                            <label>Middle Name:</label>
                            <input type="text" class="form-control" alt="mname" name="mname" id="edit_mname" >
                        </div>  
                    </div>

                     <div class="row">  
                         <div class="col-4">
                            <label>Birth Date:</label>
                            <input type="date" class="form-control" alt="bdate" name="bdate" required="" id="edit_bdate">
                        </div>
                         <div class="col-4">
                            <label>Birth Place:</label>
                            <input type="text" class="form-control" alt="bplace" name="bplace" required="" id="edit_bplace">
                        </div> 
                          <div class="col-4">
                            <label>Age:</label>
                            <input type="text" class="form-control" alt="age" name="age"  required="" id="edit_age">
                        </div> 
                    </div>

                     <div class="row">  
                          <div class="col-2">
                            <label>Barangay:</label>
                            <input type="text" class="form-control" alt="barangay" name="barangay"  required="" id="edit_barangay">
                        </div>
                          <div class="col-2">
                            <label>Zone #:</label>
                            <input type="text" class="form-control" alt="zone" name="zone" id="edit_zone">
                        </div>
                         <div class="col-4">
                            <label>Total Household:</label>
                            <input type="text" class="form-control" alt="totalhousehold" name="totalhousehold" id="edit_totalhousehold">
                        </div>
                          <div class="col-4">
                            <label>Differently-abled Person :</label>
                            <input type="text" class="form-control" alt="differentlyabledperson" name="differentlyabledperson" id="edit_differentlyabledperson">
                        </div>  
                    </div>
                   <div class="row">  
                         <div class="col-4">
                            <label>Relationship to Head</label>
                            <input type="text" class="form-control" alt="relationtohead" name="relationtohead" id="edit_relationtohead">
                        </div>
                         <div class="col-4">
                            <label>Marital Status:</label>
                            <select type="text" class="form-control"  name="maritalstatus" required="" id="edit_maritalstatus">
                             <option id="edit_maritalstatus" hidden></option>

                               <!-- <option value="" disabled="" disabled="" selected="true">--Select Marital Status--</option> -->
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widow/er">Widow/er</option>
                                <option value="Anulled">Anulled</option>
                                <option value="Legally Separated">Legally Separated</option>
                            </select>
                        </div>
                         <div class="col-4">
                            <label>Blood Type:</label>
                            <input type="text" class="form-control" alt="bloodtype" name="bloodtype" id="edit_bloodtype">
                        </div>  
                    </div>

                      <div class="row">  
                         <div class="col-4">
                            <label>Civil Status:</label>
                              <select type="text" class="form-control" name="civilstatus" required="" id="edit_civilstatus">
                                <option id="edit_civilstatus" hidden></option>
                               <!-- <option value="" disabled="" disabled="" selected="true">--Select Civil Status--</option> -->
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Div-orced">Div-orced</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Legally Separated">Legally Separated</option>
                            </select>
                        </div>
                          <div class="col-4">
                            <label>Occupation:</label>
                            <input type="text" class="form-control" alt="occupation" name="occupation" id="edit_occupation">
                        </div> 
                         <div class="col-4">
                            <label>Monthly Income:</label>
                            <input type="text" class="form-control" alt="monthlyincome" name="monthlyincome" id="edit_monthlyincome">
                        </div>
 
                    </div>

                      <div class="row">  
                          <div class="col-4">
                            <label>Household #:</label>
                            <input type="text" class="form-control" alt="householdnum" name="householdnum" id="edit_householdnum">
                        </div>
                         <div class="col-4">
                            <label>Length of Stay:(In months)</label>
                            <input type="text" class="form-control" alt="lengthofstay" name="lengthofstay" id="edit_lengthofstay">
                        </div>

                         <div class="col-4">
                            <label>Religion:</label>
                            <input type="text" class="form-control" alt="religion" name="religion" required="" id="edit_religion">
                        </div>  
                    </div>

                      <div class="row">  
                         <div class="col-3">
                            <label>Nationality:</label>
                            <input type="text" class="form-control" alt="nationality" name="nationality"  required="" id="edit_nationality">
                        </div>
                         <div class="col-3">
                            <label>Gender:</label>
                           <select type="text" class="form-control" name="gender" required="" id="edit_gender">
                            <option id="edit_gender" hidden></option>
                               <!-- <option value="" disabled="" disabled="" selected="true">--Select Gender--</option> -->
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                       <div class="col-3">
                            <label>Skills:</label>
                            <input type="text" class="form-control" alt="skills" name="skills" id="edit_skills">
                        </div>
                         <div class="col-3">
                            <label>IgpitID:</label>
                            <input type="text" class="form-control" alt="igpitID" name="igpitID" id="edit_igpitID">
                        </div>
   
                    </div>

                   <div class="row"> 
                         <div class="col-4">
                            <label>Philhealth #:</label>
                            <input type="text" class="form-control" alt="philhealthNo" name="philhealthNo" id="edit_philhealthNo">
                        </div> 
                         <div class="col-4">
                            <label>Educational Attainment:</label>
                            <input type="text" class="form-control" alt="highestEducationAttainment" name="highestEducationAttainment" id="edit_highestEducationAttainment">
                        </div>
                         <div class="col-4">
                            <label>Land Ownership Status:</label>
                            <input type="text" class="form-control" alt="landOwnershipStatus" name="landOwnershipStatus" id="edit_landOwnershipStatus">
                        </div>  
                    </div>
                     <div class="row">  
                         <div class="col-4">
                            <label>House Ownership Status: </label>
                            <input type="text" class="form-control" alt="houseOwnershipStatus" name="houseOwnershipStatus" id="edit_houseOwnershipStatus">
                        </div>
                         <div class="col-4">
                            <label>Dwelling Type:</label>
                            <input type="text" class="form-control" alt="dwellingtype" name="dwellingtype" id="edit_dwellingtype">
                        </div>
                         <div class="col-4">
                            <label>Water Usage:</label>
                            <input type="text" class="form-control" alt="waterUsage" name="waterUsage" id="edit_waterUsage">
                        </div>  
                    </div>


                      <div class="row">  
                         <div class="col-4">
                            <label>Lightning Facilities: </label>
                            <input type="text" class="form-control" alt="lightningFacilities" name="lightningFacilities" id="edit_lightningFacilities">
                        </div>
                         <div class="col-4">
                            <label>Sanitary Toilet:</label>
                            <input type="text" class="form-control" alt="sanitaryToilet" name="sanitaryToilet" id="edit_sanitaryToilet">
                        </div>
                         <div class="col-4">
                            <label>Former Address:</label>
                            <input type="text" class="form-control" alt="formerAddress" name="formerAddress" id="edit_formerAddress">
                        </div>  
                    </div>
                     <div class="row">  
                         <div class="col-4">
                            <label>remarks: </label>
                            <input type="text" class="form-control" alt="remarks" name="remarks" id="edit_remarks">
                        </div>
<!--                          <div class="col-3">
                            <label>image:</label>
                            <input type="file" class="form-control" name="image" accept=".jpg, .JPEG, .png, .gif" value="<?= ucfirst(htmlentities($rcdents['image'])); ?>">
                            <p style="font-size: 10px;font-style: italic;font-weight: bold;color: red"><?= ucfirst(htmlentities(substr($rcdents['image'],27))); ?></p>
                        </div> -->
                         <div class="col-4">
                            <label>Username:</label>
                            <input type="text" class="form-control" alt="username" name="username" id="edit_username">
                        </div> 
                         <div class="col-4">
                            <label>Password:</label>
                            <input type="password" class="form-control" alt="password" name="password" id="edit_password">
                        </div> 
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" class="form-control" alt="user_name" name="user" value="<?php echo $f_name;?>">
                <input type="hidden" name="id" id="edit_id">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="edit-r">Update</button>
            </div>
            </form>
         </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let btn = document.querySelector('#edit-r');
        btn.addEventListener('click', () => {


            const lname = document.querySelector('input[alt=lname]').value;
            const fname = document.querySelector('input[alt=fname]').value;
            const mname = document.querySelector('input[alt=mname]').value;
            const bdate = document.querySelector('input[alt=bdate]').value;
            const bplace = document.querySelector('input[alt=bplace]').value;
            const age = document.querySelector('input[alt=age]').value;
            const barangay = document.querySelector('input[alt=barangay]').value;
            const zone = document.querySelector('input[alt=zone]').value;
            const totalhousehold = document.querySelector('input[alt=totalhousehold]').value;
            const differentlyabledperson = document.querySelector('input[alt=differentlyabledperson]').value;
            const relationtohead = document.querySelector('input[alt=relationtohead]').value;
            const maritalstatus = $('#edit_maritalstatus option:selected').val();
            const bloodtype = document.querySelector('input[alt=bloodtype]').value;
            const civilstatus = $('#edit_civilstatus option:selected').val();
            const occupation = document.querySelector('input[alt=occupation]').value;
            const monthlyincome = document.querySelector('input[alt=monthlyincome]').value;
            const householdnum = document.querySelector('input[alt=householdnum]').value;
            const lengthofstay = document.querySelector('input[alt=lengthofstay]').value;
            const religion = document.querySelector('input[alt=religion]').value;
            const nationality = document.querySelector('input[alt=nationality]').value;
            const gender = $('#edit_gender option:selected').val();
            const skills = document.querySelector('input[alt=skills]').value;
            const igpitID = document.querySelector('input[alt=igpitID]').value;
            const philhealthNo = document.querySelector('input[alt=philhealthNo]').value;
            const highestEducationAttainment = document.querySelector('input[alt=highestEducationAttainment]').value;
            const landOwnershipStatus = document.querySelector('input[alt=landOwnershipStatus]').value;
            const houseOwnershipStatus = document.querySelector('input[alt=houseOwnershipStatus]').value;
            const dwellingtype = document.querySelector('input[alt=dwellingtype]').value;
            const waterUsage = document.querySelector('input[alt=waterUsage]').value;
            const lightningFacilities = document.querySelector('input[alt=lightningFacilities]').value;
            const sanitaryToilet = document.querySelector('input[alt=sanitaryToilet]').value;
            const formerAddress = document.querySelector('input[alt=formerAddress]').value;
            const remarks = document.querySelector('input[alt=remarks]').value;
            const username = document.querySelector('input[alt=username]').value;
            const password = document.querySelector('input[alt=password]').value;  
            const user_name = document.querySelector('input[alt=user_name]').value;      
            const id = document.querySelector('input[id=edit_id]').value;

           // var delay = 100;
            var data = new FormData(this.form);

            data.append('lname', lname);
            data.append('fname', fname);
            data.append('mname', mname);
            data.append('bdate', bdate);
            data.append('bplace', bplace);
            data.append('age', age);
            data.append('barangay', barangay);
            data.append('zone', zone);
            data.append('totalhousehold', totalhousehold);
            data.append('differentlyabledperson', differentlyabledperson);
            data.append('relationtohead', relationtohead);
            data.append('maritalstatus', maritalstatus);
            data.append('bloodtype', bloodtype);
            data.append('civilstatus', civilstatus);
            data.append('occupation', occupation);
            data.append('monthlyincome', monthlyincome);
            data.append('householdnum', householdnum);
            data.append('lengthofstay', lengthofstay);
            data.append('religion', religion);
            data.append('nationality', nationality);
            data.append('gender', gender);
            data.append('skills', skills);
            data.append('igpitID', igpitID);
            data.append('philhealthNo', philhealthNo);
            data.append('highestEducationAttainment', highestEducationAttainment);
            data.append('landOwnershipStatus', landOwnershipStatus);
            data.append('houseOwnershipStatus', houseOwnershipStatus);
            data.append('dwellingtype', dwellingtype);
            data.append('waterUsage', waterUsage);
            data.append('lightningFacilities', lightningFacilities);
            data.append('sanitaryToilet', sanitaryToilet);
            data.append('formerAddress', formerAddress);
            data.append('remarks', remarks);
            data.append('username', username);
            data.append('password', password);
            data.append('user_name', user_name);
            data.append('id', id);

            $.ajax({
                url: 'controllers/edit-resident.php',
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
                        $('#msgx5').html(data);
                //  setTimeout(location.reload.bind(location), 200);

                },
                error: function(data) {
                    console.log("Failed");
                }
            });

        });
    });
</script>

