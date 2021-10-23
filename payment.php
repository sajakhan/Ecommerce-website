       
	<?php

// include footer.php file
include ('header.php');
 $host="localhost";
 $user="root";
 $password="";
 $db="shopee";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['pay'])){
             $card=$_POST['cardno'];
             $pinn=$_POST['pin'];

        $id1 = $_SESSION["name"];
$queryuser="select * from user where name='$id1'";
$quser=mysqli_query($con,$queryuser);
$rowuser=mysqli_fetch_array($quser);
//print_r($rowuser);

$user=$rowuser["user_id"];
            print_r($user);
 $sql="insert into payment (user_id, creditcard_no,pin ) values ('$user','$card','$pinn')";
    $check = mysqli_query($con,$sql);
        
            header("location:payok.php");
            
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
<center><span style="font-weight: bold;font-size: 30px;">Sign Up</span></center><br><br>
<div class="form-group">
   <form accept-charset="UTF-8"  class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input name="cardno" autocomplete='off' class='form-control card-number' size='20' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input name="pin" autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12'>
<!--
                <div class='form-control total btn btn-info'>
                  Total:
                  <span class='amount'>$300</span>
                </div>
-->
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                <button name="pay" class='form-control btn btn-primary submit-button' type='submit'>Pay »</button>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.
                </div>
              </div>
            </div>
          </form>
</div>
</div>
    </div>
 	
    </body>
	<?php
// include footer.php file
include ('footer.php');

?>         
