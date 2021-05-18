<div class="modal fade" id="add-resident">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-user"></i> &nbsp;Add Resident</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST" enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <div class="row">
                      <div class="col-12">
                          <?php include 'controllers/add-resident.php';?>
                      </div>
                    </div>
                   <div class="row">  
                         <div class="col-4">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" name="lname"  required="">
                        </div>
                         <div class="col-4">
                            <label>First Name:</label>
                            <input type="text" class="form-control" name="fname" required="">
                        </div>
                         <div class="col-4">
                            <label>Middle Name:</label>
                            <input type="text" class="form-control" name="mname" >
                        </div>  
                    </div>

                     <div class="row">  
                         <div class="col-4">
                            <label>Birth Date:</label>
                            <input type="date" class="form-control" name="bdate" required="">
                        </div>
                         <div class="col-4">
                            <label>Birth Place:</label>
                            <input type="text" class="form-control" name="bplace" required="">
                        </div> 
                          <div class="col-4">
                            <label>Age:</label>
                            <input type="text" class="form-control" name="age"  required="">
                        </div> 
                    </div>

                     <div class="row">  
                          <div class="col-2">
                            <label>Barangay:</label>
                            <input type="text" class="form-control" name="barangay"  required="">
                        </div>
                          <div class="col-2">
                            <label>Zone #:</label>
                            <input type="text" class="form-control" name="zone" >
                        </div>
                         <div class="col-4">
                            <label>Total Household:</label>
                            <input type="text" class="form-control" name="totalhousehold">
                        </div>
                          <div class="col-4">
                            <label>Differently-abled Person :</label>
                            <input type="text" class="form-control" name="differentlyabledperson" >
                        </div>  
                    </div>
                   <div class="row">  
                         <div class="col-4">
                            <label>Relationship to Head</label>
                            <input type="text" class="form-control" name="relationtohead" >
                        </div>
                         <div class="col-4">
                            <label>Marital Status:</label>
                            <select type="text" class="form-control" name="maritalstatus" required="">
                               <option value="" disabled="" disabled="" selected="true">--Select Marital Status--</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widow/er">Widow/er</option>
                                <option value="Anulled">Anulled</option>
                                <option value="Legally Separated">Legally Separated</option>
                            </select>
                        </div>
                         <div class="col-4">
                            <label>Blood Type:</label>
                            <input type="text" class="form-control" name="bloodtype" >
                        </div>  
                    </div>

                      <div class="row">  
                         <div class="col-4">
                            <label>Civil Status:</label>
                              <select type="text" class="form-control" name="civilstatus" required="">
                               <option value="" disabled="" disabled="" selected="true">--Select Civil Status--</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Div-orced">Div-orced</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Legally Separated">Legally Separated</option>
                            </select>
                        </div>
                          <div class="col-4">
                            <label>Occupation:</label>
                            <input type="text" class="form-control" name="occupation" >
                        </div> 
                         <div class="col-4">
                            <label>Monthly Income:</label>
                            <input type="text" class="form-control" name="monthlyincome">
                        </div>
 
                    </div>

                      <div class="row">  
                          <div class="col-4">
                            <label>Household #:</label>
                            <input type="text" class="form-control" name="householdnum" >
                        </div>
                         <div class="col-4">
                            <label>Length of Stay:(In months)</label>
                            <input type="text" class="form-control" name="lengthofstay">
                        </div>

                         <div class="col-4">
                            <label>Religion:</label>
                            <input type="text" class="form-control" name="religion" required="">
                        </div>  
                    </div>

                      <div class="row">  
                         <div class="col-3">
                            <label>Nationality:</label>
                            <input type="text" class="form-control" name="nationality"  required="">
                        </div>
                         <div class="col-3">
                            <label>Gender:</label>
                           <select type="text" class="form-control" name="gender" required="">
                               <option value="" disabled="" disabled="" selected="true">--Select Gender--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                       <div class="col-3">
                            <label>Skills:</label>
                            <input type="text" class="form-control" name="skills" >
                        </div>
                         <div class="col-3">
                            <label>IgpitID:</label>
                            <input type="text" class="form-control" name="igpitID">
                        </div>
   
                    </div>

                   <div class="row"> 
                         <div class="col-4">
                            <label>Philhealth #:</label>
                            <input type="text" class="form-control" name="philhealthNo">
                        </div> 
                         <div class="col-4">
                            <label>Educational Attainment:</label>
                            <input type="text" class="form-control" name="highestEducationAttainment">
                        </div>
                         <div class="col-4">
                            <label>Land Ownership Status:</label>
                            <input type="text" class="form-control" name="landOwnershipStatus" >
                        </div>  
                    </div>
                     <div class="row">  
                         <div class="col-4">
                            <label>House Ownership Status: </label>
                            <input type="text" class="form-control" name="houseOwnershipStatus" >
                        </div>
                         <div class="col-4">
                            <label>Dwelling Type:</label>
                            <input type="text" class="form-control" name="dwellingtype">
                        </div>
                         <div class="col-4">
                            <label>Water Usage:</label>
                            <input type="text" class="form-control" name="waterUsage" >
                        </div>  
                    </div>


                      <div class="row">  
                         <div class="col-4">
                            <label>Lightning Facilities: </label>
                            <input type="text" class="form-control" name="lightningFacilities" >
                        </div>
                         <div class="col-4">
                            <label>Sanitary Toilet:</label>
                            <input type="text" class="form-control" name="sanitaryToilet" >
                        </div>
                         <div class="col-4">
                            <label>Former Address:</label>
                            <input type="text" class="form-control" name="formerAddress" >
                        </div>  
                    </div>
                     <div class="row">  
                         <div class="col-3">
                            <label>remarks: </label>
                            <input type="text" class="form-control" name="remarks" >
                        </div>
                         <div class="col-3">
                            <label>image:</label>
                            <input type="file" class="form-control" name="image" accept=".jpg, .JPEG, .png, .gif" >
                        </div>
                         <div class="col-3">
                            <label>Username:</label>
                            <input type="text" class="form-control" name="username" >
                        </div> 
                         <div class="col-3">
                            <label>Password:</label>
                            <input type="password" class="form-control" name="password" >
                        </div> 
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" class="form-control" name="user" value="<?php echo $f_name;?>">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="add-resident">Add Resident</button>
            </div>
                   </form>
         </div>
 
    </div>
</div>
