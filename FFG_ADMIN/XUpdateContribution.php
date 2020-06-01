<?php
include 'Xconnection.php';
session_start();

if (isset($_POST['submit'])) {
     $status =  $_POST["status"];
     $id = $_POST['id_contribution'];

    $update = $connection->query("UPDATE contribution SET status = '$status' WHERE id_contribution = '$id'");

    if ($update) {
        $_SESSION['status'] = "Contribution item status is Updated";
        $_SESSION['status_text'] = "" . mysqli_error($connection);
        $_SESSION['status_code'] = "success";
        header('Location: DonateItem.php');
    } else {
        $_SESSION['status'] = "An error occured.";
        $_SESSION['status_text'] = "" . mysqli_error($connection);
        $_SESSION['status_code'] = "warning";
        header('Location: DonateItem.php');
    }
    //$result = mysqli_query($connection, "SELECT * FROM donor");
    // include 'Xcloseconnection.php';
}
?>