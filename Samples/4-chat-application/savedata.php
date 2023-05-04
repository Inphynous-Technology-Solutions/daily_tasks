<?php
include "connection.php";
 $name = mysqli_real_escape_string($conn, $_POST['name']);
 $salary = mysqli_real_escape_string($conn, $_POST['salary']);
 $address = mysqli_real_escape_string($conn, $_POST['address']);
//  $stu_phone = $_POST['passwor'];


$sql = "INSERT INTO employee(name,salary,address) VALUES('{$name}','{$salary}','{$address}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");
// header("location: http://localhost/4-chat-application/login.php");

mysqli_close($conn);