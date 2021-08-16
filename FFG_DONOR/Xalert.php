<?php /*
include 'Xconnection.php';
session_start();

$id_donor = $_SESSION['id_donor'];
if (isset($_POST['submit'])) {
  $location = $_POST['location'];
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $date_found = $_POST['date_found'];
  $time = $_POST['time'];
  $desc = $_POST['desc'];
  $date_found = $_POST['date_found'];

  $image = $_FILES['image']['name'];
  $filetemp = $_FILES['image']['tmp_name'];
  $target = "IMGALERT/" . basename($image);


  $sql = "INSERT INTO homelessalert(location, name,	gender,	age,	date_found,	time,	desc,	homelessalert.image,	id_donor,	id_volunteer)
VALUES ('$location', '$name', '$gender',	'$age','$date_found','$time', '$desc', '$image', '$id_donor', NULL)";

  mysqli_query($connection, $sql);

  if (move_uploaded_file($filetemp, $target)) {
    $_SESSION['status'] = "Your report has been submitted to FFG Team for further action";
    $_SESSION['status_text'] = "" . mysqli_error($connection);
    $_SESSION['status_code'] = "success";
    // header('Location: Listhomeless.php');
  } else {
    $_SESSION['status'] = "An error occured.";
    $_SESSION['status_text'] = "" . mysqli_error($connection);
    $_SESSION['status_code'] = "warning";
    //  header('Location: Listhomeless.php'); 

  }

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  include 'Xcloseconnection.php';
} */
?>


<?php
include('Xconnection.php');
session_start();
$id_donor = $_SESSION['id_donor'];
if (isset($_POST['submit'])) {
  $location = $_POST['location'];
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $date_found = $_POST['date_found'];
  $time = $_POST['time'];
  $dsc = $_POST['dsc'];
  $date_found = $_POST['date_found'];

  $image = $_FILES['image']['name'];
  $filetemp = $_FILES['image']['tmp_name'];
  $target = "IMGALERT/" . basename($image);


  $sql = "INSERT INTO homelessalert (location, hname,	gender,	age,	date_found,	time,	dsc,	image,	id_donor,	id_volunteer)
   VALUES ('$location', '$name', '$gender',	'$age','$date_found','$time', '$dsc', '$image', '$id_donor', NULL)";


  if (move_uploaded_file($filetemp, $target)) {
   $_SESSION['status'] = "Your report has been submitted to FFG Team for further action";
    $_SESSION['status_text'] = "" . mysqli_error($connection);
    $_SESSION['status_code'] = "success";
    header('Location: homelessalert.php'); 

    //echo "<script type='text/javascript'>alert('ntah ap ntah salah die')  window.location='homelessalert.php';</script>";
    //echo  mysqli_error($connection);
  } else {
    $_SESSION['status'] = "An error occured.";
    $_SESSION['status_text'] = "" . mysqli_error($connection);
    $_SESSION['status_code'] = "warning";
    header('Location: homelessalert.php'); 
   // echo  mysqli_error($connection);
   //echo "<script type='text/javascript'>alert('ntah ap ntah salah die')  window.location='homelessalert.php';</script>";
    //echo  mysqli_error($connection);
  }

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Xcloseconnection.php';}
?>