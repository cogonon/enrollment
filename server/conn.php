<?php
$server = "localhost";
$uname = "root";
$psw = "";
$dbName = "krishia";

$conn = mysqli_connect($server, $uname, $psw, $dbName);

//Check if connect

if(mysqli_connect_errno()){
    echo "connection failed";
} else{
    echo "Connected successfuly";
}