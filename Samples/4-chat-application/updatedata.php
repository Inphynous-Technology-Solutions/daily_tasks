<?php
echo $stu_id = $_POST['sid'];
echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class = $_POST['sclass'];
echo $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost", "root", "", "crud") or die("conection failed");
$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}',sclass = '{$stu_class}',sphone = '{$stu_phone}' WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");
header("location: http://localhost/8x-detail/example.php");

mysqli_close($conn);
 /* extra
 <?php
if (isset($_POST['save'])) {
    include "connection.php";
    $stu_name = mysqli_real_escape_string($conn, $_POST['fname']);
    $stu_address = mysqli_real_escape_string($conn, $_POST['lname']);
    $stu_class = mysqli_real_escape_string($conn, $_POST['username']);
    $stu_phone = mysqli_real_escape_string($conn, md5($_POST['passwor']));

    $sql = "SELECT username FROM user WHERE Usernaem = {$stu_class}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    if (mysqli_num_rows($result) > 0) {
        echo "<p style='color:red,text-align:center'>username already exists </p>";
    } else {
        $sql1 = "INSERT INTO user(fname,lname,username,passwor) VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
        if (mysqli_query($conn, $sql1)) {
            header("location: http://localhost/4-chat-application/login.php");
        }
    }
}
*/