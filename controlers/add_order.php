<?php
    include("connection.php");
      $orderNumber = rand(20000,30000);
      $orderDate = $_POST['orderDate'];
      $customerNumber = $_POST['customerNumber'];
      if(!empty($orderNumber) && !empty($orderDate) && !empty($customerNumber)){
          $query = "INSERT INTO orders(orderNumber,orderDate,customerNumber) 
          VALUES('$orderNumber','$orderDate','$customerNumber')";
          $res = mysqli_query($connection,$query);
            print($res);
          if($res){
            echo "";
          }

      }
?>
