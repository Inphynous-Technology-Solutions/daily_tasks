<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP TUTORIAL</title>
    <link rel="stylesheet" href="style.css">
    <h1>
        <marquee direction="right"> 8xGamer.com</marquee>
    </h1>
</head>

<body>
    <div class="navbar">
        <li id="nav"><a href="home.php">Home</a></li>&nbsp;&nbsp;
        <li id="nav"><a href="">Read</a></li>&nbsp;&nbsp;
        <li id="nav"><a href="">Update</a></li>&nbsp;&nbsp;
        <li id="nav"><a href="delete.php">Delete</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
        <li id="nav"><a href="logout.php">logout</a></li>

    </div>
    <style>
        #main {
            border: 3px solid black;
            width: 700px;
            height: 500px;
            margin: 25px auto;
        }

        #msgarea {
            width: 98%;
            border: 1px solid blue;
            height: 450px;
        }
    </style>
    <div id="main">
        <div id="msgarea">
            <?php
            Session_start();
            $username = $_SESSION['username'];
            echo $username;
            ?>
            <?php
            $conn2 = mysqli_connect("localhost", "root", "", "chat") or die("conection failed");
            $sql2 = "SELECT * FROM massage";
            $result2 = mysqli_query($conn2, $sql2) or die("query unsuccessful");

            if (mysqli_num_rows($result2)) {
                while ($row = mysqli_fetch_assoc($result2)) {
                    echo $row['mass'];

            ?>
        </div>
        <?php
                    if (isset($_POST['submit'])) {

                        $text = $_POST['sname'];

                        $conn = mysqli_connect("localhost", "root", "", "chat") or die("conection failed");
                        $sql = "INSERT INTO massage(id,massage,username) VALUES('','{$text}','')";
                        $result = mysqli_query($conn, $sql) or die("query unsuccessful");
                        echo '$massage';
                    }
        ?>
        <div>
            <form action="" method="POST">

                <?php
                    echo '<input type=" text" name="sname" style="width: 500px; height:35px; " placeholder="Type Your massege">';
                    echo '<input type=" text" name="sname" style="width: 500px; height:35px; " placeholder="Type Your massege">';

                ?>
            </form>
        </div>
<?php }
            } else {
                echo  "result not found";
            }
?>
    </div>
</body>

</html>