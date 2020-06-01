<?php
    $connection = mysqli_connect('localhost', 'root', '', 'ffgdb'); 
    if(isset($_POST["id_homeless"]))  
    {  
         $query = "SELECT * FROM homeless WHERE id = '".$_POST["id_homeless"]."'";  
         $result = mysqli_query($connect, $query);  
         $row = mysqli_fetch_array($result);  
         echo json_encode($row);  
    }  
?>


