<?php

  include('Xconnection.php');
  session_start();
  include('Vstyle.php');
?>

<!DOCTYPE html>
<html lang="en">

<!-- Title Page-->
<title>Admin | Homeless Alert Record</title>

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
                                                <th width="5%">NO</th>
                                                <th class="no-sort" width="10%">Gender</th>
                                                <th class="no-sort" width="30%">Name </th>
                                                <th width="15%">Date found</th>
                                                <th class="no-sort" width="30%">founded by</th>
                                                <th class="no-sort" width="5%">details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php    $i=1;
                                              $sql = $connection->query("SELECT donor.*,homelessalert.*
                                              FROM homelessalert
                                              INNER JOIN donor ON homelessalert.id_donor=donor.id_donor
                                              ORDER BY id_alert DESC");     
                                              while ($row = $sql->fetch_array()){
                                             ?>
                                            <tr>
                                                <td></td>
                                                <td><?php echo $row['gender'];?></td>
                                                <td> <?php echo $row['hname'];?></td>
                                                <td> <?php echo date('d/m/Y', strtotime($row['date_found'])); ?>
                                                </td>
                                                <td><?php echo $row['name'];?></td>
                                                <td>

                                                    <div class="table-data-feature">
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#ModalView_HomelessAlert<?php echo $row['id_alert']; ?>">
                                                            <button type='button' class='btn btn-success btn-sm'
                                                                title="Edit" name="Edit" id="Edit" value="Edit"
                                                                data-placement="top" data-toggle="tooltip"><span
                                                                    class='far fa-edit'
                                                                    aria-hidden='true'></span></button>
                                                        </a>
                                                        &nbsp
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#DeleteModal<?php echo $row['id_alert']; ?>">
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
                    </div><?php include_once'footer.php';?>
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
<?php include_once'ModalView_HomelessAlert.php';
?>
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