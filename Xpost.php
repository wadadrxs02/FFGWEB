<?php
include('Xconnection.php');
      session_start();
      
      if(isset($_POST['submit'])) {
      $title = $_POST['title'];
      $description = $_POST['description'];
      $datepost = $_POST['datepost'];
	 
      $image = $_FILES['image']['name'];
      $filetemp = $_FILES['image']['tmp_name'];
      $target = "ImgPost/".basename($image);


      $sql ="INSERT INTO blog(title, description, date_blog) VALUES ('$title','$description','$datepost')";
      $sql1 ="INSERT INTO image(image) VALUES ('$image')";


      mysqli_query($connection, $sql && $sql1);
     
           
      if  (move_uploaded_file($filetemp, $target))
      {			
           	echo "<script type='text/javascript'>alert('New post has success to publish');
                	window.location='PostList.php';</script>";
             
            }else {
         	echo "<script type='text/javascript'>alert('Error');
            window.location='PostList.php';</script>";
            
      }
      $result = mysqli_query($connection, "SELECT * FROM blog");
   }
?>
