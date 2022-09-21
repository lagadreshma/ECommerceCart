<?php 

session_start();
require_once("connect.php");




if(isset($_POST['remove'])){

    if(isset($_SESSION['cart'])){

        $selectQuery = "select * from producttb";

        $query = mysqli_query($conn,$selectQuery);

        $rows = mysqli_num_rows($query);

        while($result = mysqli_fetch_assoc($query)){

            foreach($_SESSION['cart'] as $key => $value){

               if($value['product_id'] == $_POST['product_id']){

                 unset($_SESSION['cart'][$key]);
                 $_SESSION['cart'] = array_values($_SESSION['cart']);

                 echo "
                    <script> 
                    alert('Product is Removed from Cart...!');
                    window.location.href = 'cart.php';
                    </script>
                 ";
               }
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Shopping Cart </title>

        <!-- CSS File Link -->
        <link rel="stylesheet" href="style.css">

        <!-- Font awesome icon link -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            rel="stylesheet">


    </head>
    <body>

    <?php require_once("header.php");   ?>

     <div class="small-container">

        <div class="grid12">
            <h1> My Cart <h1>
        </div>

        <div class="cart-row">

            <div class="grid8">

            <table class="table">
                <thead>
                    <tr>
                        <th>Sr.no</th>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th> SubTotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                 <?php

                  $i = 1;

                  if(isset($_SESSION['cart'])){

                     $product_id = array_column($_SESSION['cart'],'product_id');

                     $selectQuery = "select * from producttb";

                     $query = mysqli_query($conn,$selectQuery);

                     $rows = mysqli_num_rows($query);

                     while($result = mysqli_fetch_assoc($query)){

                        foreach($product_id as $id){

                            if($result['id'] == $id){


                                ?>

                                    <tr>
                                    <form action="cart.php" method="post">
                                        <td><?php echo $i++; ?></td>
                                        <td><img src="<?php echo $result['product_img']; ?>"></td>
                                        <td><?php echo $result['product_name'];?></td>
                                        <td>$<?php echo $result['product_price'];?><input type="hidden" class="iprice" value="<?php echo $result['product_price'];?>"></td>
                                        <td><input type="number" class="iquantity" onchange="subTotal()" value="1" min="1" max= "10"></td>
                                        <td class="itotal"></td>
                                        <td>
                                            <button class="danger-btn"name="remove">Remove </button>
                                            <input type="hidden" name="product_id" value="<?php echo $result['id']; ?>" >
                                        </td>
                                    </form>
                                    <tr>
                                


                                <?php


                            }

                        }                       

                     }
                  }else{
                    ?>

                    <tr>
                        <td colspan="7"> <?php echo "<h6> Cart Empty </h6>"; ?> </td>
                    </tr>

                    <?php
                  }
                 ?>
                </tbody>
            </table>
                
            </div>

            <div class="grid4">
                <div class="checkout">
                    <h5> PRICE DETAILS </h5>
                    <hr>
                    <div class="price-details">
                        <div class="price1">
                            <?php

                              if(isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo "<h6>Price($count items)</h6>";
                              }else{
                                echo "<h6>Price(0 items)</h6>";
                              }
                            ?>

                            <h6> Delivery Charges </h6>
                            <hr>
                            <h6> Amount Payable </h6>

                        </div>
                        <div class="price2">
                            <h6 id = "gtotal"></h6>
                            <h6> FREE </h6>
                            <hr>
                            <h6></h6>
                        </div>
                    </div>
                    <br>
                        <from action="" method="post">
                            <div class="payment-input">
                                <input type="radio" name="pay" value="delivery" > Cash on Delivery
                                <br>
                                <input type="radio" name="pay" value="online" checked> Online Payment
                            </div>
                            <br>
                            <button class="btn"> Checkout Now </button>
                        </from>

                </div>
            </div>

        </div>
     </div>


     <script>

        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal(){

            gt =0;

           for(var i = 0; i < iprice.length; i++){

              itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
              
              gt = gt +(iprice[i].value)*(iquantity[i].value);

           }
           gtotal.innerText = gt;

        }

        subTotal();
        
     </script>


    </body>
</html>
