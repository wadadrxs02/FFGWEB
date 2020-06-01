/*
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['email'], $_POST['password'])) {
       // Could not get the data that should have been sent.
       echo "<script type='text/javascript'>alert('Please fill both the username and password field!');
       window.location='signinD.php';
       </script>";
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
$stmt = $connection->prepare('SELECT id_donor, email, password FROM donor WHERE email = ?');
// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
$stmt->bind_param('s', $_POST['email']);
$stmt->execute();
$stmt->store_result(); // Store the result so we can check if the account exists in the database.
$stmt->bind_result($id_donor, $email, $password);

if ($stmt->num_rows == 1) {

       $stmt->fetch();
       // Account exists, now we verify the password.
       // Note: remember to use password_hash in your registration file to store the hashed passwords.
       if (password_verify($password, $password)) {

              $_SESSION['id_donor'] = $row['id_donor'];
              $_SESSION['email'] = $row['email'];
              header('location:ffg_donor/index.php');
       } else {
              $_SESSION = [];
              session_destroy();
              echo "<script type='text/javascript'>alert('password was incorrected.');
                     window.location='index.php';";
              echo "error :< "  . mysqli_error($connection);
       }
} else {
       echo "<script type='text/javascript'>alert('Zero [0] results. Nobody with that username and paasword')  window.location='index.php';</script>";
       echo "error :< "  . mysqli_error($connection);
       $_SESSION = [];
       session_destroy();
}
echo "<script type='text/javascript'>alert('failed');
                     window.location='index.php';";
echo "error :< "  . mysqli_error($connection);
$stmt->close();

 x working one  ---------------------------------------------------- */




/* x work
       
       if (isset ($_POST['submit'])){
          
           $email = $connection->real_escape_string($_POST['email']);
           $password = $connection->real_escape_string($_POST['password']);

         //  $login = $connection->query("SELECT * FROM login WHERE email='$email' AND password='$password'");
            //hashed password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

           $query = "SELECT * FROM donor WHERE email='$email' and password ='$hashed_password' ";
           $result = mysqli_query ($connection, $query);


	if ( mysqli_num_rows($result)>0){
		
		while($row = mysqli_fetch_assoc($result)) {
			
			$_SESSION['id_donor']=$row['id_donor'];
			$_SESSION['email']=$row['email'];
		}
		
		header( 'location:ffg_donor/Donation.php') ;
	}
	else {
		
	 echo "<script type='text/javascript'>alert('Email or password was incorrected.');
              window.location='index.php';
              </script>"  . mysqli_error($connection);
	}
} */
/*
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $connection->prepare("SELECT id_donor, email, password FROM donor WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $email, $pass);


if (mysqli_num_rows($stmt) == 1) {
       //found 1 person with that username
       $stmt->fetch();

       if (password_verify($password, $pass)) {
              header('location:ffg_donor/Donation.php');
              $_SESSION['email'] = $email;
              $_SESSION['id_donor'] = $id;
              exit;
       } else {
              $_SESSION = [];
              session_destroy();
              echo "<script type='text/javascript'>alert('password was incorrected.');
              window.location='index.php';";
       }
} else {
       echo "<script type='text/javascript'>alert('Zero [0] results. Nobody with that username and paasword')  window.location='index.php';</script>";
       $_SESSION = [];
       session_destroy();
} 
echo "<script type='text/javascript'>alert('failed');
              window.location='index.php';";

*/
/* ---------------------------------------------------------
$username = $_POST['username'];
$password = $_POST['password'];

$login = $connection->query("SELECT * FROM login WHERE username='$username' AND password='$password'");

$fetch = $login->fetch_array();

if($_SERVER["REQUEST_METHOD"]=="POST"){
$username = mysqli_real_escape_string($db,$_POST['username']);
$mypassword = mysqli_real_escape_string($db,$_POST['password']);


$sql = "SELECT admin_id FROM login WHERE username='$username' AND password='$password'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

if($count ==1)
{
session_register("username");
$_SESSION['login'] = $fetch['username'];
header('location:FFG_ADMIN/index.html');
}
else
{
$_SESSION['error'] = '';
echo "<script type='text/javascript'>
alert('Username or password was incorrected.');
window.location = 'loginas.php';
</script>";

} } */



<?php
include('Xconnection.php');
session_start();

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (isset($_POST[('email')]) && isset($_POST[('password')])) {

       //receive all the value in the form. initialize
       $email = $_POST['email'];
       $password = $_POST['password'];

       // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
       $query = "SELECT id_donor, email, password FROM donor WHERE email='$email'";
       $result = mysqli_query($connection, $query); //executes the SQL queries

       //returns the number of rows present in a result set.
       if (mysqli_num_rows($result) >0) {

              //Fetch a result row as an associative array
              while ($row = mysqli_fetch_assoc($result)) {

                     $db_email = $row['email']; //db email == form email 
                     $db_pass = password_verify($password, $row['password']); //Verifies that a password matches a hash.(password , hash pswd) 

                     //session variable created
                     $_SESSION['id_donor'] = $row['id_donor'];
                     $_SESSION['email'] = $row['email'];
              }
              header('location:ffg_donor/index.php');
       } else {

              session_destroy(); //destroy session
              echo "<script type='text/javascript'>alert('Email or password was incorrected.');
                     window.location='../index.php';";
              die();
       }
       session_destroy(); //destroy session if dont get the name
       echo "<script type='text/javascript'>alert('Please fill in the right');
                     window.location='../index.php';";
       die();
}
