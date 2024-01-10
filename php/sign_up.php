<?php
include "../server/conn.php";

$uname = $_POST['username'];
$email = $_POST['email'];
$psw = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users");
$row = mysqli_fetch_assoc($query);

if($uname == $row['username']){
    header("location: ../sign_up/index.php?err=username already Exist");
} else{
    $insert = mysqli_query($conn, "INSERT INTO `users`(`email`, `username`, `password`) VALUES ('$email', '$uname',  '$psw')") or die('insert failed');

    header("location: ../index.php?succ=Registered successfull");
}