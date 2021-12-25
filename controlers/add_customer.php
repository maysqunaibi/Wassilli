<?php
    include("connection.php");
      $customerNumber = rand(10000,800000);
      $customerName = $_POST['customerName'];
      $city = $_POST['city'];
      $country = $_POST['country'];
      $salesRepEmployeeNumber = $_POST['salesRepEmployeeNumber'];
      $creditLimit = $_POST['creditLimit'];
      if(!empty($customerName) && !empty($city) && !empty($country) && !empty($salesRepEmployeeNumber && !empty($creditLimit))){
          $query = "INSERT INTO customers(customerNumber,customerName,city,country,salesRepEmployeeNumber,creditLimit) 
          VALUES('$customerNumber','$customerName','$city','$country','$salesRepEmployeeNumber','$creditLimit')";
          $res = mysqli_query($connection,$query);
            print($res);
          if($res){
            echo "";
          }

      }
?>
