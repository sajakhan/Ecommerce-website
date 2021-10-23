
<?php
 include ('header1.php');
//
$host="localhost";
$user="root";
$password="";
$db="shopee";

$con=mysqli_connect($host,$user,$password);

mysqli_select_db($con,$db);

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-product'])){
        
         $itemm=$_POST['itemid'];
  
    
            $deletedrecord = $Cart->deleteProduct($_POST['itemid']);
            header("location:admin-pro.php");

      
    }
        if(isset($_POST['inc-product'])){
             $itemm=$_POST['itemid'];
         $amount=$_POST['quantity'];

            $q="select * from  product where item_id='$itemm'";
$q1=mysqli_query($con,$q);
$row=mysqli_fetch_array($q1);
//print_r($row);

$quann=$row["quantity"]; 
            $res=$Cart->quanadd($quann,$amount);
              $sql="UPDATE product SET quantity = '$res' WHERE `item_id` ='$itemm'";
            mysqli_query($con,$sql);
        }
         if (isset($_POST['add-admin'])){
//         $i=$_POST['id'];
         $user=$_POST['username'];
         $ps=$_POST['password'];
             $sql="insert into admin ( user, pass) values ('$user','$ps');";
            mysqli_query($con,$sql);
        
    }
         if (isset($_POST['add-product'])){
         $id=$_POST['itemid'];
         $brand=$_POST['itembrand'];
         $name=$_POST['itemname'];
          $price=$_POST['itemprice'];
         $img=$_POST['itemimage'];
         $date=$_POST['itemregister'];
         $quan=$_POST['quantity'];

             $sql="insert into product ( item_id, item_brand, item_name, item_price, item_image,item_register,quantity) values ('$id','$brand','$name','$price','$img','$date','$quan');";
            mysqli_query($con,$sql);
        
    }
         if (isset($_POST['delete-admin'])){
         $item=$_POST['adminid'];
        $deletedrecord = $Cart->deleteadmin($_POST['adminid']);
    }
         if(isset($_POST['inc-price'])){
             $itemm=$_POST['itemid'];
         $amount=$_POST['price'];

            $q="select * from  product where item_id='$itemm'";
$q1=mysqli_query($con,$q);
$row=mysqli_fetch_array($q1);
//print_r($row);

$quann=$row["item_price"]; 
            $res=$Cart->quanadd($quann,$amount);
              $sql="UPDATE product SET item_price = '$res' WHERE `item_id` ='$itemm'";
            mysqli_query($con,$sql);
        }
}
   










?>

<style>
    body{
        padding:10px;
        text-align: center;
    }
    p{
        font-size:20px;
    }
    .col1{
        text-align: left;
    }
</style>


<body>
<p>you have logged in</p>

    <h1>ADMIN PANEL</h1>
    <div class="col1">
<p>enter item id to delete the product<p>
                      <form method="post">
                                 <input type="number" class="form-control" placeholder="item_id" name="itemid">
                                <button type="submit" name="delete-product" class="btn text-danger px-3 border-right">Delete</button>
                            </form>
        </div>
      <div class="col1">
<p>enter item id of product you want to increase stock of<p>
                      <form method="post">
                                 <input type="number" class="form-control" placeholder="item_id" name="itemid">
                                 <input type="number" class="form-control" placeholder="amount" name="quantity">

                                <button type="submit" name="inc-product" class="btn text-danger px-3 border-right">increase</button>
                            </form>
        </div>
         <div class="col1">
<p>enter item id of product you want to increase price of<p>
                      <form method="post">
                                 <input type="number" class="form-control" placeholder="item_id" name="itemid">
                                 <input type="number" class="form-control" placeholder="amount" name="price">

                                <button type="submit" name="inc-price" class="btn text-danger px-3 border-right">increase</button>
                            </form>
        </div>
    <br>
    
       <div class="col1">
<p>enter admin id to delete a admin<p>
                      <form method="post">
                                 <input type="number" class="form-control" placeholder="id" name="adminid">
                                <button type="submit" name="delete-admin" class="btn text-danger px-3 border-right">Delete</button>
                            </form>
        </div>
    <br>
    <br>
    <div class="col1">
    <p>Add another admin<p>

      <form action="#" method="post">
<!--
 <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="number" class="form-control" name="id" placeholder="id">
        </div>
-->

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Username" name="username">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
          

        <button type="submit" name="add-admin" class="float">add</button>
       </form>
    
    
    </div>
    <br>
    
    <div class="col1">
    <p>Add another product<p>

      <form action="#" method="post">
 <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="number" class="form-control" name="itemid" placeholder="book id">
        </div>

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Genre" name="itembrand">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="text" class="form-control" name="itemname" placeholder="book name">
        </div>
           <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="number" class="form-control" name="itemprice" placeholder=" price">
        </div>
           <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="text" class="form-control" name="itemimage" placeholder="image link">
        </div>
           <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
               <p>item register date</p>
          <input type="date" class="form-control" name="itemregister" placeholder="register date">
        </div>
            <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="number" class="form-control" name="quantity" placeholder="quantity">
        </div>
          

        <button type="submit" name="add-product" class="float">add</button>
       </form>
    
    
    </div>

    </body>