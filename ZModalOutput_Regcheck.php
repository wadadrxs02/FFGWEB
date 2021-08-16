<!-- REGISTER FORM HOMELESS MODAL -->
<?php
$sql = 'SELECT * FROM homeless';
$result = mysqli_query($connection, $sql);
$i = 1;
while ($row = mysqli_fetch_array($result)) {
?>

    <div class="modal fade" id="EditFormModal<?php echo $row['icnumber']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerformLabel"> Profile Homeless @ Urban Poor </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!---Formbuilder Form--->
                    <form id="insert_form" action="" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler">
                        <div class="dragArea row">
                            <?php
                            if (isset($_POST['btnsemak'])) { //check if form was submitted
                                $input = $_POST['icnum']; //get input text
                                $message = "<p>You searched for: " . $icnum . "</p>";
                                echo $message . "<br><br>";
                            }
                            $sql = "SELECT * FROM homeless WHERE name LIKE '%$input%'";
                            while ($row = $result->fetch_array()) {
                            ?>
                            
                            <div class="col-md-6  form-group">
                                <label for="name-form1-h" class="form-control-label mbr-fonts-style display-7"><?php echo $message . "<br><br>"; ?></label>
                                <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name" value="<?php echo $row['name']; ?>">
                            </div>
                            <div class="col-md-6  form-group">
                                <label for="name-form1-h" class="form-control-label mbr-fonts-style display-7">Name</label>
                                <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name" value="<?php echo $row['name']; ?>">
                            </div>
                            <div class="col-md-6  form-group">
                                <label for="name-form1-h" class="form-control-label mbr-fonts-style display-7">IC
                                    Number</label>
                                <input type="number" name="icnumber" data-form-field="Name" required="required" class="form-control display-7" id="icnumber" value="<?php echo $row['icnumber']; ?>">
                            </div>

                            <div class="col-md-6  form-group">
                                <label for="phone-form1-h" class="form-control-label mbr-fonts-style display-7">Phone
                                    No</label>
                                <input type="number" name="phoneNum" data-form-field="Phone" class="form-control display-7" id="phoneNum" value="<?php echo $row['phoneNum']; ?>">
                            </div>

                            <div class="col-md-6  form-group">
                                <label for="gender-form1-h" class="form-control-label mbr-fonts-style display-7">Gender</label>
                                <select name="gender" class="browser-default custom-select" class="form-control display-7" id="gender">
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
                                <input type="date" name="dob" data-form-field="birth Date" class="form-control display-7" id="date" value="<?php echo $row['dob']; ?>">
                            </div>

                            <div class="col-md-6  form-group">
                                <label for="race-form1-h" class="form-control-label mbr-fonts-style">Race
                                </label>
                                <input type="text" name="race" class="form-control" id="race" value="<?php echo $row['race']; ?>">
                            </div>

                            <div class="col-md-6  form-group">
                                <label for="location-form1-h" class="form-control-label mbr-fonts-style display-6">Location</label>
                                <input type="text" name="location" class="form-control display-7" id="location" value="<?php echo $row['location']; ?>">
                            </div>

                            <div class="col-md-6 form-group ">
                                <label for="disease-form1-h" class="form-control-label mbr-fonts-style display-7">Medical
                                    Condition</label>
                                <input type="text" name="medCondition" class="form-control display-7" id="medCondition" value="<?php echo $row['medCondition']; ?>">
                            </div>

                            <div class="col-md-6  form-group">
                                <label for="datereg-form1-h" class="form-control-label mbr-fonts-style display-7">Date
                                    Registration</label>
                                <input type="date" name="datereg" data-form-field="Date Registration" class="form-control display-7" id="today2" value="<?php echo $row['datereg']; ?>" readonly>
                            </div>

                            <script>
                                document.querySelector("#today2").valueAsDate = new Date();
                            </script>

                            <input type="hidden" name="id_homeless" class="form-control display-7" value="<?php echo $row['id_homeless']; ?>">
                            <?php }?>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
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