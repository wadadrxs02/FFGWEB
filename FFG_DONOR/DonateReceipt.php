<!DOCTYPE html>
<html lang="en">
<?php
include_once '../Xconnection.php';
session_start();

if (!isset($_SESSION['id_donor']) and $_SESSION['email'] == '') {

    // $_SESSION['s_urlRedirectDir'] = $_SERVER['REQUEST_URI'];
    // $_SESSION['id_donor'] = true;
    header("Location:../index.php");
    exit();
}
?>

<head>
    <title>FFG | Receipt</title>
    <?php include_once 'V3script.php' ?>
</head>

<style>
h2,
h5,
p {
    text-align: left !important;
    margin-top: 0 !important;
    margin-bottom: 0 !important
}

h6 {
    text-align: right !important;
    float: right !important;
}

div.a {
    word-wrap: normal;
}

.btn-primary {
    color: #fff;
    background-color: #56c596;
    border-color: #56c596
}

.btn-primary:hover {
    color: #fff;
    background-color: #00ad5f;
    border-color: #00ad5f
}
</style>



<body>
    <!--style="background-color: #f4f4f4;" -->
    <center> <img src="images/checkout.png" alt="" style="width: 50%" class="center"></center>

    <h3 class="form-control-label text-center ">Receipt</h3>
    <div class="container" style="width: 50%"> <?php
                    $sql = $connection->query("SELECT donor.*,onlinedonation.*
                             FROM onlinedonation
                             INNER JOIN donor ON onlinedonation.id_donor=donor.id_donor
                             WHERE onlinedonation.id_donor='" . $_SESSION['id_donor'] . "' 
                             AND onlinedonation.bill_id= '" . $_GET['bill_id'] . "'"); //    
                    // 
                    //SELECT donor.*,onlinedonation.* FROM onlinedonation INNER JOIN donor ON onlinedonation.id_donor= donor.id_donor WHERE onlinedonation.bill_id= 'f1e3f346'
                    $fetch = $sql->fetch_array();
                    ?>
        <div class="card-deck">
            <div class="card" style="background-color: #ffffff; margin-top: 10px;">
                <div class="card-body text-center" style="background-color: #f0fff7;">
                    <h6 style=" font-weight:400; text-align:right; margin:0"><b>Paid on</b>
                        <?php echo date('d M Y h:i:s A', strtotime($fetch['don_date'])); ?></h6>
                     
                    <div>
                        <p>Total Paid</p>
                    </div>

                    <h2 style="color:#19b562; ">RM <?php echo $fetch['amount']; ?>
                        <span class="badge badge-pill badge-success" style="float:right; background-color: #2bbf7d;">Success</span></h2>
                </div>
                <div class="card-body text-center">
                    <p> <b>Bill ID:</b> &nbsp
                        <?php echo  $fetch['bill_id']; ?>
                    </p>
                    <hr style="width:100%">
                    <div div class="dragArea row">
                        <div class="col-md-12  form-group">
                            <h3 class="form-control-label text-left ">
                                FOOD FOR GELANDANGAN (FFG) </h3>
                            <p> Donate Online via Internet Banking</p>
                            </br>
                            <p><b>Name:</b>&nbsp<?php echo $fetch['name']; ?></p>
                            <p><b>Email:</b>&nbsp<?php echo $fetch['email']; ?></p>
                            <p><b>Mobile Number:</b>&nbsp +60<?php echo $fetch['phone']; ?></p>
                        </div>
                    </div>
                    <p style="font-size: 0.7rem"><b>Note:</b> This receipt is computer generated and no signature is required
                    <span class="btn btn-primary" id="printPageButton" onclick="window.print()" style="float:right"><i class="fa fa-print mr-1"></i> Print</span>
                    </p>
                </div>

                <a class="btn btn-primary" href="History.php">Back</a>
            </div>
        </div>
    </div>
</body>

</html>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>