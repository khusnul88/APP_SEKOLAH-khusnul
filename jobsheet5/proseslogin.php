<?php
session_start();
include_once('config.php');
if(isset($_POST['login'])){
    extract($_POST);
    $user = mysqli_query($conn,"select * from tbuser where username='$username'");
    $data = mysql_feth_array($user);
    if(password_verify($password,$data['password'])){
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama_user'] = $data['nama_user'];
        $_SESSION['iduser'] = $data['iduser'];
        header('location:index.php');
    }elsee[
        header('location:login.php');

    }
    
}