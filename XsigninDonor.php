<?php
include('Xconnection.php');
session_start();

if (isset($_POST['loginD'])) {
       // Now we check if the data from the login form was submitted, isset() will check if the data exists.
       if (isset($_POST[('email')]) && isset($_POST[('password')])) {

              //receive all the value in the form. initialize
              $email = $_POST['email'];
              $password = $_POST['password'];

              // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
              $query = $connection->query("SELECT id_donor, email, password FROM donor WHERE email='$email'");
              $row = $query->fetch_array();

              $db_email = $row['email']; //db email == form email 
              $db_pass = password_verify($password, $row['password']); //Verifies that a password matches a hash.(password , hash pswd) 

              //Fetch a result row as an associative array
              if ($email == $db_email && $db_pass) {

                     //session variable created
                     $_SESSION['id_donor'] = $row['id_donor'];
                     $_SESSION['email'] = $row['email'];
                     header('location:ffg_donor/index.php');
              } else {

                     session_destroy();
                     echo "<script type='text/javascript'>alert('Email or password was incorrected.');
                     window.location='./index.php'</script>";
                     // header('location:ffg_donor/index.php');
              }
              echo "error 2 :< "  . mysqli_error($connection);
              echo "<script type='text/javascript'>alert('Email or password was incorrected.');
       window.location='../index.php'</script>";
       }
}
