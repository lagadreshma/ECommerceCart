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

   <header id="header">
     <nav class="navbar">

        <div class="navbar-title">
            <a href="index.php">
                <h3 class="title">
                    <i class="fas fa-shopping-basket"></i>Shopping Cart
                </h3>
            </a>
        </div>

        <div class="navbar-cart">
            <a href="cart.php">
                <h6>
                    <i class="fas fa-shopping-cart"></i>Cart
                    <?php
                    
                      if(isset($_SESSION['cart'])){

                        $count = count($_SESSION['cart']);
                        echo "<span id='cart_count'>$count</span>";

                      }else{

                        echo "<span id='cart_count'>0</span>";

                      }
                    
                    ?>
                </h6>
            </a>
        </div>

     </nav>
   </header>

</body>
</html>
