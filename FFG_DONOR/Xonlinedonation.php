<?php
include 'Xconnection.php';
session_start();

$id_donor = $_SESSION['id_donor'];

/*date_default_timezone_set("Asia/Kuala_Lumpur");
$don_date = Date("Y-m-d H:i:s"); */
$amount = $_POST['amount'];
$don_date = $_POST['don_date'];
/*$now = new DateTime();
$now->setTimezone(new DateTimeZone('Asia/Kuala_Lumpur'));
$don_date = $now->format('Y-m-d H:i:s T'); */ //tak work. only work with echo
$bill_id = $_POST['bill_id'];


// $sql = "INSERT INTO onlinedonation (amount, don_date,	bill_id, id_donor)
//  VALUES ('$amount', '$don_date', '$bill_id', '$id')";
//$insert = mysqli_query($connection, $sql);
$sql = $connection->query("INSERT INTO onlinedonation(amount, don_date,	bill_id, id_donor)"
  . "VALUES ('$amount', '$don_date', '$bill_id', '$id_donor')");

if ($sql) {
  echo "<script type='text/javascript'>alert('Payment Successful');
    window.location='DonateReceipt.php';</script>";
    header('location:DonateReceipt.php?id_donor='.$id_donor.'& bill_id='.$bill_id);
    
} else {
  echo "<script type='text/javascript'>alert('An error occured.');
    window.location='index.php';</script>" . mysqli_error($connection);
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Xcloseconnection.php';
?>