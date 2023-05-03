<!DOCTYPE html>

<head>
    <title>PHP CRUD TUTORIAL</title>
    <link rel="stylesheet" href="style.css">
    <h1>
        <marquee direction="right"> 8xGamer.com</marquee>
    </h1>
    <style>
        form {
            margin: auto;
            border: 2px solid black;
            width: 40%;
            height: 60%;
            padding-top: 30px;

        }
    </style>
</head>

<body>
    <div class="navbar">
        <li id="nav"><a href="home.php">Home</a></li>&nbsp;&nbsp;
        <li id="nav"><a href="">Read</a></li>&nbsp;&nbsp;
        <li id="nav"><a href="">Update</a></li>&nbsp;&nbsp;
        <li id="nav"><a href="delete.php">Delete</a></li>
        <li id="nav"><a href="login.php">login</a></li>
        <li id="nav" style="background-color: greenyellow;"><a href="add.php">Sign Up</a></li>
    </div>

</body>

<head>
    <h1>Sign Up / Create New Account</h1>
</head>

<body>
    <style>
        .form-data {
            text-align: center;
        }
    </style>
    <form action="savedata.php" method="POST">
        <div class="form-data">
            <label for="">First Name</label>
            <input type="text" name="fname" required>
        </div><br>


        <div class="form-data">
            <label for="">Last Name</label>
            <input type="text" name="lname" required>
        </div><br>

        <div class="form-data">
            <label for="">Username</label>
            <input type="text" name="username" required>
        </div><br>
        <div class="form-data">
            <label for="">Password</label>
            <input type="password" name="passwor" required>
        </div><br>
        <div class="form-data">
            <input type="submit" class="submit" value="Sign Up">
        </div><br>

    </form>

</body>

</html>