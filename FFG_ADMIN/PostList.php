<?php

  include('Xconnection.php');
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<style>
table
{
    counter-reset: rowNumber;
}

table tr > td:first-child
{
    counter-increment: rowNumber;
}

table tr td:first-child::before
{
    content: counter(rowNumber);
    min-width: 1em;
    margin-right: 0.5em;
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
    color: rgb(141, 54, 54) !important;
    float: left;
    padding: 10px !important;
    position: relative;
    right: 0;
    min-width: 65px;
    line-height: 10px !important;
    border: 1px solid #e5e5e5;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    background: white !important;
    margin-left: -3px;
}

.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background: #56c596!important;
    color: black!important;
    border-radius: 4px !important;
    border: 1px solid #56c596!important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button:active {
    background: white!important;
    color: #56c596!important;
}
</style>

<!-- Title Page-->
<title>Homeless Record</title>

<body>
    <div class="page-wrapper">

        <!-- HEADER MOBILE-->

        <!-- END HEADER MOBILE-->
        <?php include_once'header.php';?>
        <!-- MENU SIDEBAR-->

        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- PAGE CONTAINER-->

            <!-- HEADER DESKTOP-->
            <?php include_once'headerD.php'; ?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Blog Lists</h2>
                                    <button class="au-btn au-btn-icon au-btn--green" data-toggle="modal" name="add"
                                        id="add" data-target="#Createpost">
                                        <i class="zmdi zmdi-plus "></i>Create Blog</button>
                                </div>
                            </div>
                        </div>

                        <!-- DataTales Example background-color:#e0334a-->
                        <div class="card shadow mb-4" style="border-radius:10px">
                            <div class="card-body">
                                <div class="table-responsive" id="homeless_table">
                                    <table class="table table-borderless table-data3" id="DataTable" width="100%"
                                        cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th width="10%">NO</th>
                                                <th width="50%">TITLE</th>
                                                <th width="20%">DATE</th>
                                                <th width="20%" class="no-sort">OPTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;
                                            $don = $connection->query("SELECT * FROM blog ORDER BY id_blog DESC");
                                            while($row = $don->fetch_array()){
                                            ?>
                                            <tr>
                                                <td></td>
                                                <td> <?php echo $row['title'];?> </td>
                                                <td> <?php  echo date('d M Y', strtotime($row['date_blog'])); ?></td>

                                                <td>
                                                <div class="table-data-feature">
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#ModalUpdate_Post<?php echo $row['id_blog'];?>">
                                                        <button type='button' class='btn btn-success btn-sm'
                                                            title="View" name="View" id="View" value="View"
                                                            data-placement="top" data-toggle="tooltip"><span
                                                                class='far fa-eye' aria-hidden='true'></span></button>
                                                    </a>
                                                    &nbsp
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#ModalDelete_Post<?php echo $row['id_blog'];?>">
                                                        <button type='button' class='btn btn-danger btn-sm'
                                                            title="Delete" name="Delete" id="Delete" value="Delete"
                                                            data-placement="top" data-toggle="tooltip"><span
                                                                class='fas fa-trash-alt'
                                                                aria-hidden='true'></span></button>
                                                    </a></td>
                                                </div>
                                                </td>
                                            </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php include_once'footer.php';?>


                </div> <!-- END SECTION CONTENT-->
            </div><!-- END MAIN CONTENT-->
        </div><!-- END PAGE CONTAINER-->
    </div> <!-- END PAGE WRAPPER-->

    <?php include_once'jslink.php';?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
    </script>

</body>

</html>
<!-- end document-->

<!-- REGISTER FORM HOMELESS MODAL -->
<div class="modal fade" id="Createpost" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerformLabel"> CREATE BLOG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Formbuilder Form--->
                <form id="insert_form" action="Xpost.php" method="POST" enctype="multipart/form-data"
                    class="mbr-form form-with-styler">
                    <!----  <input type="hidden" name="email" data-form-email="true" value="6kZCGZP8OMDPtDeeZmbUHeHmcL7xSLOPAWLWuIKYko2plkVZmXo2mIt0mCzSryUfoQ7ioO2nvPlc9AFmRWT/yUbere5n0WigAd2SWPGSAS9kqyCutyGIYN+e2BdP++BE"> -->
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Blog
                            success to post</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">

                        <div class="col-md-12  form-group">
                            <label for="name-form1-h" class="form-control-label ">Title</label>
                            <input type="text" name="title" required="required"
                                class="form-control " id="name">
                        </div>
                        <div class="col-md-12  form-group">
                            <label for="name-form1-h" class="form-control-label ">Description</label>
                            <textarea class="form-control" name="description" rows="4"
                            placeholder=""></textarea>
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="datereg-form1-h" class="form-control-label ">Date
                            Blog</label>
                            <input type="date" name="datepost" class="form-control " id="today2">
                        </div>

                        <script>
                        document.querySelector("#today2").valueAsDate = new Date();
                        </script>

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

<!-- Script for header table No sort-->
<script type="text/javascript">
$(document).ready(function() {
    $('#DataTable').DataTable();
});


$('#DataTable').dataTable({
    "order": [],
    "columnDefs": [{
        "targets": 'no-sort',
        "orderable": false,
    }]
});
</script>
<!-- END Script for header table No sort-->


<!-- javascript For update data through modal-->
<?php include_once'ModalUpdate_Post.php';?>
<!-- End javascript For update data through modal-->

<!-- javascript For update data through modal-->
<?php include_once'ModalDelete_Post.php';?>
<!-- End javascript For update data through modal-->


<!--javascript For uploading image-->
<script>
$(document).ready(function() {
    $('#insert').click(function() {
        var image_name = $('#image').val();
        if (image_name == '') {
            alert("Please Select Image");
            return false;
        } else {
            var extension = $('#image').val().split('.').pop().toLowerCase();
            if (jQuery.in_array(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                alert('Invalid Image File');
                $('#image').val('');
                return false;
            }
        }
    });
});
</script>
<!--End of javascript For uploading image-->


<?php
// sql to delete a record
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
    mysqli_close($connection);
?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
    <script type='text/javascript'>
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
            icon: "<?php echo $_SESSION['status_code']; ?>",
        });
    </script>
<?php
    unset($_SESSION['status']);
}
?>