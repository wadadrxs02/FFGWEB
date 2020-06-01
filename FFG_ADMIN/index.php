<?php
  include_once'Xconnection.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Title Page-->
<title>Admin | Dashboard</title>

<body class="animsition">
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
                        <div class="row m-t-25">

                        <div class="col-md-3">
                                <div class="card" style="width:14rem">
                                    <div class="card-header" style="background-color:#403F4C">
                                        <strong class="card-title text-light">Homeless Record</strong>
                                    </div>
                                    <div class="card-body text-white" style="background-color:#EB5160">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <h2>
                                                    <?php $homeless = $connection->query("SELECT COUNT(id_homeless) AS totalhomeless FROM homeless");
                                                    while($fetch = $homeless->fetch_array()){ ?>
                                                    <?php echo $fetch['totalhomeless'];?>
                                                    <?php } ?>
                                                </h2>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-blind fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="width:14rem">
                                    <div class="card-header" style="background-color:#403F4C">
                                        <strong class="card-title text-light">Volunteer Record</strong>
                                    </div>
                                    <div class="card-body text-white" style="background-color:#EB5160">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <h2>
                                                <?php $volunteer = $connection->query("SELECT COUNT(id_volunteer) AS totalvolunteer FROM Volunteer");
                                                while($fetch = $volunteer->fetch_array()){ ?>
                                                <?php  echo $fetch['totalvolunteer'];?>
                                                <?php  } ?>
                                                </h2>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-people-carry fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="width:14rem">
                                    <div class="card-header" style="background-color:#403F4C">
                                        <strong class="card-title text-light">Donor Record</strong>
                                    </div>
                                    <div class="card-body text-white" style="background-color:#EB5160">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <h2>
                                                    <?php $donor = $connection->query("SELECT COUNT(id_donor) AS totaldonor FROM donor");
                                                    while($fetch = $donor->fetch_array()){ ?>
                                                    <?php echo $fetch['totaldonor'];?>
                                                    <?php } ?>
                                                </h2>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-shield fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="width:14rem">
                                    <div class="card-header" style="background-color:#403F4C">
                                        <strong class="card-title text-light">Post Record</strong>
                                    </div>
                                    <div class="card-body text-white" style="background-color:#EB5160">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <h2>
                                                    <?php $blog = $connection->query("SELECT COUNT(id_blog) AS totalblog FROM blog");
                                                    while($fetch = $blog->fetch_array()){ ?>
                                                    <?php echo $fetch['totalblog'];?>
                                                    <?php } ?>
                                                </h2>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-book fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="width:14rem">
                                    <div class="card-header" style="background-color:#403F4C">
                                        <strong class="card-title text-light">Online Donation </strong>
                                    </div>
                                    <div class="card-body text-white" style="background-color:#EB5160">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <h2>RM
                                                    <?php $onldonate = $connection->query("SELECT SUM(amount) AS totalonldonate FROM onlinedonation");
                                                    while($fetch = $onldonate->fetch_array()){ ?>
                                                    <?php echo $fetch['totalonldonate'];?>
                                                    <?php } ?>
                                                </h2>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-money-check-alt fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="width:14rem">
                                    <div class="card-header" style="background-color:#403F4C">
                                        <strong class="card-title text-light">Offline Donation </strong>
                                    </div>
                                    <div class="card-body text-white" style="background-color:#EB5160">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <h2>RM
                                                    <?php $offdonate = $connection->query("SELECT SUM(amount) AS totaloffdonate FROM offlinedonation");
                                                    while($fetch = $offdonate->fetch_array()){ ?>
                                                    <?php echo $fetch['totaloffdonate'];?>
                                                    <?php } ?>
                                                </h2>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-donate fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card" style="width:14rem">
                                    <div class="card-header" style="background-color:#403F4C">
                                        <strong class="card-title text-light">Item Donation</strong>
                                    </div>
                                    <div class="card-body text-white" style="background-color:#EB5160">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <h2>
                                                    <?php $contribution = $connection->query("SELECT COUNT(id_contribution) AS totalcontribute FROM contribution");
                                                    while($fetch = $contribution->fetch_array()){ ?>
                                                    <?php echo $fetch['totalcontribute'];?>
                                                    <?php } ?>
                                                </h2>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-gifts fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <?php include_once 'footer.php';?>


                </div> <!-- END SECTION CONTENT-->
            </div><!-- END MAIN CONTENT-->
        </div><!-- END PAGE CONTAINER-->
    </div> <!-- END PAGE WRAPPER-->




   <?php include_once 'jslink.php';?>

</body>

</html>
<!-- end document-->