<?php
include "connection.php";
session_start();
$cid= $_SESSION['cId'];
$school= $_POST['school'];
$city= $_POST['city'];
$state= $_POST['state'];
$study= $_POST['study'];

$user_registration_query="insert into education(cid,name,city, state,course) values ('$cid','$school','$city','$state','$study')";
$user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
?>
<meta http-equiv="refresh" content="3;url=skills.html" />
