<?php

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){

   if(isset($_POST['add'])){

      if(isset($_SESSION['cart'])){

        
        $myproducts = array_column($_SESSION['cart'],'ProductName');
        if(in_array($_POST['ProductName'],$myproducts)){

           echo "<script> 
                   alert('Product is already added in Cart...!');
                   window.location.href = 'index.php';
                 </script>";

        }else{

          $count = count($_SESSION['cart']);
          $_SESSION['cart'][$count] = array('ProductName'=>$_POST['ProductName'], 'ProductPrice'=>$_POST['ProductPrice'], 'ProductQuantity'=>1);

          echo "<script> 
                   window.location.href = 'index.php';
                </script>";

        }

      }else{

        $_SESSION['cart'][0] = array('ProductName'=>$_POST['ProductName'], 'ProductPrice'=>$_POST['ProductPrice'], 'ProductQuantity'=>1);

        echo "<script> 
                   window.location.href = 'index.php';
              </script>";

      }

   }

   if(isset($_POST['remove'])){

      foreach($_SESSION['cart'] as $key => $value){

         if($value['ProductName'] == $_POST['ProductName']){

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

?>