<!-- REGISTER FORM HOMELESS MODAL -->
<?php
$sql = 'SELECT donor.*,homelessalert.*
FROM homelessalert
INNER JOIN donor ON homelessalert.id_donor=donor.id_donor' ;
$result = mysqli_query($connection, $sql);
$i = 1;
while ($row = mysqli_fetch_array($result)) {
?>
<div class="modal fade" id="ModalView_HomelessAlert<?php echo $row['id_alert']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerformLabel"> View Notify Homeless </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Formbuilder Form--->
                <form id="insert_form" action="Xalert.php" method="POST" enctype="multipart/form-data"
                    class="mbr-form form-with-styler">
                    <!----  <input type="hidden" name="email" data-form-email="true" value="6kZCGZP8OMDPtDeeZmbUHeHmcL7xSLOPAWLWuIKYko2plkVZmXo2mIt0mCzSryUfoQ7ioO2nvPlc9AFmRWT/yUbere5n0WigAd2SWPGSAS9kqyCutyGIYN+e2BdP++BE"> -->
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">
                            Post success to save</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                       
                    <div class="col-md-12  form-group" style="text-align:center">
                            <img src="../FFG_DONOR/IMGALERT/<?php echo $row['image']; ?>" onerror="this.src='img/about-img/target.png';" style="width:150px; height:150px;   
                            border-radius: 25px; border: 2px solid #56c596; padding: 10px; width: 180px; height: 180px;"> </td>

                        </div>
                        <div class="col-md-6  form-group">
                            <label for="item-form1-h" class="form-control-label ">Founder Name</label>
                            <input type="text" name="item" value="<?php echo $row['name'];?>" class="form-control "
                                readonly>
                        </div>
                        <div class="col-md-6  form-group">
                            <label for="item-form1-h" class="form-control-label ">Name</label>
                            <input type="text" name="item" value="<?php echo $row['hname'];?>" class="form-control "
                                readonly>
                        </div>
                        <div class="col-md-6  form-group">
                            <label for="item-form1-h" class="form-control-label ">Location</label>
                            <input type="text" name="item" value="<?php echo $row['location'];?>" class="form-control "
                                readonly>
                        </div>
                        <div class="col-md-3  form-group">
                            <label for="name-form1-h" class="form-control-label ">Gender </label>
                            <input type="text" name="name" value="<?php echo $row['gender'];?>" class="form-control "
                                readonly>
                        </div>
                        <div class="col-md-3  form-group">
                            <label for="item-form1-h" class="form-control-label ">Age (Approximate)</label>
                            <input type="text" name="item" value="<?php echo $row['age'];?>"
                                class="form-control " readonly>
                        </div>
                        <div class="col-md-6  form-group">
                            <label for="item-form1-h" class="form-control-label ">Time Found</label>
                            <input type="time" name="time" value="<?php echo $row['time'];?>" class="form-control "
                                readonly>
                        </div>
                        <div class="col-md-6  form-group">
                            <label class="form-control-label ">Date Found</label>
                            <input type="date" name="datesubmit" class="form-control"
                                value="<?php echo $row['date_found']; ?>" class="form-control " readonly>
                        </div>

                        <div class="col-md-12  form-group">
                            <label class="form-control-label ">Description</label>
                            <input type="text" name="dsc" class="form-control" rows="4"
                                value="<?php echo $row['dsc']; ?>" class="form-control " readonly>
                        </div>
                 
                 
                        <input type="hidden" name="id_alert" value="<?php echo $row['id_alert']; ?>"
                            class="form-control ">
                        <div class="col-md-6  form-group" style="margin-top:35px">
                            <button type="submit" value="Insert" id="insert" class="btn btn-success"
                                name="submit">Save</button>
                            <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>

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