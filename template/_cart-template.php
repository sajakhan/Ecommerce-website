<!-- Shopping cart section  -->
<?php
                      $host="localhost";
 $user="root";
 $password="";
 $db="shopee";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

      
  if (isset($_POST['delete-cart-submit']))
           {
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
           }
        // save for later
        if (isset($_POST['wishlist-submit']))
          {
             $Cart->saveForLater($_POST['item_id']);
          }
        //proceedtpbuy
         if(isset($_POST['pur']))
          {
             

            $itemm=$_POST['item_id'];
         $price=$_POST['price'];
        $id1 = $_SESSION["name"];
$queryuser="select * from user where name='$id1'";
$quser=mysqli_query($con,$queryuser);
$rowuser=mysqli_fetch_array($quser);
//print_r($rowuser);

$user=$rowuser["user_id"];
               $sql="insert into orderplace (user_id, item_id,amount ) values ('$user','$itemm','$price')";
    $check = mysqli_query($con,$sql);
            $q="select * from  product where item_id='$itemm'";
            $q1=mysqli_query($con,$q);
            
            $row=mysqli_fetch_array($q1);
             //print_r($row);
            $quann=$row["quantity"];
             
             print_r($quann);
            $res=$Cart->quan($quann);
          print_r($q); 
            if($res==0)
             {
                 $deletedrecord = $Cart->deleteProduct($_POST['item_id']);
                  header("location:admin-pro.php");
             }     
            else
             {
               $sql="UPDATE product SET quantity = '$res' WHERE `item_id` ='$itemm'";
               mysqli_query($con,$sql);
             }
        
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
             header("location:payment.php");
          } 
//                
    }
?>

<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                    foreach ($product->getData('cart') as $item) :
                        $cart = $product->getProduct($item['item_id']);
                        $subTotal[] = array_map(function ($item){
                ?>
                <!-- cart item -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                        <!-- product rating -->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                        </div>
                        <!--  !product rating-->

                        <!-- product qty -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                     <input type="hidden" value="<?php echo $item['quantity'] ?? 0; ?>" name="quantity">

                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                            </form>
                           

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">

                                <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger">Save for Later</button>
                            </form>
                               
                                

                        </div>
                        <!-- !product qty -->

                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            $<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                        </div>
                    </div>
                </div>
                <!-- !cart item -->
                <?php
                            return $item['item_price'];
                        }, $cart); // closing array_map function
                    endforeach;
                ?>
            </div>
            <!-- subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                        
                          <form method="post">
                             <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
<input type="hidden" value="<?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?>" name="price">
                                <button type="submit" name="pur" class="btn btn-warning mt-3" >Proceed to BUY</button>
                            </form>

                    </div>
                </div>
            </div>
            <!-- !subtotal section-->
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>
<!-- !Shopping cart section  -->