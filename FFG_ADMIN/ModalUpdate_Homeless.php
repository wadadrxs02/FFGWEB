<!-- REGISTER FORM HOMELESS MODAL -->
<?php
$sql = 'SELECT * FROM homeless';
$result = mysqli_query($connection, $sql);
$i = 1;
while ($row = mysqli_fetch_array($result)) {
    // $race=explode(",",$row['race']);
    // $medCondition=explode(",",$row['medCondition']); untuk checkbox tick from database
?>

<div class="modal fade" id="EditFormModal<?php echo $row['id_homeless']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerformLabel"> Edit for Homeless @ Urban Poor </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Formbuilder Form--->
                <form id="insert_form" action="XUpdatehomeless.php" method="POST" enctype="multipart/form-data"
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
                            <img src="imghomeless/<?php echo $row['image']; ?>" onerror="this.src='img/about-img/target.png';" style="width:150px; height:150px;   
                            border-radius: 25px; border: 2px solid #56c596; padding: 10px; width: 180px; height: 180px;"> </td>

                        </div>

                        <div class="col-md-6  form-group">
                            <label for="name-form1-h" class="form-control-label mbr-fonts-style display-7">Name</label>
                            <input type="text" name="name" data-form-field="Name" required="required"
                                class="form-control display-7" id="name" value="<?php echo $row['name']; ?>">
                        </div>
                        <div class="col-md-6  form-group">
                            <label for="name-form1-h" class="form-control-label mbr-fonts-style display-7">IC
                                Number</label>
                            <input type="number" name="icnumber" data-form-field="Name" required="required"
                                class="form-control display-7" id="icnumber" value="<?php echo $row['icnumber']; ?>">
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="phone-form1-h" class="form-control-label mbr-fonts-style display-7">Phone
                                No</label>
                            <input type="number" name="phoneNum" data-form-field="Phone" class="form-control display-7"
                                id="phoneNum" value="<?php echo $row['phoneNum']; ?>">
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="gender-form1-h"
                                class="form-control-label mbr-fonts-style display-7">Gender</label>
                            <select name="gender" class="browser-default custom-select" class="form-control display-7"
                                id="gender">
                                <option Selected value=""><?php echo $row['gender']; ?></option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other

                                </option>
                            </select>
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="birthday-form1-h" class="form-control-label mbr-fonts-style display-7">Date
                                of Birth</label>
                            <input type="date" name="dob" data-form-field="birth Date" class="form-control display-7"
                                id="date" value="<?php echo $row['dob']; ?>">
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="race-form1-h" class="form-control-label mbr-fonts-style">Race
                            </label>
                            <input type="text" name="race" class="form-control" id="race"
                                value="<?php echo $row['race']; ?>">
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="location-form1-h"
                                class="form-control-label mbr-fonts-style display-6">Location</label>
                            <input type="text" name="location" class="form-control display-7" id="location"
                                value="<?php echo $row['location']; ?>">
                        </div>

                        <div class="col-md-6 form-group ">
                            <label for="disease-form1-h" class="form-control-label mbr-fonts-style display-7">Medical
                                Condition</label>
                            <input type="text" name="medCondition" class="form-control display-7" id="medCondition"
                                value="<?php echo $row['medCondition']; ?>">
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="datereg-form1-h" class="form-control-label mbr-fonts-style display-7">Date
                            Registration</label>
                            <input type="date" name="datereg" data-form-field="Date Registration"
                                class="form-control display-7" id="today2" value="<?php echo $row['datereg']; ?>" readonly>
                        </div>

                        <script>
                        document.querySelector("#today2").valueAsDate = new Date();
                        </script>

                        <div class="col-md-6  form-group">

                            <label for="image-form1-h"
                                class="form-control-label mbr-fonts-style display-7">Image</label>
                            <input type="hidden" name="size" value="1000000">
                            <input type="file" name="image" id="image" value="<?php echo $row['image']; ?>">
                        </div>


                        <input type="hidden" name="id_homeless" class="form-control display-7"
                                value="<?php echo $row['id_homeless']; ?>">
                      
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" value="submit" id="submit" class="btn btn-success"
                                name="submit">Save</button>
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

<!-- Script for header table No sort-->
<script type="text/javascript">
$(document).ready(function() {
    $('#Tabledata').DataTable();
});


$('#Tabledata').dataTable({
    "order": [],
    "columnDefs": [{
        "targets": 'no-sort',
        "orderable": false,
    }]
});
</script>
<!-- END Script for header table No sort-->

<!--javascript For uploading image-->
<script>
$(document).ready(function() {
    $('#insert').click(function() {
        var image_name = $('#image').val();
        if (image_name == '') {
            alert("Please Select Image");
            return false;
        } else {
            var extension = $('#image').val().split('.').pop().toLowerCase();
            if (jQuery.in_array(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                alert('Invalid Image File');
                $('#image').val('');
                return false;
            }
        }
    });
});
</script>
<!--End of javascript For uploading image-->
