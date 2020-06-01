<?php

  include('Xconnection.php');
  session_start();
  include('Vstyle.php');
?>

<!DOCTYPE html>
<html lang="en">

<!-- Title Page-->
<title>Online Donation Record</title>

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
                                    <h2 class="title-1">Offline Donation Information</h2>

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
                                                <th width="10%">Bill ID</th>
                                                <th width="40%">Member Name </th>
                                                <th width="30%">Date / Time</th>
                                                <th width="10%">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php    $i=1;
                                              $sql = $connection->query("SELECT donor.*,offlinedonation.*
                                              FROM offlinedonation
                                              INNER JOIN donor ON offlinedonation.id_donor=donor.id_donor
                                              ORDER BY id_offdonate DESC");     
                                              while ($row = $sql->fetch_array()){
                                             ?>
                                            <tr>
                                                <td></td>
                                                <td><?php echo $row['bill_id'];?></td>
                                                <td> <?php echo $row['name'];?></td>
                                                <td> <?php echo date('d M Y  h:i:s A', strtotime($row['don_date'])); ?>
                                                </td>
                                                <td>RM <?php echo $row['amount'];?></td>
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
<?php include_once'ModalView_Donor.php';
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