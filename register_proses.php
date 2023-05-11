<?php 
    session_start();

    include 'koneksi.php';

    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $sql        = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $query      = mysqli_query($connect, $sql);

    $cek        = mysqli_num_rows($query);

    if($cek>0){
        header("location: register.php");
    }
    else{
        $sql        = "INSERT INTO user(username, password) VALUES ('$username', '$password')";
        $query      = mysqli_query($connect, $sql) or die(mysqli_error($connect));
        if($query){
            $_SESSION['username']   = $username;
            header("location: login.php?message=register");
        }
    }
?>