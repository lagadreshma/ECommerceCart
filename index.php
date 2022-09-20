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

    <?php require_once("header.php"); ?>


    <div class="container">
    <div class="row">
              

                <div class="col grid3">
                <form method="post" action="manage_cart.php">
                  <div class="card shadow">
                    <div>
                      <img src="./upload/product-1.jpg" alt="image">
                    </div>
                  <div class="card-body">
                    <h4 class="card-title">Red TShirt</h4>
                    <h6>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </h6>
                    <h5>
                      <small><s>$50</s></small>
                      <span class="price">$25</span>
                    </h5>

                    <button type="submit" name="add" class="btn">Add To Cart <i class="fas fa-shopping-cart"></i></button>
                    <input type="hidden" name="ProductName" value="Red TShirt" >
                    <input type="hidden" name="ProductPrice" value="25" >

    
                  </div>
                  </div>
                </form>
                </div>

                <div class="col grid3">
                <form method="post" action="manage_cart.php">
                  <div class="card shadow">
                    <div>
                      <img src="./upload/product-2.jpg" alt="image">
                    </div>
                  <div class="card-body">
                    <h4 class="card-title"> Black Shoes </h4>
                    <h6>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </h6>
                    <h5>
                      <small><s>$100</s></small>
                      <span class="price">$75</span>
                    </h5>

                    <button type="submit" name="add" class="btn">Add To Cart <i class="fas fa-shopping-cart"></i></button>
                    <input type="hidden" name="ProductName" value="Black Shoes" >
                    <input type="hidden" name="ProductPrice" value="75" >
    
                  </div>
                  </div>
                </form>
                </div>

                <div class="col grid3">
                <form method="post" action="manage_cart.php">
                  <div class="card shadow">
                    <div>
                      <img src="./upload/product-3.jpg" alt="image">
                    </div>
                  <div class="card-body">
                    <h4 class="card-title"> Gray Pant </h4>
                    <h6>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </h6>
                    <h5>
                      <small><s>$75</s></small>
                      <span class="price">$50</span>
                    </h5>

                    <button type="submit" name="add" class="btn">Add To Cart <i class="fas fa-shopping-cart"></i></button>
                    <input type="hidden" name="ProductName" value="Gray Pant" >
                    <input type="hidden" name="ProductPrice" value="50" >
    
                  </div>
                  </div>
                </form>
                </div>

                <div class="col grid3">
                <form method="post" action="manage_cart.php">
                  <div class="card shadow">
                    <div>
                      <img src="./upload/product-4.jpg" alt="image">
                    </div>
                  <div class="card-body">
                    <h4 class="card-title">Black TShirt</h4>
                    <h6>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </h6>
                    <h5>
                      <small><s>$50</s></small>
                      <span class="price">$25</span>
                    </h5>

                    <button type="submit" name="add" class="btn">Add To Cart <i class="fas fa-shopping-cart"></i></button>
                    <input type="hidden" name="ProductName" value="Black TShirt" >
                    <input type="hidden" name="ProductPrice" value="25" >
    
                  </div>
                  </div>
                </form>
                </div>

    

            </div>
        </div>


    </body>
</html>