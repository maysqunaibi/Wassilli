<?php
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $country = $_POST['country'];

    if($username != '' && $password != '' && $email != '' && $country != ''){
        $sql = "INSERT INTO users(username, password, email, country) VALUES('$username', '$password', '$email', '$country')";
        include_once('connection.php');
        $query = mysqli_query($connection, $sql) or die("Data insertion error");
        print($query);
        if($query){
            
            header("Location: ../views/index.php");
        }
    }else{
        header("Location: ../views/register.php");
        echo "Please Fill all the Feilds";
    }
}
?>