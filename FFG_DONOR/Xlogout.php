<?php
 /* session_start();
  if (isset($_SESSION['username']))
  {
      unset($_SESSION['username']);
  }
   echo 'You have cleaned session';
   header('Refresh: 2; URL = FFG_MOBIRISE/index.php');
   
   echo "<script type='text/javascript'>alert('You are now sign out from your account');
                    window.location='../index.php';
                    </script>"; */


   include('../Xconnection.php');
	session_start();
	session_destroy();

    header('Location: ../index.php');
        

?>