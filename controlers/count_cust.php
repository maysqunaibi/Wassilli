<?php
    include("connection.php");
    if(isset($_POST['min']) && isset($_POST['max'])){
        $query = "SELECT COUNT(customers.customerNumber) FROM customers WHERE creditLimit BETWEEN ".$_POST['min']." AND ".$_POST['max'];
    }
    $res = mysqli_query($connection,$query) or die("Error in Selecting " . mysqli_error($connection));
   
   
    $row = $res->fetch_row();
    echo 'The number of customers with this rang is: ', $row[0];
    
?>