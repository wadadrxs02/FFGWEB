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
    <title>FFG | Checkout</title>
    <?php include_once 'V3script.php' ?>
</head>

<style>
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

    <?php
    $display = $connection->query("SELECT * FROM donor WHERE id_donor='" . $_SESSION['id_donor'] . "'");
    $row = $display->fetch_array();
    ?>
    <h3 class="form-control-label text-center ">
        Checkout Donation</h3>
    <div class="container" style="width: 50%">
        <div class="card-deck">
            <div class="card" style="background-color: #ffffff; margin-top: 10px;">
                <div class="card-body text-center">
                    <h6 style='font-size:1rem; font-weight:400; text-align:right;'> <?php echo date("d/m/Y"); ?></h6>
                    <p> <b>Bill ID:</b> &nbsp
                        <?php
                        $bytes = random_bytes(4);
                        echo bin2hex($bytes);
                        ?></p>

                    <hr style="width:100%">
                    <div div class="dragArea row">
                        <div class="col-md-12  form-group">
                            <h3 class="form-control-label text-left ">
                                FOOD FOR GELANDANGAN (FFG) </h3>
                            <p> Donate Online via Internet Banking</p>
                            </br>
                            <p><b>Name:</b>&nbsp<?php echo $row['name']; ?></p>
                            <p><b>Email:</b>&nbsp<?php echo $row['email']; ?></p>
                            <p><b>Mobile Number:</b>&nbsp +60<?php echo $row['phone']; ?></p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <hr class="flex-grow-1">
                    </div>
                    <h6 style="font-size:1.25rem;font-weight: 400;   text-align: right;"><?php echo $_GET["amount"]; ?>
                    </h6>
                    <h5>Total</h5>
                </div>
                <form id="insert_form" action="Xonlinedonation.php" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler ">
               
                    <?php $now = new DateTime();
                    $now->setTimezone(new DateTimeZone('Asia/Kuala_Lumpur'));   ?>
                    <input type="hidden" name="don_date" value="<?php echo $now->format('Y-m-d H:i:s'); ?>">
                    <input type="hidden" name="amount" value="<?php echo $_GET["amount"]; ?>" id="amount">
                    <input type="hidden" name="bill_id" value="<?php echo bin2hex($bytes); ?>" id="bill_id">
                    <input type="submit" name="pay" value="PAY" class="btn btn-primary btn-block">
                    <!---- 
                    <input type="date" name="don_date" value=" <?php echo date('d/m/Y'); ?>" id="date">
                    <script>
                        document.querySelector("#today2").valueAsDate = new Date(timestamp);
                    </script>
                     <input type="hidden" name="don_date" class="form-control " id="today2">
                    <script>
                        document.querySelector("#today2").valueAsDate = new Date();
                    </script>-->
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
//require_once 'Yhead.php';
?>