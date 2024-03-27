<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "manikantaperniede400@mail.com";
$subject = "Mail From Incubation website";
$txt ="Name = ". $name ."\r\n  Email Address = " . $email . "\r\n  Mobile Number = " . $mobile ."\r\n  Email Subject = " . $subject . "\r\n Idea =" . $message;
$headers = "From: noreply@incubationNITP.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>