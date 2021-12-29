<?php
    include("connection.php");
      $productCode = $_POST['productCode'];
      $productName = $_POST['productName'];
      $productLine  = $_POST['productLine '];
      $productDescription = $_POST['productDescription'];
      $quantityInStock = $_POST['quantityInStock'];
      $buyPrice = $_POST['buyPrice'];
      if(!empty($productCode) && !empty($productName) && !empty($productLine) && !empty($productDescription) && !empty($quantityInStock)&& !empty($buyPrice)){
          $query = "INSERT INTO products(productCode,productName,productLine,productDescription,quantityInStock,buyPrice) 
          VALUES('$productCode','$productName','$productLine','$productDescription','$quantityInStock','$buyPrice')";
          $res = mysqli_query($connection,$query);
            print($res);
          if($res){
            echo "";
          }

      }
?>
