<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>PHP CRUD TUTORIAL</title>
    <h1>
        <marquee direction="right"> 8xGamer.com</marquee>
    </h1>
</head>

<body>
    <div class="navbar">
        <li id="nav"><a href="example.php">Home</a></li>&nbsp;&nbsp;
        <li id="nav"><a href="">Read</a></li>&nbsp;&nbsp;
        <li id="nav"><a href="edit.php">Update</a></li>&nbsp;&nbsp;
        <li id="nav"><a href="delete.php">Delete</a></li>
        <li id="nav"><a href="add.php">Add New Record</a></li>
    </div>

</body>

<body>
    <style>
        * {
            background-color: yellowgreen;
            margin: 10px;
        }

        h2 {
            font-display: underline;
            text-align: center;
        }

        table {
            background-color: blanchedalmond;
            border: 2px solid black;
            width: 60%;
            text-align: center;
            margin: auto;
        }

        #row {
            width: 50PX;
            border: 2px solid black;
            margin: 0;
        }

        #table-head {
            color: black;
            font-weight: 15000;
        }
    </style>

    <div id="main-content">
        <h2>ALL records</h2>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "crud") or die("conection failed");
        $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass=studentclass.cid";
        $result = mysqli_query($conn, $sql) or die("query unsuccessful");

        if (mysqli_num_rows($result)) {

        ?>
            <table style="float: center;">
                <thead id="table-head">
                    <th id="row">ID</th>
                    <th id="row">NAME</th>
                    <th id="row">ADDRESS</th>
                    <th id="row"> CLASS </th>
                    <th id="row">PHONE</th>
                    <th id="row">ACTION</th>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td id="row">
                                <?php echo $row['sid'] ?>
                            </td>
                            <td id="row">
                                <?php echo $row['sname'] ?>
                            </td>
                            <td id="row">
                                <?php echo $row['saddress'] ?>
                            </td>
                            <td id="row">
                                <?php echo $row['cname'] ?>
                            </td>
                            <td id="row">
                                <?php echo $row['sphone'] ?>
                            </td>

                            <td id="row">
                                <a href="edit.php?id=<?php echo $row['sid'] ?>">Edit</a>
                                <a href="delete.php">Delete</a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>

            </table>
        <?php }
        $conn->close();

        ?>

    </div>
    </div>
</body>


</html>