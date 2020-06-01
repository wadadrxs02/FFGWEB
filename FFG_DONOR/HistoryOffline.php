<?php include_once'header.php';
include_once'../Xconnection.php';
include_once'Vtablehistory.php';
?>
<title>FFG Member | History</title>

<div id="colorlib-main">
    <section class="ftco-section ftco-bread">
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-md-8 ftco-animate">
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="History.php">Online Donation</a></span>
                        <span><a href="HistoryOffline.php"></a>Offline Donation</span>
                        <span class="mr-2"><a href="HistoryItem.php">Item Donation</a></span>
                    </p>
                    <h1 class="bread">History Donation</h1>
                </div>
            </div>
        </div>
    </section>
    <!--update info-->
    <center>
        <section class="ftco-section-3 ">

            <div class="row mb-2 pb-3  d-flex justify-content-center">
                <div class="col-md-8 ftco-animate">
                    <h1 class="mb-1 pb-5">Offline Donation</h1>
                </div>

                <!-- DataTales Example background-color:#e0334a-->
                <div class="col-md-8 card shadow mb-4  align-content-center justify-content-center"
                    style="border-radius:10px; float:right">
                    <div class="card-body ">
                        <div class="table-responsive" id="homeless_table">
                            <table class="table table-borderless" id="DataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="5%">NO</th>
                                        <th width="40%">Member Name </th>
                                        <th width="10%">Amount</th>
                                        <th width="30%">Date</th>
                                        <th width="10%">Bill ID</th>
                                        <th width="10%" class="no-sort">Receipt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php    $i=1;
                                              $sql = $connection->query("SELECT donor.*,offlinedonation.*
                                              FROM offlinedonation
                                              INNER JOIN donor ON offlinedonation.id_donor=donor.id_donor
                                              WHERE offlinedonation.id_donor='" . $_SESSION['id_donor'] . "' ORDER BY id_offdonate DESC");     
                                         while ($row = $sql->fetch_array()){
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td> <?php echo $row['name'];?></td>
                                        <td>RM <?php echo $row['amount'];?></td>
                                        <td> <?php echo date('d M Y', strtotime($row['don_date'])); ?></td>
                                        <td><?php echo $row['bill_id'];?></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="#" data-toggle="modal"
                                                    data-target="#ModalViewResit<?php echo $row['bill_id'];?>">
                                                    <button type='submit' class='btn btn-success btn-sm' title="View"
                                                        name="View" id="View" value="View" data-placement="top"
                                                        data-toggle="tooltip"><span class='far fa-eye'
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
                <!-- DataTales Example background-color:#e0334a-->
            </div>
        </section>
    </center>
    <!--update info-->
</div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->



<?php include_once'footer.php';
 include_once'ModalViewResit.php'; ?>

</body>

</html>

<!-- Script for header table No sort-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
</script>
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