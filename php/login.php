<?php
include "../server/conn.php";

$uname = $_POST['uname'];
$psw = $_POST['psw'];

$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$uname' AND `password` = '$psw'");

if (mysqli_num_rows($query) > 0) {
    
    header("location: ../main/index.html");

} else{
    header("location: ../index.php?err=Username or password incorrect");
}