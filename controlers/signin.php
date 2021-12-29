<?php
session_start();
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql ="SELECT * FROM users WHERE username='$username' && password='$password'";
        require_once('connection.php');
        $query = mysqli_query($connection, $sql) or die("Error in log in -_-");
        $count = mysqli_num_rows($query);
        if($count == 1){
            $_SESSION['user'] = $username;
            header("Location: ../views/index.php");
        }
        

    }
?>