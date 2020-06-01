<!-- REGISTER FORM HOMELESS MODAL -->
<?php

$sql = 'SELECT donor.*,contribution.*
FROM contribution
INNER JOIN donor ON contribution.id_donor=donor.id_donor' ;
$result = mysqli_query($connection, $sql);
$i = 1;
while ($row = mysqli_fetch_array($result)) {
?>

<div class="modal fade" id="ModalView_Cont<?php echo $row['id_contribution']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateformLabel"> View Contribution </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Formbuilder Form--->
                <form id="insert_form" action="XUpdateContribution.php" method="POST" enctype="multipart/form-data"
                    class="mbr-form form-with-styler">
                    <!----  <input type="hidden" name="email" data-form-email="true" value="6kZCGZP8OMDPtDeeZmbUHeHmcL7xSLOPAWLWuIKYko2plkVZmXo2mIt0mCzSryUfoQ7ioO2nvPlc9AFmRWT/yUbere5n0WigAd2SWPGSAS9kqyCutyGIYN+e2BdP++BE"> -->
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">
                            Post success to save</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <!--item	quantity	datesubmit	deliverytype	id_donor	status	datetimeform-->

                        <div class="col-md-6  form-group">
                            <label for="item-form1-h" class="form-control-label ">Item</label>
                            <input type="text" name="item" value="<?php echo $row['item'];?>" class="form-control "
                                readonly>
                        </div>
                        <div class="col-md-6  form-group">
                            <label for="item-form1-h" class="form-control-label ">Quantity</label>
                            <input type="text" name="item" value="<?php echo $row['quantity'];?>" class="form-control "
                                readonly>
                        </div>
                        <div class="col-md-6  form-group">
                            <label for="name-form1-h" class="form-control-label ">Contributor Name</label>
                            <input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control "
                                readonly>
                        </div>
                        <div class="col-md-6  form-group">
                            <label for="item-form1-h" class="form-control-label ">Location</label>
                            <input type="text" name="item" value="<?php echo $row['city'] . ",". $row['state'];?>"
                                class="form-control " readonly>
                        </div>
                        <div class="col-md-6  form-group">
                            <label for="item-form1-h" class="form-control-label ">E-mail</label>
                            <input type="text" name="item" value="<?php echo $row['email'];?>" class="form-control "
                                readonly>
                        </div>
                        <div class="col-md-6  form-group">
                            <label for="item-form1-h" class="form-control-label ">Phone No.</label>
                            <input type="text" name="item" value="<?php echo "+60 " . $row['phone'];?>"
                                class="form-control " readonly>
                        </div>
                        <div class="col-md-6  form-group">
                            <label for="datereg-form1-h" class="form-control-label ">Delivery Type</label>
                            <input type="text" name="deliverytype" class="form-control"
                                value="<?php echo $row['deliverytype']; ?>" class="form-control " readonly>
                        </div>
                        <div class="col-md-6  form-group">
                            <label for="datereg-form1-h" class="form-control-label ">Date Deliver</label>
                            <input type="date" name="datesubmit" class="form-control"
                                value="<?php echo $row['datesubmit']; ?>" class="form-control " readonly>
                        </div>
                        <div class="col-md-6  form-group">
                            <label for="datereg-form1-h" class="form-control-label ">Approval Status</label>
                            <select name="status" id="status" class="form-control">
                                <option>-Choose Status-</option>
                                <option value="Pending" style="color:#4285F4;">Pending</option>
                                <option value="Approved" style="color:#ffdb58;">Approved</option>
                                <option value="Recieved" style="color:#0F9D58;">Recieved</option>
                                <option value="Rejected" style="color:#DB4437;">Rejected</option>
                            </select>
                        </div>
                        <input type="hidden" name="id_contribution" value="<?php echo $row['id_contribution']; ?>"
                                class="form-control ">
                        <div class="col-md-6  form-group" style="margin-top:35px">
                            <button type="submit" value="Insert" id="insert" class="btn btn-success"
                                name="submit">Save</button>
                            <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                            
                        </div>
                    </div>
            </div>
            </form>
            <!---Formbuilder Form--->
        </div>
    </div>
</div> <!-- END REGISTER FORM HOMELESS MODAL -->
<?php
$i++;
}
?>