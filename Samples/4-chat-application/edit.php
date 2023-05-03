<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>PHP CRUD TUTORIAL</title>
    <h1>
        <marquee direction="right"> 8xGamer.com</marquee>
    </h1>
</head>

<head>
    <div class="navbar">
        <li id="nav"><a href="home.php">Home</a></li>&nbsp;&nbsp;
        <li id="nav"><a href="">Read</a></li>&nbsp;&nbsp;
        <li id="nav"><a href="">Update</a></li>&nbsp;&nbsp;
        <li id="nav"><a href="delete.php">Delete</a></li>
    </div>

</head>

<head>
    <h1>Update Your Record</h1>
    <style>
        #action-form {
            margin-left: 500px;
            border: 2px solid black;
        }

        #form-data {
            margin: auto;
            text-align: center;
        }
    </style>
</head>



<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("conection failed"); ?>
    <?php $stu_id = $_GET['id'];
    $sql = "SELECT * FROM student WHERE sid = {$stu_id} ";
    $result = mysqli_query($conn, $sql) or die("query unsuccessful");

    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {

    ?>

            <form class="action-form" action="updatedata.php" method="POST">
                <div class="form-data">
                    <label for="">Name</label>
                    <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>">
                    <input type="text" name="sname" value="<?php echo $row['sname']; ?>">

                </div>


                <div class="form-data">
                    <label for="">Address</label>
                    <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>">
                </div>

                <div class="form-data">
                    <label for="">Class</label>
                    <?php $sql1 = "SELECT * FROM studentclass";
                    $result1 = mysqli_query($conn, $sql1) or die("query unsuccessful");

                    if (mysqli_num_rows($result1)) {

                        echo '<select name="sclass">';
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                            if ($row['sclass'] == $row1['cid']) {
                                $select = "selected";
                            } else {
                                $select = "";
                            }
                            echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
                        }
                        echo "</select>";
                    }
                    ?>
                </div>
                <div class="form-data">
                    <label for="">phone</label>
                    <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>">
                </div>
        <?php  }
    } ?>
        <input type="submit" class="submit" value="Update">
            </form>
            <style>
                #form {
                    background-position: center;
                }
            </style>
</body>

</html>