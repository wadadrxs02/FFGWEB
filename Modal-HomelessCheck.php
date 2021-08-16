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
.d-flex {
    display: -ms-flexbox !important;
    display: flex !important
}

.flex-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important
}
</style>


<!-- LOGIN FORM HOMELESS MODAL -->
<div class="modal fade" id="HomelessCheck" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!--Homeless Registeration Check-->
                <h5 class="modal-title" id="loginformLabel">Semakan Pendaftaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Formbuilder Form--->
                <form id="insert_form" action="semakan.php" method="POST" enctype="multipart/form-data"
                    class="mbr-form form-with-styler ">
                    <div class="dragArea row">

                        <div class="col-md-12  form-group">
                            <label class="form-control-label  ">
                                Pengisian nama ini merupakan kemudahan semakan senarai jagaan FFG dan Penerima
                                Bantuan.</label>
                        </div>
                        <div class="col-md-12  form-group">
                            <label for="image-form1-h" class="form-control-label  ">Nama :</label>
                            <input type="text" name="name"  class="form-control" required="required"
                                class="form-control ">
                        </div>

                        <input type="hidden" name="id_donor" id="id_donor" />
                        <hr style="width:100%">
                        <div class="col-md-12  form-group " style="text-align:center">
                            <button type="submit" value="Insert" class="btn btn-primary px-4"
                                name="btnsemak">SEMAK</button>
                            <button type="button" class="btn btn-secondary px-4" data-dismiss="modal">BATAL</button>
                        </div>
                    </div>
                </form> <!---Formbuilder Form--->
            </div>
        </div>
    </div>
</div> <!-- END LOGIN FORM HOMELESS MODAL -->


<script type="text/javascript">
// Reusable Function to Enforce MaxLength
function enforce_maxlength(event) {
  var t = event.target;
  if (t.hasAttribute('maxlength')) {
    t.value = t.value.slice(0, t.getAttribute('maxlength'));
  }
}

// Global Listener for anything with an maxlength attribute.
// I put the listener on the body, put it on whatever.
document.body.addEventListener('input', enforce_maxlength);</script>
