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
        <li id="nav"><a href="">Delete</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
        <li id="nav"><a href="logout.php">logout</a></li>

    </div>
    <style>
        #main {
            border: 3px solid black;
            width: 700px;
            height: 500px;
            margin: 25px auto;
        }

        h1 {
            position: relative;
            font-weight: bolder;
        }

        #msgarea {
            width: 98%;
            border: 1px solid blue;
            height: 430px;
            scroll-behavior: smooth;
            overflow: scroll;
            overflow-x: hidden;
            overflow-wrap: break-word;

        }

        #username {
            background-color: whitesmoke;
            font-style: italic;
            font-size: 18px;
            color: red;
            width: 100%;
        }

        #text {
            padding-left: 50px;
        }
    </style>
    <div id="main">
        <div id="msgarea">
            <b>
                <b>
                    <h1 style="font-style:italic;">Maitri Ek Vishwas</h1>
                </b>
                <hr>
                <hr>
            </b>
            <div>
                <?php
                Session_start();
                $username = $_SESSION["username"];

                ?>
            </div>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "chat") or die("conection failed");
            $sql2 = "SELECT * FROM mass";
            $result2 = mysqli_query($conn, $sql2) or die("query2 unsuccessful");
            while ($row = mysqli_fetch_assoc($result2)) {
                $mess = $row['masage'];
                $usernam = $row['usernaam'];
            ?>
                <table>

                    <tr>
                        <td id="username"><?php echo $usernam; ?></td>
                    </tr>
                    <tr>
                        <td id="text"><?php echo $mess; ?></td>
                    </tr>

                </table>
            <?php     }

            if (isset($_POST['submit'])) {


                $text = $_POST['sname'];

                $sql = "INSERT INTO mass(id,masage,usernaam) VALUES('','{$text}','{$_SESSION["username"]}')";

            ?>


                <?php

                if (mysqli_query($conn, $sql)) { ?>

                    <table>

                        <tr>
                            <td id="username"><?php echo $_SESSION["username"]; ?></td>
                        </tr>
                        <tr>
                            <td id="text"><?php echo $text; ?>
                            </td>
                        </tr>

                    </table>

            <?php mysqli_close($conn);
                }
            } else {
                echo  "";
            }
            ?>
        </div>


        <div>
            <form action="" method="POST">
                <input type="text" name="sname" style="width: 500px; height:35px; " placeholder="Type Your massege" required>
                <input type="submit" name="submit" style="width: 180px; height:40px; ">
                <div>
                    <input type="file" name="select image">
                    <input type="submit" name="submit">
                </div>

            </form>
        </div>
    </div>
    <?php



    ?>
</body>


</html>