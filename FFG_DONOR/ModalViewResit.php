<!-- REGISTER FORM HOMELESS MODAL -->
<?php
$sql = 'SELECT * FROM offlinedonation';
$result = mysqli_query($connection, $sql);
$i = 1;
while ($row = mysqli_fetch_array($result)) {
  
    ?>

<div class="modal fade" id="ModalViewResit<?php echo $row['bill_id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-weight:600"> Uploaded Receipt </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12  form-group" style="text-align:center">
                    <img src="IMGRECIEPT/<?php echo $row['image']; ?>">
                    <h5  style="font-weight:600">Uploaded on: <?php echo date('d M Y h:i:s A', strtotime($row['don_date'])); ?></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>

        </div>
    </div>
</div> <!-- END REGISTER FORM HOMELESS MODAL -->
<?php $i++; } ?>