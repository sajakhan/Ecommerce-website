<?php
include("header1.php");
require_once("config.php");

$user=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];

$query="INSERT into user(name,password,email,phone) VALUES('$user','$password','$email','$phone')";
$sq=mysqli_query($con,$query);



if($sq)
{
echo("account created successfully");
}
else
{
	echo("Failed<br>");
}






?>