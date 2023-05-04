<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .container {
            margin: auto;
            background-color: rgba(255, 255, 255, 0.516);
            width: 800px;
            padding: 16px;
            border-radius: 30px;

        }

        .container3 input {
            background-color: #ff0000;
            color: white;
            border-radius: 10px;
            padding: 10px;
            width: 70px;
        }

        .container select {
            width: 200px;

        }

        body {
            background-color: white;
            background-repeat: no-repeat;
            background-size: cover;

        }

        h1 {
            background-color: black;
            color: rgb(245, 245, 126);
            text-align: center;
        }



        .fnamee input {
            background-color: rgb(222, 210, 210);
            margin: 5px 0;
            padding: 6px;
            border: 1px solid #00FF00;
            border-radius: 20px
        }

        .Lnamee input {
            background-color: rgb(222, 210, 210);
            margin: 5px 0;
            padding: 6px;
            border: 1px solid #00FF00;
            border-radius: 20px
        }

        .comapny1 input {
            background-color: rgb(222, 210, 210);
            margin: 5px 0;
            padding: 6px;
            border: 1px solid #00FF00;
            border-radius: 20px
        }

        .email2 input {
            background-color: rgb(222, 210, 210);
            margin: 5px 0;
            padding: 6px;
            border: 1px solid #00FF00;
            border-radius: 20px
        }

        .phn input {
            background-color: rgb(222, 210, 210);
            margin: 5px 0;

            padding: 6px;
            border: 1px solid #00FF00;
            border-radius: 20px
        }
    </style>
</head>

<body>
    <?php include "page/navbar.html"; ?>
    <?php
    if (isset($_POST['register'])) {
        include "page/connection.php";
        $stu_fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $stu_lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $stu_username = mysqli_real_escape_string($conn, $_POST['username']);
        $stu_email = mysqli_real_escape_string($conn, $_POST['email']);
        $stu_fphone = mysqli_real_escape_string($conn, $_POST['fphone']);

        $stu_pass = $_POST['password'];

        // $conn = mysqli_connect("localhost", "root", "", "testingNew") or die("conection failed");

        $sql = "INSERT INTO student(fname,lname,username,email,Phone_number,pass_word) VALUES('{$stu_fname}','{$stu_lname}','{$stu_username}','{$stu_email}','{$stu_fphone}','{$stu_pass}')";
        $result = mysqli_query($conn, $sql) or die("query unsuccessful");
        echo "you are succesfully regisred";
        mysqli_close($conn);
    }

    ?>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" name="myform" method="post">

        <div class="container">

            <h1>Event Registration Form</h1>
            <div class="grid-container">

                <label for="Fname">Name</label>
                <div class="fnamee">
                    <input type="text" name="fname" placeholder="First Name">
                </div>



                <div class="Lnamee">
                    <input type="text" name="lname" placeholder="Last Name"><br><br>
                </div>


                <div class="comapny1">
                    <label for="Comapny">username</label>
                    <input type="text" name="username">
                </div><br><br>

                <div class="email2">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="example@gmail.com">
                </div><br><br>

                <div class="phn">
                    <label for="Phone">Phone</label>
                    <input type="number" name="fphone" placeholder="Enter Phone Number">
                </div><br><br>

                <label for="pwd">Password:</label>
                <input type="password" id="pwd" name="password">

                <!-- <label for="Subject">Subject</label>
            <select name="" id="" required>
                <option selected disabled>select option</option>
                <option value="">Marathi</option>
                <option value="">English</option>
                <option value="">hindi</option>
                <option value="">Marathi</option>
            </select><br><br>


            <p>Are you an existing customer?</p>
            <input type="radio" name="yes" id="yes" value="Yes">
            <label for="Yes">Yes</label><br>
            <input type="radio" name="No" id="No" value="No">
            <label for="No">No</label>
            <br><br> -->
                <div class="container3">
                    <input type="submit" value="Register" name="register" onClick="myFunction()" />
                </div>


            </div>
    </form>
    </div>
</body>

</html>