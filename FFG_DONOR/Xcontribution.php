<?php
include 'Xconnection.php';
session_start();

$id_donor = $_SESSION['id_donor'];

$item = $_POST['item'];
$quantity = $_POST['quantity'];
$datesubmit = $_POST['datesubmit'];
$deliverytype = $_POST['deliverytype'];
$datetimeform = $_POST['datetimeform'];

$sql = "INSERT INTO contribution(item,	quantity, datesubmit,	deliverytype,	id_donor, id_volunteer, status, datetimeform)"
  . "VALUES ('$item', '$quantity', '$datesubmit',	'$deliverytype','$id_donor',NULL, 'Pending', '$datetimeform')";

 
  mysqli_query($connection, $sql);

if ($sql) {
 
  $_SESSION['status'] = "Your request has been submitted, we will reach you shortly";
  $_SESSION['status_text'] = "" . mysqli_error($connection);
  $_SESSION['status_code'] = "success";
  header('Location: DonationItem.php');

  /*echo "<script type='text/javascript'>alert('SUccess.');
  window.location=' DonationItem.php';</script>" . mysqli_error($connection);*/
  
} else {
 /* $_SESSION['status'] = "An error occured.";  
  $_SESSION['status_text'] = "" . mysqli_error($connection);
  $_SESSION['status_code'] = "warning";
  header('Location: DonationItem.php'); */
  echo "<script type='text/javascript'>alert('An error occured.');
  window.location=' DonationItem.php';</script>" . mysqli_error($connection);

}



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Xcloseconnection.php';
?>