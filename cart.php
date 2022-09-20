<?php 

session_start();


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
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>SubTotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                      
                    <?php
                        
                        $i = 1;
            
                        if(isset($_SESSION['cart'])){

                            foreach($_SESSION['cart'] as $key => $value){

                                

                            ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $value['ProductName']; ?></td>

                                        <td>$<?php echo $value['ProductPrice']; ?><input type='hidden' class='iprice' value='<?php echo $value['ProductPrice']; ?>'></td>

                                        <td><input type='number' class='iquantity' onchange="subTotal()" value='1' min='1' max= '10'></td>

                                        <td class='itotal'></td>

                                        <td>
                                          <form action="manage_cart.php" method="post">
                                            <button class='danger-btn'name='remove'>Remove </button>
                                            <input type='hidden' name='ProductName' value='<?php echo $value['ProductName']; ?>'>
                                          </form>
                                        </td>

                                    <tr>

                                <?php

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
                            <h6 id="gtotal"></h6>
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
                            <button class="btn"> Checkout </button>
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