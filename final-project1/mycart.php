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
   include("header.php");
   ?> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2"></div>
          <div class="col-sm-8">
          
            <?php
            if(isset($_COOKIE['cart'])){
        $id = $_COOKIE['cart'];
        include("dbconfig.php");
        $conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
        $qry = "select * from products where product_id in ($id)";
        $resultset = mysqli_query($conn,$qry);
        echo "<table class='table table-striped'>";
        echo "<tr style='background-color:pink'>";
        echo "<th>Product Image</th>";
         echo "<th>Product Name </th>";
          echo "<th>Product Price</th>";
           echo "<th></th>";
        echo "</tr>";
        $total = 0;
        while($row = mysqli_fetch_array($resultset)){
             echo "<tr>";
           echo "<td><img src='$row[4]' width='50px' height='50px'></td>";
           echo "<td>$row[1]</td>";
            echo "<td>&#8377;$row[2]</td>";
             echo "<td><a href='remove.php' class='glyphicon glyphicon-remove' style='color:red; font-size:20px'></a></td>";
              echo "</tr>";
              $total += $row[2];
        }
        echo "<tr  style='background-color:pink'>";
        echo "<td colspan='2'>Total Amount</td>";
         echo "<td>&#8377;$total</td>";
          echo "<td></td>";
         echo "</tr>";
        echo "</table>";
        echo "<a href='shipping.php' class='btn btn-warning'>Place Order</a>";
        $_SESSION['total'] = $total;
            }
            else {
               echo "<h2 class='text-center text-danger'>Cart is empty!!</h2>";
            }
            ?>
            </div>
             <div class="col-sm-2"></div>
        </div>
    </div>


    <?php
include("footer.php");
?>
</body>
</html>