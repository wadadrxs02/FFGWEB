<?php
include 'Xconnection.php';
session_start();

if(isset($_POST['submit']) || isset($_POST['image'])  ) {
$id_donor = $_SESSION['id_donor'];
$amount = $_POST['amount'];
$don_date = $_POST['don_date'];
$bill_id = $_POST['bill_id'];

//$folder = "imgreciept/";
$image = $_FILES['image']['name']; 
$filetemp = $_FILES['image']['tmp_name']; //This is the directory where images will be saved 
$target = "imgreciept/" . basename($image); //retrieve image file

$sql = "INSERT INTO offlinedonation(amount,	don_date,	offlinedonation.image,	bill_id,	id_donor)
  VALUES ('$amount', '$don_date', '$image', '$bill_id', '$id_donor')";
  
  mysqli_query($connection, $sql);

  if  (move_uploaded_file($filetemp, $target)) {

    $_SESSION['status'] = "Donation has been added, the system will review the receipt.";
    $_SESSION['status_text'] = "" . mysqli_error($connection);
    $_SESSION['status_code'] = "success";
    header('Location: HistoryOffline.php');
    
} else {
  $_SESSION['status'] = "An error occured.";
  $_SESSION['status_text'] = "" . mysqli_error($connection);
  $_SESSION['status_code'] = "warning";
  header('Location: DonationOffline.php');
}
$result = mysqli_query($connection, "SELECT * FROM offlinedonation");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Xcloseconnection.php';
}
?>