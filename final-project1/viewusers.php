<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include("adminpanel.php");
    ?>
    <?php include("../dbconfig.php");
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    $qry = "select * from users";
    $resultset = mysqli_query($conn, $qry);
    if (mysqli_num_rows($resultset) > 0) {
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th> User id </th>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Password</th>";
        echo "<th>Phone No.</th>";
        echo "<th>User Type</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($resultset)) {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<td><a href ='' class= 'glyphicon remove' style='color:red;font-size:20px'></a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<h3 class='text-center text-warning'>No Record Found!!</h3>";
    }
    mysqli_close($conn);
    ?>
</body>

</html>