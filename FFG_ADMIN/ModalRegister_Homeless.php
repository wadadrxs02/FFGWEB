<!-- REGISTER FORM HOMELESS MODAL -->
<div class="modal fade" id="registerform" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerformLabel"> Registration for Homeless @ Urban Poor </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Formbuilder Form--->
                <form id="insert_form" action="Xreghomeless.php" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler">
                    <!----  <input type="hidden" name="email" data-form-email="true" value="6kZCGZP8OMDPtDeeZmbUHeHmcL7xSLOPAWLWuIKYko2plkVZmXo2mIt0mCzSryUfoQ7ioO2nvPlc9AFmRWT/yUbere5n0WigAd2SWPGSAS9kqyCutyGIYN+e2BdP++BE"> -->
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Homeless
                            registration success to save</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">

                        <div class="col-md-12  form-group">
                            <label for="name-form1-h" class="form-control-label mbr-fonts-style ">Name</label>
                            <input type="text" name="name" data-form-field="Name" required="required" class="form-control " id="name">
                        </div>
                        <div class="col-md-12  form-group">
                            <label for="name-form1-h" class="form-control-label mbr-fonts-style ">IC
                                Number</label>
                            <input type="number" name="icnumber" data-form-field="Name" class="form-control " id="icnumber">
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="phone-form1-h" class="form-control-label mbr-fonts-style ">Phone
                                No</label>
                            <input type="number" name="phoneNum" data-form-field="Phone" class="form-control" id="phoneNum">
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="gender-form1-h" class="form-control-label mbr-fonts-style ">Gender</label>
                            <select name="gender" class="browser-default custom-select" class="form-control " id="gender">
                                <option Selected value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="birthday-form1-h" class="form-control-label mbr-fonts-style ">Date
                                of Birth</label>
                            <input type="date" name="dob" data-form-field="birth Date" class="form-control " id="date">
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="race-form1-h" class="form-control-label mbr-fonts-style ">Race
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="race" id="rRace" value="Malay">
                                <label class="form-check-label" for="rMalay">Malay
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </label>

                                <input class="form-check-input" type="checkbox" name="race" id="rRace" value="Indian">
                                <label class="form-check-label" for="rIndian">Indian</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input " type="checkbox" name="race" id="rRace" value="Chinese">
                                <label class="form-check-label" for="rChinese">Chinese
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp; &nbsp;&nbsp;</label>

                                <input class="form-check-input  " type="checkbox" name="race" id="rRace4" value="Other" onClick="Function()" onchange="document.getElementById('race4').disabled = !this.checked;">
                                <label class="form-check-label">Other&nbsp;</label>
                                <input id="race4" type="text" name="race" class="form-control form-control-sm" style="width:150px; background-color: #ffffff; border-color: #ffffff; display: inline;" placeholder="ex: Latino" disabled>

                            </div>

                            <script type="text/javascript">
                                function Function() {
                                    var x = document.getElementById("rRace4");
                                    var y = document.getElementById("race4");
                                    if (x.checked == true) {
                                        y.style.borderBottomColor = "#999999";
                                        y.style.fontcolor = "#bababa";
                                    } else {
                                        y.style.borderBottomColor = "#ffffff";
                                        y.style.fontcolor = "#bababa";
                                    }
                                }
                            </script>
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="location-form1-h" class="form-control-label mbr-fonts-style display-6">Location</label>
                            <input type="text" name="location" class="form-control " id="location">
                        </div>

                        <div class="col-md-6 form-group ">
                            <label for="disease-form1-h" class="form-control-label mbr-fonts-style ">Medical
                                Condition</label>

                            <div class="form-check ">
                                <input class="form-check-input " type="checkbox" id="health" value="Good" name="medCondition">
                                <label class="form-check-label mbr-fonts-style " for="inlineCheckbox1">Good</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input " type="checkbox" id="health1" value="other :" onClick="myFunction()" onClick="ChangePlaceHolderColor()" onchange="document.getElementById('un').disabled = !this.checked;">
                                <label class="form-check-label mbr-fonts-style " for="inlineCheckbox2">Other
                                    &nbsp;</label>
                                <input id="un" type="text" name="medCondition" class="form-control form-control-sm " style="width: 200px; background-color: #ffffff; border-color: #ffffff; display: inline;" placeholder="ex: heart disease" disabled>
                            </div>

                            <script type="text/javascript">
                                function myFunction() {
                                    var x = document.getElementById("health1");
                                    var y = document.getElementById("un");
                                    if (x.checked == true) {

                                        y.style.borderBottomColor = "#999999";
                                        y.style.fontcolor = "#bababa";
                                    } else {
                                        y.style.borderBottomColor = "#ffffff";
                                        y.style.fontcolor = "#bababa";
                                    }
                                }
                            </script>
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="datereg-form1-h" class="form-control-label mbr-fonts-style ">Date
                                Registration</label>
                            <input type="date" name="datereg" class="form-control " id="today2">
                        </div>

                        <script>
                            document.querySelector("#today2").valueAsDate = new Date();
                        </script>

                        <div class="col-md-6  form-group">
                            <label for="image-form1-h" class="form-control-label mbr-fonts-style ">Image</label>
                            <input type="hidden" name="size" value="1000000">
                            <input type="file" name="image" id="image">
                        </div>
                        <input type="hidden" name="id_homeless" id="id_homeless" />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" value="Insert" id="insert" class="btn btn-primary" name="submit">Save</button>
                        </div>
                    </div>
                </form>
                <!---Formbuilder Form--->
            </div>
        </div>
    </div>
</div> <!-- END REGISTER FORM HOMELESS MODAL -->