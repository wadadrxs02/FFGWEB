<?php
           include('Xconnection.php');
           session_start();
       // Now we check if the data from the login form was submitted, isset() will check if the data exists.
       if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
       echo "<script type='text/javascript'>alert('Please fill both the username and password field!');
       window.location='signin.php';
       </script>";
       }

       // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
       if ($stmt = $connection->prepare('SELECT admin_id, password FROM login WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
       $stmt->store_result();
       
       if ($stmt->num_rows > 0) {
              $stmt->bind_result($admin_id, $password);
              $stmt->fetch();
              // Account exists, now we verify the password.
              // Note: remember to use password_hash in your registration file to store the hashed passwords.
              if ($_POST['password'] === $password) {
                     // Verification success! User has loggedin!
                     // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
                     session_regenerate_id();
                     $_SESSION['loggedin'] = TRUE;
                     $_SESSION['name'] = $_POST['username'];
                     $_SESSION['id'] = $admin_id;
                     header('Location: ffg_admin/index.php');
              } else {
                     echo 'Incorrect password!';
              }
       } else {
              echo 'Incorrect username!';
       }
       $stmt->close();

       }
/* working one
           $username = $_POST['username'];
           $password = $_POST['password'];

           $login = $connection->query("SELECT * FROM login WHERE username='$username' AND password='$password'");

           $fetch = $login->fetch_array();


           if($login->num_rows ==1)
           {
                  $_SESSION['admin_id'] = $fetch['admin_id'];
                  $_SESSION['username'] = $fetch['username'];
                  header('location:FFG_ADMIN/index.php');
                          
               }
          else
          {
               $_SESSION['error'] = '';
               echo "<script type='text/javascript'>alert('Email or password was incorrected.');
                 window.location='signin.php';
                 </script>";

          }
           
       
       
       
       ---------------------------------------------------------
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
               echo "<script type='text/javascript'>alert('Username or password was incorrected.');
                 window.location='loginas.php';
                 </script>";

          } } */

           
?>
