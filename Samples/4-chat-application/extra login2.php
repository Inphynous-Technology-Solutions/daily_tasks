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
            scroll-behavior: smooth;
        }
    </style>
    <div id="main">
        <div id="msgarea">
            <div>
                <?php
                Session_start();
                $username = $_SESSION["username"];

                ?>
            </div>
            <?php




            if (isset($_POST['submit'])) {


                $text = $_POST['sname'];
                $usernm = $_POST[$username];

                $conn = mysqli_connect("localhost", "root", "", "chat") or die("conection failed");
                $sql = "INSERT INTO mass(id,masage,usernaam) VALUES('','{$text}','{$_SESSION["username"]}')";
                $result = mysqli_query($conn, $sql) or die("query unsuccessful");
                if (mysqli_query($conn, $sql)) {
                }
                mysqli_close($conn);
            }

            $conn2 = mysqli_connect("localhost", "root", "", "chat") or die("conection failed");
            /*  $sql2 = "SELECT * FROM mass";  other than this we can trying to use for our reference*/
            $sql2 = "SELECT * FROM mass";
            $userprint = $username;

            $result2 = mysqli_query($conn2, $sql2) or die("query2 unsuccessful");
            if (mysqli_num_rows($result2)) {
            ?>
                <div>
                    <?php
                    while ($row = mysqli_fetch_assoc($result2)) { ?>

                        <table>
                            <tr>
                                <td><?php echo $userprint; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $row['masage']; ?></td>
                            </tr>

                        </table>

                <?php }
                } else {
                    echo  "result not found";
                }
                ?>


                <?php $conn2->close();
                ?>

                </div>
        </div>

        <div>
            <form action="" method="POST">
                <input type="text" name="sname" style="width: 500px; height:35px; " placeholder="Type Your massege">
                <input type="submit" name="submit" style="width: 180px; height:40px; ">
            </form>
        </div>
    </div>
    <?php



    ?>
</body>

</html>