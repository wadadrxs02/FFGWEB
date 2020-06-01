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
                        <span><a href="HistoryOffline.php">Offline Donation</a></span>
                        <span><a href="HistoryItem.php"></a>Item Donation</span>
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
                    <h1 class="mb-1 pb-5">Item Donation</h1>
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
                                        <th width="30%">Item</th>
                                        <th width="10%">Quantity</th>
                                        <th width="10%">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php    $i=1;
                                              $sql = $connection->query("SELECT donor.*,contribution.*
                                              FROM contribution
                                              INNER JOIN donor ON contribution.id_donor=donor.id_donor
                                              WHERE contribution.id_donor='" . $_SESSION['id_donor'] . "' ORDER BY id_contribution DESC");     
                                              //<td> <?php echo date('d M Y', strtotime($row['datetimeform'])); 
                                         while ($row = $sql->fetch_array()){
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td> <?php echo $row['name'];?></td>
                                        <td><?php echo $row['item'];?></td>
                                        <td><?php echo $row['quantity'];?></td>
                                        <?php if($row['status'] =='Pending'){?>
                                        <td class="pending"><?php echo $row['status'];?></td>
                                        <?php   }    if($row['status'] =='Approved'){?>
                                        <td class="process"><?php echo $row['status'];?></td>
                                        <?php   }    if($row['status'] =='Recieved'){?>
                                        <td class="process"><?php echo $row['status'];?></td>
                                        <?php  }   if($row['status'] =='Rejected'){?>
                                        <td class="denied"><?php echo $row['status'];?></td>  
                                        <?php } ?>
                                       
                                          
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



<?php include_once'footer.php'; ?>

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