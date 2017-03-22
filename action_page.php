<?php 
echo $firstname=$_POST['firstname'];
echo $email= $_POST['lastname'];
echo $feedback= $_POST['feedback'];
$to = "krinajoshi@rocketmail.com";
$subject = "Feedback:NkWorlds";
$txt = "Name: ".$firstname. "\r\n";
$txt .= "Email: ". $email . "\r\n";
$txt .= "Feedback: ".$feedback. "\r\n";

$headers = "From: info@nkworlds.com";

mail($to,$subject,$txt,$headers);
?>