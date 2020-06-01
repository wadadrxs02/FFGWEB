<?php
if(!isset($_POST["submit"])){

echo "Error; you need to submit the form!";
}
$name=$_POST['name'];
$visitor_email =$_POST['email'];
$message= $_POST['message'];

if (empty($name)|| empty($visitor_email))
{
echo "Invalid Sender's Email";
exit;
}
$email_from ='nurawadah.ismail@gmail.com';
$email_subject ="New Form Submission";
$email_body ="You receive email from $name. \n". "Email Address : $visitor_email \n".
"Here is the message: \n $message".
$to = "nurawadah.ismail@gmail.com";
$header = "From: $email_from";

mail($to, $email_subject, $email_body, $header);
?>