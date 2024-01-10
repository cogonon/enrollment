<?php
include "../server/conn.php";

$fname = $_POST['fname'];
$mName = $_POST['Mname'];
$lName = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date_birth = $_POST['dob'];
$province = $_POST['province'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$school = $_POST['school'];
$course = $_POST['course'];
$g_year = $_POST['gyear'];
$emergencyName = $_POST['emergencyName'];
$emergencyPhone = $_POST['emergencyPhone'];
$citizenship = $_POST['citizenship'];
$idNum = $_POST['idNum'];
$condition = $_POST['medical_condition'];
$file_name = $_FILES['file']['name'];
$file_type = $_FILES['file']['type'];
$file_data = $_FILES['file']['tmp_name'];

$file_upload_path = 'uploads/'.$file_name;
move_uploaded_file($file_data, $file_upload_path);
$additional = $_POST['additional_info'];

$enroll = mysqli_query($conn, "INSERT INTO `list`(`fName`, `mName`, `lName`, `email`, `phone`, `dBirth`, `province`, `city`, `zip`, `school`, `course`, `dateGraduate`, `Ename`, `Econtact`, `citizenship`, `idNum`, `medical`, `document`, `ftype`, `fdata`, `additional`) VALUES ('$fname','$mName','$lName','$email','$phone','$date_birth','$province','$city','$zip','$school','$course','$g_year','$emergencyName','$emergencyPhone','$citizenship','$idNum','$condition','$file_name','$file_type','$file_data','$additional')") or die('insert failed');

header("location: ../main/success.html");