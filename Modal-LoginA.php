<?php
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


<!-- LOGIN FORM HOMELESS MODAL -->
<div class="modal fade" id="loginformAdmin" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginformLabel"> FFG Admin login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Formbuilder Form--->
                <form id="insert_form" action="XloginAdmin.php" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler ">
                    <!----  <input type="hidden" name="email" data-form-email="true" value="6kZCGZP8OMDPtDeeZmbUHeHmcL7xSLOPAWLWuIKYko2plkVZmXo2mIt0mCzSryUfoQ7ioO2nvPlc9AFmRWT/yUbere5n0WigAd2SWPGSAS9kqyCutyGIYN+e2BdP++BE"> -->

                    <div class="dragArea row">

                        <div class="col-md-12  form-group">
                            <label class="form-control-label  ">
                                Email Address : *</label>
                            <input type="email" name="email" data-form-field="email" class="form-control" id="email" required="required">
                        </div>


                        <div class="col-md-12  form-group">
                            <label for="image-form1-h" class="form-control-label  ">Password
                                :</label>
                            <input type="password" name="password" min="8" class="form-control" required="required" class="form-control ">
                        </div>

                        <input type="hidden" name="id" id="id" />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" value="Insert" class="btn btn-primary" name="submit">SIGN IN</button>
                        </div>
                    </div>
                </form>
                <!---Formbuilder Form--->
            </div>

        </div>
    </div>
</div> <!-- END LOGIN FORM HOMELESS MODAL -->