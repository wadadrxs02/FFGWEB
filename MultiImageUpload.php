//create a folder called IMG in the root, also create db with table name upload_data & two fields id, image

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Learning Advance</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple/>
    <input type="submit"/>
</form>
</body>
</html>


<?php
$link = mysql_connect('localhost', 'root', '')
    or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('ffgdb') or die('Could not select database');
// $query1 = 'Insert into upload_data values("",1,"two","three","four")';
// mysql_query($query1);
// 
$imageData = array();


if(isset($_FILES['files'])){
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$image = $key.$_FILES['files']['name'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
        if($file_size > 2097152){
			$errors[]='File size must be less than 2 MB';
        }

        
        array_push($imageData, $image);

       
        $desired_dir="IMG";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$image)==false){
                move_uploaded_file($file_tmp,"IMG/".$image);
            }else{									//rename the file if another one exist
                $new_dir="IMG/".$image.time();
                 rename($file_tmp,$new_dir) ;				
            }
            		
        }else{
                print_r($errors);
        }
    }
	if(empty($error)){
		//echo "Success";
		//print_r($imageData);
		//echo sizeof($imageData);
		//for($i=0;$i<sizeof($imageData);$i++){
		//	echo $imageData[$i];			
		//}
		$imgDt = implode("|", $imageData);
		 $query="INSERT into image (`image`) VALUES('$imgDt'); ";
		// mysql_query($query);	
	}
}

$query1 = "SELECT  `image` 
FROM  `image` 
WHERE id_image =29
";

$result = mysql_query($query1);

//print_r(mysql_fetch_row($result));
//
$row = mysql_fetch_row($result);
echo $row[0];
echo "<br/>";
echo "<br/>";



//print_r(explode("|", $row[0]));

$source = explode("|", $row[0]);
//echo count($source);

for($i = 0; $i < count($source); $i++){
	echo "$source[$i]";
	echo "<img height='20%' width='20%' src='IMG/$source[$i]'/>";
}


?>