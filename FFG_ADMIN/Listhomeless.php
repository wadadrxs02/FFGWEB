<?php
include('Xconnection.php');
session_start();
include('Vstyle.php');
?>

<!DOCTYPE html>
<html lang="en">

<!-- Title Page-->
<title>Admin | Homeless Record</title>

<body>
    <div class="page-wrapper">

        <!-- HEADER MOBILE-->

        <!-- END HEADER MOBILE-->
        <?php include('header.php'); ?>
        <!-- MENU SIDEBAR-->

        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- PAGE CONTAINER-->

            <!-- HEADER DESKTOP-->
            <?php include('headerD.php'); ?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Homeless Information</h2>
                                    <button class="au-btn au-btn-icon au-btn--green" data-toggle="modal" name="add" id="add" data-target="#registerform">
                                        <i class="zmdi zmdi-plus "></i>Register Homeless</button>
                                </div>
                            </div>
                        </div>

                        <!-- DataTales Example background-color:#e0334a-->
                        <div class="card shadow mb-4" style="border-radius:10px">
                            <div class="card-body">
                                <div class="table-responsive" id="homeless_table">
                                    <table class="table table-borderless table-data3" id="DataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th width="5%">NO</th>
                                                <th width="25%">Name</th>
                                                <th width="25%">Location</th>
                                                <th width="15%">Health</th>
                                                <th width="20%" class="no-sort">Picture</th>
                                                <th width="10%" class="no-sort">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            $don = $connection->query("SELECT * FROM homeless ORDER BY id_homeless DESC");
                                            while ($row = $don->fetch_array()) {
                                            ?>
                                                <tr>
                                                    <td></td>
                                                    <td> <?php echo $row['name']; ?></td>
                                                    <td> <?php echo $row['location']; ?> </td>
                                                    <td> <?php echo $row['medCondition']; ?></td>
                                                    <td> <img src="imghomeless/<?php echo $row['image']; ?>" style="width:100px; height:100px"> </td>
                                                    <td>

                                                        <div class="table-data-feature">
                                                            <a href="#" data-toggle="modal" data-target="#EditFormModal<?php echo $row['id_homeless']; ?>">
                                                                <button type='button' class='btn btn-success btn-sm' title="Edit" name="Edit" id="Edit" value="Edit" data-placement="top" data-toggle="tooltip"><span class='far fa-edit' aria-hidden='true'></span></button>
                                                            </a>
                                                            &nbsp
                                                            <a href="#" data-toggle="modal" data-target="#DeleteModal<?php echo $row['id_homeless']; ?>">
                                                                <button type='button' class='btn btn-danger btn-sm' title="Delete" name="Delete" id="Delete" value="Delete" data-placement="top" data-toggle="tooltip"><span class='fas fa-trash-alt' aria-hidden='true'></span></button>
                                                            </a>
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

                    <?php include_once 'footer.php'; ?>


                </div> <!-- END SECTION CONTENT-->
            </div><!-- END MAIN CONTENT-->
        </div><!-- END PAGE CONTAINER-->
    </div> <!-- END PAGE WRAPPER-->

    <?php include_once 'jslink.php'; ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
    </script>

</body>

</html><!-- end document-->
<?php include_once 'ModalRegister_Homeless.php'; ?>

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

<!-- javascript For update data through modal-->
<?php include_once 'ModalUpdate_Homeless.php'; ?>
<!-- End javascript For update data through modal-->

<!-- javascript For update data through modal-->
<?php include_once 'ModalDelete_Homeless.php'; ?>
<!-- End javascript For update data through modal-->
`
<?php
// sql to delete a record
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
mysqli_close($connection);
?>