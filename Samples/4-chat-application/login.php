<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
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
        <li id="nav"><a href="delete.php">Delete</a></li>
        <li id="nav" style="background-color: greenyellow;"><a href="login.php">login</a></li>
        <li id="nav"><a href="add.php">Sign Up</a></li>
    </div>

</body>
<h2 style="text-align: center;">login</h2>
<div style="text-align: center;">

    <body>
        <?php session_start();
        if (isset($_POST['login'])) {
            include "connection.php";
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = $_POST['passwor'];

            $sql = "SELECT fname,username, id FROM user WHERE username = '{$username}' AND passwor = '{$password}'";

            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
            if (mysqli_num_rows($result) > 0) {
                session_start();
                $_SESSION['username'] = $_POST['username'];

                while ($row = mysqli_fetch_assoc($result)) {
                    session_start();
                    $_SESSION["username"] = $row['username'];
                    $_SESSION["id"] = $row['id'];
                    header("location: http://localhost/4-chat-application/login1.php");
                }
                header("location: http://localhost/4-chat-application/login2.php");
            } else {
                echo '<div class="alert">Please enter the username and password correctly.
                <a style="color: red;" href="login.php">Login Again</a>
                 <div>';
            }
            die();
        }
        ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

            Username :
            <input type="text" name="username" placeholder="username" required><br><br><br>
            password :
            <input type="Password" name="passwor" placeholder="Password" required><br><br>
            <div>
                <input type="submit" name="login" value="login"><a href="add.php">Create New Account</a>
            </div>

        </form>

    </body>
</div>

</html>