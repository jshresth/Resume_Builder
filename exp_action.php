<?php
include "connection.php";
session_start();
/*$schoolname = $_POST['sname']*/
$cid=$_SESSION['cId'];
$ename= $_POST['ename'];
$title= $_POST['title'];

$city= $_POST['city'];
$state= $_POST['state'];
$desc= $_POST['desc'];


$user_registration_query="insert into job(cid,employer,title,city,state,description) values ('$cid','$ename','$title','$city','$state','$desc')";
$user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
?>
<meta http-equiv="refresh" content="3;url=WilliamSexysphere.php "/>