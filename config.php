<?php

$host="localhost";
$user="root";
$pass="";
$db="shopee";

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{

	echo("Not Connected<br>".mysql_error());
}
else
{
	//echo("Connected");
}