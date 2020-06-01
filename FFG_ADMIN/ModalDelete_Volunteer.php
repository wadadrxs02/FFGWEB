<!-- REGISTER FORM HOMELESS MODAL -->
<?php
$sql = 'SELECT * FROM volunteer';
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_array($result)) {
?>

<div class="modal fade" id="ModalDelete_Volunteer<?php echo $row['id_volunteer']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerformLabel"> Delete Volunteer </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Formbuilder Form--->
                <form id="insert_form" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler">
                    <!----  <input type="hidden" name="email" data-form-email="true" value="6kZCGZP8OMDPtDeeZmbUHeHmcL7xSLOPAWLWuIKYko2plkVZmXo2mIt0mCzSryUfoQ7ioO2nvPlc9AFmRWT/yUbere5n0WigAd2SWPGSAS9kqyCutyGIYN+e2BdP++BE"> -->
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Homeless
                            registration success to save</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">

                        <div class="col-md-12  form-group">
                            <div class="alert alert-danger">Are you Sure you want Delete <strong>
                                    <?php echo $row['name']; ?>?</strong> </div>
                        </div>
                        <input type="hidden" name="id_volunteer" value="<?php echo $row['id_volunteer']; ?>" />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" value="submit" id="submit" class="btn btn-danger"
                                name="delete">Delete</button>
                        </div>
                    </div>
                </form>
                <!---Formbuilder Form--->
            </div>

        </div>
    </div>
</div> <!-- END REGISTER FORM HOMELESS MODAL -->
<?php

    if (isset($_POST['delete'])) {
        // sql to delete a record  DELETE FROM `volunteer` WHERE `volunteer`.`id_volunteer` = 13
        $id_volunteer = $_POST['id_volunteer'];
        $sql = "DELETE FROM volunteer WHERE id_volunteer='$id_volunteer' ";
        if ($connection->query($sql) === true) {
            $sql = "DELETE FROM volunteer WHERE id_volunteer='$id_volunteer' ";
            if ($connection->query($sql) === true) {
                $sql = "DELETE FROM volunteer WHERE id_volunteer='$id_volunteer' ";
                echo '<script>window.location.href="VolunteerList.php"</script>';
            } else {
                echo "Error deleting record: " . $connection->error;
            }
        } else {
            echo "Error deleting record: " . $connection->error;
        }
    }
}?>