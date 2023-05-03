<?php
include "connection.php";
echo $stu_name = mysqli_real_escape_string($conn, $_POST['fname']);
echo $stu_address = mysqli_real_escape_string($conn, $_POST['lname']);
echo $stu_class = mysqli_real_escape_string($conn, $_POST['username']);
echo $stu_phone = $_POST['passwor'];


$sql = "INSERT INTO user(fname,lname,username,passwor) VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");
header("location: http://localhost/4-chat-application/login.php");

mysqli_close($conn);
