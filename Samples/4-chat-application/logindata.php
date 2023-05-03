<?php
if (isset($_POST['submit'])) {

    $text = $_POST['sname'];

    $conn = mysqli_connect("localhost", "root", "", "chat") or die("conection failed");
    $sql = "INSERT INTO massage(id,massage,username) VALUES('','{$text}','')";
    $result = mysqli_query($conn, $sql) or die("query unsuccessful");
}
