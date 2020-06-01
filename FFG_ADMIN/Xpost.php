<?php
include('Xconnection.php');
      session_start();
      
      if(isset($_POST['submit'])) {
      $title = $_POST['title'];
      $description = $_POST['description'];
      $datepost = $_POST['datepost'];
	 
      $image = $_FILES['image']['name'];
      $filetemp = $_FILES['image']['tmp_name'];
      $target = "../IMG/ImgPost/".basename($image);


      $sql ="INSERT INTO blog (title, description, date_blog, blog.image) VALUES ('$title','$description','$datepost','$image')";
      mysqli_query($connection, $sql);

      if (move_uploaded_file($filetemp, $target)) {
         $_SESSION['status'] = "New post has success to publish";
         $_SESSION['status_text'] = "" . mysqli_error($connection);
         $_SESSION['status_code'] = "success";
         header('Location: PostList.php');
     } else {
         $_SESSION['status'] = "An error occured.";
         $_SESSION['status_text'] = "" . mysqli_error($connection);
         $_SESSION['status_code'] = "warning";
         header('Location: PostList.php'); 
        
     }
      $result = mysqli_query($connection, "SELECT * FROM blog");
   }
?>
