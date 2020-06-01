  <?php  
include('Xconnection.php');  
session_start();

if (isset($_POST['submit'])) { 
      $id_homeless = mysqli_real_escape_string($connection, $_POST["id_homeless"]);  
      $name = mysqli_real_escape_string($connection, $_POST["name"]);  
      $icnumber = mysqli_real_escape_string($connection, $_POST["icnumber"]);  
      $phoneNum = mysqli_real_escape_string($connection, $_POST["phoneNum"]); 
      $gender = mysqli_real_escape_string($connection, $_POST["gender"]);
      $dob = mysqli_real_escape_string($connection, $_POST["dob"]);
      $race = mysqli_real_escape_string($connection, $_POST["race"]);  
      $location = mysqli_real_escape_string($connection, $_POST["location"]);  
      $medCondition = mysqli_real_escape_string($connection, $_POST["medCondition"]);
      

     /* $image = $_FILES['image']['name'];
      $filetemp = $_FILES['image']['tmp_name'];
      $target = "imghomeless/".basename($image); */
      //homeless.image = '$image', 

     // if($_POST["id_homeless"] != '')  
      //{  
         // $update = $connection->query("UPDATE contribution SET status = '$status' WHERE id_contribution = '$id'");

           $query = $connection->query("UPDATE homeless SET name='$name', icnumber='$icnumber',   
           phoneNum='$phoneNum', gender = '$gender', dob = '$dob', race = '$race', location = '$location',
           medCondition = '$medCondition' WHERE id_homeless='$id_homeless'");  
    
      if ($query) {
          $_SESSION['status'] = "Homeless information is Updated";
          $_SESSION['status_text'] = "" . mysqli_error($connection);
          $_SESSION['status_code'] = "success";
          header('Location: Listhomeless.php');
      } else {
          $_SESSION['status'] = "An error occured.";
          $_SESSION['status_text'] = "" . mysqli_error($connection);
          $_SESSION['status_code'] = "warning";
          header('Location: Listhomeless.php'); 
         
      }
 }  
 ?>