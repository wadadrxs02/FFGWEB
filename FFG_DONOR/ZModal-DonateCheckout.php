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

<style>
    .form-control-sm {
        height: 37px !important;
    }
</style>

<!-- LOGIN FORM HOMELESS MODAL -->
<div class="modal fade" id="checkoutform" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginformLabel"> Checkout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!---Formbuilder Form--->
                <form id="insert_form" action="X.php" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler ">
                    <!----  <input type="hidden" name="email" data-form-email="true" value="6kZCGZP8OMDPtDeeZmbUHeHmcL7xSLOPAWLWuIKYko2plkVZmXo2mIt0mCzSryUfoQ7ioO2nvPlc9AFmRWT/yUbere5n0WigAd2SWPGSAS9kqyCutyGIYN+e2BdP++BE"> -->

                    <div div class="dragArea row">
                        <?php
                        $display = $connection->query("SELECT * FROM donor WHERE id_donor='" . $_SESSION['id_donor'] . "'");
                        $row = $display->fetch_array();
                        ?>

                        <div class="col-md-12  form-group">
                            <label class="form-control-label  ">
                                Name : </label>
                            <input type="text" name="name" data-form-field="name" value="<?php echo $row['name']; ?>" class="form-control form-control-sm " id="name" readonly="readonly">
                        </div>

                        <div class="col-md-12  form-group">
                            <label class="form-control-label  ">
                                phone number : </label>
                            <input type="number" name="phone" data-form-field="phone" value="<?php echo $row['phone']; ?>" class="form-control form-control-sm " id="phone" readonly="readonly">
                        </div>

                        <div class="col-md-12  form-group">
                            <label class="form-control-label  ">
                                Email : </label>
                            <input type="email" name="email" data-form-field="email" value="<?php $email ?>" class="form-control form-control-sm " id="email" readonly="readonly">
                        </div>

                        <div class="col-md-12  form-group">
                            <label class="form-control-label  ">
                                Amount Donate </label>
                            <input type="number" name="amount" data-form-field="amount" value="<?php echo $_GET["amount"]; ?>" class="form-control form-control-sm " id="amount" readonly="readonly">
                        </div>

                        <input type="hidden" name="bank" value="<?php echo $_GET["bank"]; ?>" data-form-field="bank" class="form-control form-control-sm " id="bank" readonly="readonly">


                        <input type="hidden" name="id_donor" id="id_donor" />
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