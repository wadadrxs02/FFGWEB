<!-- REGISTER FORM HOMELESS MODAL -->
<?php
$sql = 'SELECT * FROM blog';
$result = mysqli_query($connection, $sql);
$i = 1;
while ($row = mysqli_fetch_array($result)) {
?>

<div class="modal fade" id="ModalUpdate_Post<?php echo $row['id_blog']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateformLabel"> View Post </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Formbuilder Form--->
                <form id="insert_form" action="Xupdatepost.php" method="POST" enctype="multipart/form-data"
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
                            <img src="../img/imgPost/<?php echo $row['image']; ?>"
                                style="border-radius: 25px; padding: 10px; width: 350px; height: 250px;"> </td>

                        </div>
                                    
                        <div class="col-md-12  form-group">
                            <label for="name-form1-h" class="form-control-label ">Title</label>
                            <input type="text" name="title" required="required" value="<?php echo $row['title']; ?>"
                                class="form-control " id="name">
                        </div>
                        <div class="col-md-12  form-group">
                            <label for="name-form1-h" class="form-control-label ">Description</label>
                            <textarea class="form-control" cols="" name="description" rows="4" 
                            placeholder=""><?php echo $row['description']; ?></textarea>
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="datereg-form1-h" class="form-control-label ">Date
                                Post</label>
                            <input type="date" name="datepost" class="form-control" value="<?php echo $row['date_blog']; ?>">
                        </div>

                        <div class="col-md-6  form-group">
                       
                            <label for="image-form1-h"
                                class="form-control-label ">Select Image</label>
                            <input type="hidden" name="size" value="1000000">
                            <input type="file" name="image" id="image">
                        </div>
                        <input type="hidden" name="id_post" id="id_post" />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" value="Insert" id="insert" class="btn btn-primary"
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