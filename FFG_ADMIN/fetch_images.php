<?php

//fetch_images.php

include('Xconnection.php');

$query = "SELECT * FROM image ORDER BY id_image DESC";

$statement = $connect->prepare($query);

$output = '<div class="row">';

if($statement->execute())
{
 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $output .= '
  <div class="col-md-2" style="margin-bottom:16px;">
   <img src="data:images/jpeg;base64,'.base64_encode($row['image'] ).'" class="img-thumbnail" />
  </div>
  ';
 }
}

$output .= '</div>';

echo $output;

?>
