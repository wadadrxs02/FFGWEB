<?php

  include('Xconnection.php');
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<style>
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
    background: #56c596!important;
    color: white!important;
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
                                    <h2 class="title-1">Homeless Alert Information</h2>
                                   
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

                                                <th width="25%">Name</th>
                                                <th width="25%">Location</th>
                                                <th width="20%">Health</th>
                                                <th width="20%" class="no-sort">Picture</th>
                                                <th width="10%" class="no-sort">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;
                                            $don = $connection->query("SELECT * FROM homelessalert ORDER BY id_alert DESC");
                                            while($row = $don->fetch_array()){
                                            ?>
                                            <tr>
                                                <td> <?php echo $row['name'];?></td>
                                                <td> <?php echo $row['age'];?> </td>
                                                <td> <?php echo $row['date_found'];?></td>
                                                <td> <img src="ImgHomelessAlert/<?php echo $row['image'];?>"
                                                        style="width:100px; height:100px"> </td>
                                                <td>

                                                    <div class="table-data-feature" >
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#ModalView_HomelessAlert<?php echo $row['id_alert'];?>">
                                                            <button type='button' class='btn btn-success btn-sm'
                                                                title="View" name="View" id="View" value="View"
                                                                data-placement="top" data-toggle="tooltip"><span
                                                                    class='far fa-eye'
                                                                    aria-hidden='true'></span></button>
                                                        </a>
                                                        &nbsp
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#ModalDelete_HomelessAlert<?php echo $row['id_alert'];?>">
                                                            <button type='button' class='btn btn-danger btn-sm'
                                                                title="Delete" name="Delete" id="Delete" value="Delete"
                                                                data-placement="top" data-toggle="tooltip"><span
                                                                    class='fas fa-trash-alt' 
                                                                    aria-hidden='true'></span></button>
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
<?php include_once'ModalView_HomelessAlert.php';?>
<!-- End javascript For update data through modal-->

<!-- javascript For update data through modal-->
<?php include_once'ModalDelete_HomelessAlert.php';?>
<!-- End javascript For update data through modal-->

<?php
// sql to delete a record
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
    mysqli_close($connection);
?>