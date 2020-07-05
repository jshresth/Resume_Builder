<?php
include "connection.php";

$school= $_POST['school'];
$city= $_POST['city'];
$state= $_POST['state'];
$study= $_POST['study'];

$user_registration_query="insert into education(school,city, state,degree, study, grad_date,attend) values ('$school','$city','$state','$study,null)";
$user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
?>
<meta http-equiv="refresh" content="3;url=skills.html" />
