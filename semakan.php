<?php include_once 'header.php';
include_once 'Xconnection.php';

?>

<!-- Title -->
<title>FFG | Semakan Pendaftaran</title>

<head>


</head>

<body>

    <!-- ****** Breadcumb Area Start ****** -->
    <div class="breadcumb-area" style="background-image: url(img/bg-img/love.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Semakan Pendaftaran</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>

    <div class="container h-100 pt-5">
        <div class="row h-100 align-items-center">
            <div class="col-12">


                <!-- DataTales Example background-color:#e0334a-->
                <div class="card shadow mb-4" style="border-radius:10px">
                    <div class="card-body">
                        <div class="table-responsive" id="homeless_table">
                            <table class="table table-borderless table-data3" id="DataTable" width="100%"
                                cellspacing="0">
                                <?php
                                if (isset($_POST['btnsemak'])) { //check if form was submitted
                                    $name = $_POST['name']; //get input text
                                    $message = "<p>You searched for Name : " . $name . "</p>";
                                    echo $message . "<br><br>";
                                }
                                $sql = "SELECT * FROM homeless WHERE name LIKE '%$name%'";
                                if ($result = $connection->query($sql)) {
                                    if ($result->num_rows > 0) {
                                ?>
                                <thead>
                                    <tr>
                                      
                                        <th width="">Name</th>
                                        <th width="">IC Number</th>
                                        <th width="">Phone No.</th>
                                        <th width="">Gender</th>
                                        <th width="">Date of Birth</th>
                                        <th width="">Race</th>
                                        <th width="">Location</th>
                                        <th width="">Health</th>
                                    </tr>
                                </thead>
                                <?php while ($row = $result->fetch_array()) { ?>
                                <tbody>

                                    <tr>
                                        <td> <?php echo $row['name']; ?></td>
                                        <td> <?php echo $row['icnumber']; ?></td>
                                        <td> <?php echo $row['phoneNum']; ?> </td>
                                        <td> <?php echo $row['gender']; ?></td>
                                        <td> <?php echo $row['dob']; ?></td>
                                        <td> <?php echo $row['race']; ?> </td>
                                        <td> <?php echo $row['location']; ?> </td>
                                        <td> <?php echo $row['medCondition']; ?></td>
                                    </tr>
                                    <?php }

                                        $result->free();
                                    } else {
                                        $message = "<p>No records matching your IC is found.</p>";
                                    echo $message . "<br><br>";
                                       
                                    }
                                }
                                // Close connection
                                $connection->close(); ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Our Creative Portfolio Area End ****** -->
    <?php include_once 'ffg_admin/jslink.php'; ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
    </script>
    <?php include_once 'footer.php';
    include_once 'script.php'; ?>
</body>