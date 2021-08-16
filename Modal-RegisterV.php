<?php include_once 'header.php';
include_once 'Xconnection.php';
?>

<style>
    /* .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        margin-top: 30%;
    }*/
</style>
<!-- REGISTER FORM HOMELESS MODAL -->
<div class="modal fade" id="regvolform" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerformLabel"><b>FFG volunteer registration</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Formbuilder Form--->
                <form id="insert_form" action="Xvolunteer.php" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler">
                    <!----  <input type="hidden" name="email" data-form-email="true" value="6kZCGZP8OMDPtDeeZmbUHeHmcL7xSLOPAWLWuIKYko2plkVZmXo2mIt0mCzSryUfoQ7ioO2nvPlc9AFmRWT/yUbere5n0WigAd2SWPGSAS9kqyCutyGIYN+e2BdP++BE"> -->
                    <div class="row">
                        <div hidden="hidden" id="success" data-form-alert="" class="alert alert-success col-12">Donor
                            registration success to save</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {

                            echo '<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">' . $_SESSION['success'] . '</div>';
                            unset($_SESSION['success']);
                        }
                        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {

                            echo '<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">' . $_SESSION['session'] . '</div>';
                            unset($_SESSION['status']);
                        }
                        ?>
                    </div>
                    <div class="dragArea row">

                        <div class="col-md-12  form-group">
                            <label class="form-control-label  ">Full Name * :</label>
                            <input type="text" name="name" data-form-field="Name" required="required" class="form-control " id="name">
                        </div>
                        <div class="col-md-6  form-group">
                            <label class="form-control-label  ">
                                Phone Number</label>
                            <input type="number" name="phone" data-form-field="Name" class="form-control " id="Phone">
                        </div>

                        <div class="col-md-6  form-group">
                            <label class="form-control-label  ">
                                Email Address : *</label>
                            <input type="email" name="email" data-form-field="email" class="form-control" id="email">
                        </div>

                        <div class="col-md-12  form-group">
                            <label for="image-form1-h" class="form-control-label">Address *
                                :</label>
                            <input type="text" name="address1" placeholder="Street Address" required="required" class="form-control ">
                        </div>
                        <div class="col-md-12  form-group">
                            <input type="text" name="address2" placeholder="Street Address Line 2" class="form-control ">
                        </div>
                        <div class="col-md-6  form-group">
                            <input type="text" name="city" placeholder="City" required="required" class="form-control ">
                        </div>
                        <div class="col-md-6  form-group">
                            <input type="text" name="state" placeholder="State / Province" required="required" class="form-control ">
                        </div>

                        <div class="col-md-6  form-group">
                            <input type="text" name="country" placeholder="Country" required="required" class="form-control ">
                        </div>
                        <div class="col-md-4  form-group">
                            <input type="number" name="zip" placeholder="Postal / Zip Code" required="required" class="form-control display-6">
                        </div> &nbsp; &nbsp;


                        <input type="hidden" name="id_homeless" id="id_homeless" />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" value="Insert" id="RegisterD" class="btn btn-primary" name="RegisterD">Save</button>
                        </div>
                    </div>
                </form>
                <!---Formbuilder Form--->
            </div>

        </div>
    </div>
</div> <!-- END REGISTER FORM HOMELESS MODAL -->


<?php
include_once 'script.php';
?>