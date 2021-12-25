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
            // unset($_POST['add_user_customer']);
            // unset($_POST['customerName']);
            // unset($_POST['city']);
            // unset($_POST['country']);
            // unset($_POST['salesRepEmployeeNumber']);
            // unset($_POST['creditLimit']);
            // print("customer inserted");
            echo "";
          }

      }
      
    

?>
