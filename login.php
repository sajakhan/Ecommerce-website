<?php
include ('header1.php');

$host="localhost";
$user="root";
$password="";
$db="shopee";

$con=mysqli_connect($host,$user,$password);

mysqli_select_db($con,$db);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from user where name= '".$uname."' AND password='".$password."' limit 1";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){
 session_start();

//unset($_SESSION['un']);
$_SESSION["name"]=$uname;

header("Location:index.php");


    }
    else
    {
        echo "You have entered incorrect password no such user.create an account";
    }
}





?>






<!DOCTYPE html>
<html>
<head>
	<title>Mobile Shop</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap\js\bootstrap.min.js">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


  

<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">
<center><span style="font-weight: bold;font-size: 30px;">Sign In</span></center><br><br>
<div class="form-group log">
<form action="#" method="POST">

<label for="username">Username</label>
<input type="text" name="username" class="form-control" placeholder="Enter Username" required><br>
<label for="password">Password</label>
<input type="password" class="form-control"  name="password" placeholder="Enter Password" required><br>

<center><button type="submit" class="btn btn-success">Sign In</button></center>
  

</form>
    
</div><br><br>

</div>

       
    </div>       

    
<?php
// include footer.php file
include ('footer.php');
?>

</body>
</html>