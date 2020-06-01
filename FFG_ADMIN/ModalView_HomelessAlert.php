<!-- REGISTER FORM HOMELESS MODAL -->
<?php
$sql = 'SELECT * FROM alerthomeless';
$result = mysqli_query($connection, $sql);
$i = 1;
while ($row = mysqli_fetch_array($result)) {
  
    ?>

<div class="modal fade" id="ModalView_HomelessAlert<?php echo $row['id_alert']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerformLabel"> View Homeless @ Urban Poor </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Formbuilder Form--->
                <form id="insert_form" action="" method="" enctype="multipart/form-data"
                    class="mbr-form form-with-styler">
                    <!----  <input type="hidden" name="email" data-form-email="true" value="6kZCGZP8OMDPtDeeZmbUHeHmcL7xSLOPAWLWuIKYko2plkVZmXo2mIt0mCzSryUfoQ7ioO2nvPlc9AFmRWT/yUbere5n0WigAd2SWPGSAS9kqyCutyGIYN+e2BdP++BE"> -->
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Homeless
                            registration success to save</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">

                        <div class="col-md-12  form-group" style="text-align:center">
                            <img src="ImgHomelessAlert/<?php echo $row['image']; ?>" style="width:150px; height:150px;   
                            border-radius: 25px; border: 2px solid #56c596 ; padding: 10px; width: 180px; height: 180px;"> </td>

                        </div>

                        <div class="col-md-6  form-group">
                            <label for="name-form1-h" class="form-control-label mbr-fonts-style ">Name</label>
                            <input type="text" name="name" required="required"
                                class="form-control " id="name" value="<?php echo $row['name']; ?>">
                        </div>
                        <div class="col-md-6  form-group">
                            <label for="name-form1-h" class="form-control-label mbr-fonts-style ">IC
                                Number</label>
                            <input type="text" name="desc" required="required"
                                class="form-control " id="desc" value="<?php echo $row['desc']; ?>">
                        </div>

                       

                        <div class="col-md-6  form-group">
                            <label for="gender-form1-h"
                                class="form-control-label mbr-fonts-style ">Gender</label>
                            <select name="gender" class="browser-default custom-select" class="form-control "
                                id="gender">
                                <option Selected value=""><?php echo $row['gender']; ?></option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other

                                </option>
                            </select>
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="race-form1-h" class="form-control-label mbr-fonts-style">Age
                            </label>
                            <input type="text" name="age" class="form-control" id="age"
                                value="<?php echo $row['age']; ?>">
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="location-form1-h"
                                class="form-control-label mbr-fonts-style ">Location</label>
                            <input type="text" name="location" class="form-control " id="location"
                                value="<?php echo $row['streetAdd']; ?>">
                        </div>

                        <div class="col-md-6 form-group ">
                            <label for="disease-form1-h" class="form-control-label mbr-fonts-style ">
                                Time</label>
                            <input type="text" name="time" class="form-control" id="time"
                                value="<?php echo $row['time']; ?>">
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="datereg-form1-h" class="form-control-label mbr-fonts-style ">Date
                                Registration</label>
                            <input type="date" name="date_found" data-form-field="Date Registration"
                                class="form-control " id="today2" value="<?php echo $row['date_found']; ?>">
                        </div>

                        <input type="hidden" name="id_alert" id="id_alert" />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
                <!---Formbuilder Form--->
            </div>

        </div>
    </div>
</div> <!-- END REGISTER FORM HOMELESS MODAL -->
<?php
$i++;
}
?>


