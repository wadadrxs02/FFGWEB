<?php
include '../Xconnection.php';
session_start();

$id = $_SESSION['id_donor'];

if (isset($_POST['submit'])) {
    $name = $connection->real_escape_string($_POST['name']);
    $phone = $connection->real_escape_string($_POST['phone']);
    $email = $connection->real_escape_string($_POST['email']);
    $address1 = $connection->real_escape_string($_POST['address1']);
    $address2 = $connection->real_escape_string($_POST['address2']);
    $city = $connection->real_escape_string($_POST['city']);
    $state = $connection->real_escape_string($_POST['state']);
    $country = $connection->real_escape_string($_POST['country']);
    $zip = $connection->real_escape_string($_POST['zip']);


    // if (count($errors) == 0){
    $update = $connection->query("UPDATE donor SET name = '$name', phone = '$phone', email = '$email', address1 = '$address1', 
    address2 = '$address2', city = '$city', state = '$state', country = '$country', zip = '$zip' WHERE id_donor = '$id'");
    //$run_query = mysqli_query($connection, $update); not working

    //  $last_inserted_row = mysqli_insert_id($connection);
    // $insert2 = $connection->query("INSERT INTO login(email, password, role, id_donor)"
    //											 . "VALUES ('$email', '$password', '$last_inserted_row')");
    // }

    if ($update) {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_text'] = "" . mysqli_error($connection);
        $_SESSION['status_code'] = "success";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "An error occured.";
        $_SESSION['status_text'] = "" . mysqli_error($connection);
        $_SESSION['status_code'] = "warning";
        header('Location: index.php');
    }
    //$result = mysqli_query($connection, "SELECT * FROM donor");
    // include 'Xcloseconnection.php';
}
?>