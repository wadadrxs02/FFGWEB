<!-- REGISTER FORM HOMELESS MODAL -->
<?php
$sql = 'SELECT * FROM donor';
$result = mysqli_query($connection, $sql);
$i = 1;
while ($row = mysqli_fetch_array($result)) {

?>

    <div class="modal fade" id="ModalView_Donor<?php echo $row['id_donor']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerformLabel"> View Donors </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!---Formbuilder Form--->
                    <form id="insert_form" action="" method="" enctype="multipart/form-data" class="mbr-form form-with-styler">
                        <!----  <input type="hidden" name="email" data-form-email="true" value="6kZCGZP8OMDPtDeeZmbUHeHmcL7xSLOPAWLWuIKYko2plkVZmXo2mIt0mCzSryUfoQ7ioO2nvPlc9AFmRWT/yUbere5n0WigAd2SWPGSAS9kqyCutyGIYN+e2BdP++BE"> -->
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Donor
                                registration success to save</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">
<!--
                            <div class="col-md-12  form-group" style="text-align:center">
                                <img alt="*Image not found" onerror="this.onerror=null;this.src='img/about-img/user.png';" src="ImgDonor/<?php echo $row['']; ?>" style="width:150px; height:150px; border-radius: 25px; border: 2px solid #56c596 ; padding: 10px; width: 180px; height: 180px;"> </td>

                            </div>
-->

                            <div style="padding-left: 15px ; padding-right: 30px"><label class="form-control-label">Name : </label></div>
                            <div class="col-md-10 form-group">
                                <input type="text" class="form-control" name="name" required="required" value="<?php echo $row['name']; ?>" placeholder="name" readonly>
                            </div>

                            <div style="padding-left: 15px ; padding-right: 3px"><label class="form-control-label"> Phone No : </label></div>
                            <div class="col-md-3 form-group">
                                <input type="number" class="form-control" name="phone" required="" value="<?php echo $row['phone']; ?>" placeholder="Phone No" readonly>
                            </div>

                            <div style="padding-left: 10px"><label class="form-control-label">E-mail : </label></div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" placeholder="Email" readonly>
                            </div>

                            <div style="padding-left: 15px ; padding-right: 15px"><label class="form-control-label">Address : </label></div>
                            <div class="col-md-10 form-group">
                                <input type="" class="form-control" name="address1" required="" value="<?php echo $row['address1']; ?>" placeholder="Street Address" readonly>
                            </div>

                            <div style="padding-left: 15px ; padding-right: 15px"><label style="color: white" class="form-control-label">Address : </label></div>
                            <div class="col-md-10 form-group">
                                <input type="text" class="form-control" name="address2" value="<?php echo $row['address2']; ?>" placeholder="Street Address Line 2" readonly>
                            </div>

                            <div style="padding-left: 15px ; padding-right: 55px"><label class="form-control-label">Zip : </label></div>
                            <div class="col-md-4 form-group">
                                <input type="number" class="form-control" name="zip" required="" value="<?php echo $row['zip']; ?>" placeholder="Postal / Zip Code" readonly>
                            </div>

                            <div style="padding-left: 15px ; padding-right: 15px"><label class="form-control-label">City : </label></div>
                            <div class="col-md-5 form-group">
                                <input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>" required="required" placeholder="City" readonly>
                            </div>

                            <div style="padding-left: 15px ; padding-right: 35px"><label class="form-control-label">State : </label></div>
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control" name="state" value="<?php echo $row['state']; ?>" placeholder="State / Province" readonly>
                            </div>
                            <div style="padding-left: 0px"><label class="form-control-label">Country : </label></div>
                            <div class="col-md-5 form-group">
                                <input type="text" class="form-control" name="country" value="<?php echo $row['country']; ?>" placeholder="Country" readonly>
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