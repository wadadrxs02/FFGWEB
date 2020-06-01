<?php
include 'Xconnection.php';
session_start();

if (isset($_POST['RegisterD'])) {
  $name = $connection->real_escape_string($_POST['name']);
  $phone = $connection->real_escape_string($_POST['phone']);
  $email = $connection->real_escape_string($_POST['email']);
  $address1 = $connection->real_escape_string($_POST['address1']);
  $address2 = $connection->real_escape_string($_POST['address2']);
  $city = $connection->real_escape_string($_POST['city']);
  $state = $connection->real_escape_string($_POST['state']);
  $country = $connection->real_escape_string($_POST['country']);
  $zip = $connection->real_escape_string($_POST['zip']);
  $password1 = $connection->real_escape_string($_POST['password1']);
  $password2 = $connection->real_escape_string($_POST['password2']);

  //  $image = $_FILES['image']['name'];
  //  $filetemp = $_FILES['image']['tmp_name'];
  //  $target = "imghomeless/".basename($image);

  //hashed password
  $hashed_password = password_hash($password1, PASSWORD_DEFAULT);

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    /* $_SESSION['status'] = "Invalid Email format. Please re-submit";
    $_SESSION['status_code'] = "error";
    header('Location: index.php'); */
    echo "<script type='text/javascript'>alert('Invalid Email format. Please re-submit');
    window.location='index.php'; </script>";
  }

  //check to see if the user already registered
  $sql = "select * from donor where (email='$email');";
  $result = mysqli_query($connection, $sql);

  $row = mysqli_fetch_assoc($result);    // output data of each row
  if ($email == $row['email']) {
    echo "<script type='text/javascript'>alert('Email already exist. Please try another one.');
    window.location='index.php'; </script>";
    // $_SESSION['status'] = "Email already exist. Please try another one.";
    /*  $_SESSION['status_code'] = "error"; */

    //header('Location: index.php');
    exit;
  }

  //check if password is the same
  if ($password1 != $password2) {
    echo "<script type='text/javascript'>alert('The passwords does not match. Please try again');
              window.location='index.php';</script>";
    // $_SESSION['status'] = "The passwords does not match. Please try again.";
    // $_SESSION['status_code'] = "error";
    // header('Location: Modal-RegisterD.php');
    //header('Location: index.php');
    exit;
  }


  $sql = "INSERT INTO donor(name, phone, email, address1, address2, city, state, country, zip, password)
    VALUES ('$name', '$phone', '$email', '$address1', '$address2', '$city', '$state', '$country', '$zip', '$hashed_password')";
  //mysqli_query($connection, $sql);

  // header('Location: ./index.php');
  if ($sql) {
    /*  $_SESSION['status1'] = "Registration Successful. Please login to continue";
    $_SESSION['status_text1'] = "" . mysqli_error($connection);
    $_SESSION['status_code1'] = "success"; */
    echo "<script type='text/javascript'>alert('Registration Successful. Please login to continue');
    window.location='index.php';</script>";

  } else {
    echo "<script type='text/javascript'>alert('An error occured.') . mysqli_error($connection);
    window.location='index.php';</script>";
  /*  $_SESSION['status1'] = "An error occured.";
    $_SESSION['status_text1'] = "" . mysqli_error($connection);
    $_SESSION['status_code1'] = "error"; */
    // header('Location: Modal-RegisterD.php');
   // header('Location: index.php');
  }
  //$result = mysqli_query($connection, "SELECT * FROM donor");
  include 'Xcloseconnection.php';
  // $result = mysqli_query($connection, "SELECT * FROM donor");
  //$result = $mysqli->query($sql) or die (mysqli_error($mysqli));


  /*  $password = $password1;
    $stmt = $connection->prepare("INSERT INTO donor(id_donor, name, phone, email, address1, address2, city, state, country, zip, password)
    VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssss", $name, $phone, $email, $address1, $address2, $city, $state, $country, $zip, $hashed_password);
    $result = $stmt->execute(); 
    $stmt->close();
    */

  /*   $insert = $connection->query("INSERT INTO donor(name, phone, email, address1, address2, city, state, country, zip, password)
    VALUES ('$name', '$phone', '$email', '$address1', '$address2', '$city', '$state', '$country', '$zip', '$password')");
      */
}

/*

if(isset($_POST['submit'])) {
$file = $_FILES['image']['name'];
$filetemp = $_FILES['image']['tmp_name'];
$folder = 'assets/';
move_uploaded_file($filetemp, $folder);
$sql = "INSERT INTO homeless(name, icnumber, phoneNum, gender, dob, race, location, medCondition, datereg, image)
VALUES ('$name', '$icnumber', '$phoneNum', '$gender', '$dob', '$race', '$location', '$medCondition', '$datereg', '$file')";
$sql = "INSERT INTO 'homeless'('name', 'icnumber', 'phoneNum', 'gender', 'dob', 'race', 'location', 'medCondition', 'datereg', 'image')
VALUES ('$name', '$icnumber', '$phoneNum', '$gender', '$dob', '$race', '$location', '$medCondition', '$datereg', '$file')";

$qry = mysqli_query($connection, $sql);
if  ($qry)
{

$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$file ="";
$insert ="";$connection->close();

if(!empty($_FILES['image']['tmp_name'])  && file_exists($_FILES['image']['tmp_name']))
{
} else {
echo "image error";
}

$sql .= "INSERT INTO homeless(name, icnumber, phoneNum, gender, dob, race, location, medCondition, datereg, image)
VALUES ('$name', '$icnumber', '$phoneNum', '$gender', '$dob', '$race', '$location', '$medCondition', '$datereg', '$file')";
$sql="INSERT INTO homeless(name, icnumber, phoneNum, gender, dob, race, location, medCondition, datereg, image)
VALUES (?,?,?,?,?,?,?,?,?,?)";
//$insert = $connection->prepare($sql);
// $result = $insert->execute([$name, $icnumber, $phoneNum, $gender, $dob, $race, $location, $medCondition, $datereg ,$file]); if (empty($name)){
die("Please enter your name");
}
if (empty($gender)){
die("Please enter your gender");
}
if (empty($dob)){
die("Please enter your date of birth");
}
if (empty($race)){
die("Please enter your race");
}
if (empty($location)){
die("Please enter your location");
}

$query = "INSERT INTO homeless(name, icnumber, phoneNum, gender, dob, race, location, medCondition, datereg, image)
VALUES ('$name', '$icnumber', '$phoneNum', '$gender', '$dob', '$race', '$location', '$medCondition', '$datereg','$file')";

if(mysqli_query($connect, $query))
$insert = $connection->query("INSERT INTO homeless(name, icnumber, phoneNum, gender, dob, race, location, medCondition, datereg, image)"
. "VALUES ('$name', '$icnumber', '$phoneNum', '$gender', '$dob', '$race', '$location', '$medCondition', '$datereg', '$image')");

if ($insert === TRUE){

echo "<script type='text/javascript'>alert('Homeless record has success to save');
window.location='index.php';</script>";
} else {
echo "<script type='text/javascript'>alert('Error');
window.location='index.php';</script>";
}
}
} */
