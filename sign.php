       
	<?php
session_start();
// include footer.php file
include ('header1.php');

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
<center><span style="font-weight: bold;font-size: 30px;">Sign Up</span></center><br><br>
<div class="form-group">
<form action="action.php" name="f1" method="POST">

<label for="email">Email</label>
<input type="email" name="email" class="form-control" placeholder="Enter Email" required><br>
<label for="username">Username</label>
<input type="text" name="uname" class="form-control" placeholder="Enter Username" required><br>
<label for="password">Password</label>
<input type="password" class="form-control"  name="password" placeholder="Enter Password" required><br>
<label for="phone">Phone Number</label>
<input type="text" name="phone" class="form-control" placeholder="Enter Phone" required><br>

<center><button type="submit" class="btn btn-success" href="index.php">Sign Up</button></center>
  

</form>
</div>
</div>
    </div>
 	
       
	<?php
// include footer.php file
include ('footer.php');

?>         

   
</body>
</html>