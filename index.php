<?php

    include ('header.php');

if($_SESSION["name"]==true){
    

    // include header.php file


    /*  include banner area  */
        include ('Template/_banner-area.php');
    /*  include banner area  */

    /*  include top sale section */
        include ('Template/_top-sale.php');
    /*  include top sale section */

    /*  include special price section  */
         include ('Template/_special-price.php');
    /*  include special price section  */

    /*  include banner ads  */
        include ('Template/_banner-ads.php');
    /*  include banner ads  */

    /*  include new phones section  */
        include ('Template/_new-phones.php');
    /*  include new phones section  */
}
else{
    header("location:login.php");
}
// include footer.php file
include ('footer.php');
?>