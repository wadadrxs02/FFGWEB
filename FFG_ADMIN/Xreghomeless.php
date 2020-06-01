<?php
include('Xconnection.php');
session_start();
    
if(isset($_POST['submit'])) {
      $name = $_POST['name'];
      $icnumber = $_POST['icnumber'];
      $phoneNum = $_POST['phoneNum'];
      $gender = $_POST['gender'];
      $dob = $_POST['dob'];
      $race = $_POST['race'];
      $location = $_POST['location'];
      $medCondition = $_POST['medCondition'];
      $datereg = $_POST['datereg'];
      
      $image = $_FILES['image']['name'];
      $filetemp = $_FILES['image']['tmp_name'];
      $target = "imghomeless/".basename($image);

      $sql = "INSERT INTO homeless(name, icnumber, phoneNum, gender, dob, race, location, medCondition, datereg, homeless.image)
      VALUES ('$name', '$icnumber', '$phoneNum', '$gender', '$dob', '$race', '$location', '$medCondition', '$datereg', '$image')";

            mysqli_query($connection, $sql);
/*           
      if  (move_uploaded_file($filetemp, $target))
      {				
            echo "<script type='text/javascript'>alert('Homeless record has success to save');
                	window.location='Listhomeless.php';</script>";
      } else {
         	echo "<script type='text/javascript'>alert('Error');
              	window.location='Listhomeless.php';</script>";
      } */
      

      if (move_uploaded_file($filetemp, $target)) {
            $_SESSION['status'] = "Homeless record has success to save";
            $_SESSION['status_text'] = "" . mysqli_error($connection);
            $_SESSION['status_code'] = "success";
            header('Location: Listhomeless.php');
        } else {
            $_SESSION['status'] = "An error occured.";
            $_SESSION['status_text'] = "" . mysqli_error($connection);
            $_SESSION['status_code'] = "warning";
            header('Location: Listhomeless.php'); 
           
        }

      $result = mysqli_query($connection, "SELECT * FROM homeless");
}
?>