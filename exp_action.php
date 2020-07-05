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


$user_registration_query="insert into personal_info(fname,lname,address,city,state,email,phone,profile,zcode) values ('$fname','$lname','$address','$city','$state','$email','$phone','$profile','$zcode')";
$user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
$_SESSION['cId']=mysqli_insert_id($con); 