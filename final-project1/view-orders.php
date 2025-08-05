<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("location:login.php");
    exit();
}

include("dbconfig.php");
$conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

if (isset($_GET['del_id'])) {
    $del_id = $_GET['del_id'];
    $del_qry = "DELETE FROM orders WHERE order_id = $del_id";
    mysqli_query($conn, $del_qry);
    header("Location: view-orders.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Orders</title>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .delete-icon {
            color: white;
            cursor: pointer;
        }
       
    </style>
</head>

<body>
 <?php
   include("header.php");
   ?>
   <h2 style="color:#e91e63;text-align: center;"><b><i>All Orders</i></b></h2>
<div class="container">
    
    <table class="table table-bordered table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th>Order ID</th>
                <th>User</th>
                <th>Product</th>
                <th>Amount</th>
                <th>Address</th>
                <th>Payment</th>
                <th>Status</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $qry = "SELECT o.order_id, u.name AS user_name, p.product_name, o.order_amount, o.Address, o.payment_mode, o.order_status 
                FROM orders o
                JOIN users u ON o.user_id = u.user_id
                JOIN products p ON o.product_id = p.product_id";

        $res = mysqli_query($conn, $qry);
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr>
                    <td>{$row['order_id']}</td>
                    <td>{$row['user_name']}</td>
                    <td>{$row['product_name']}</td>
                    <td>₹{$row['order_amount']}</td>
                    <td>{$row['Address']}</td>
                    <td>{$row['payment_mode']}</td>
                    <td>{$row['order_status']}</td>
                    <td><a href='?del_id={$row['order_id']}' onclick='return confirm(\"Are you sure to delete this order?\")'><span class='glyphicon glyphicon-trash delete-icon'></span></a></td>
                </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<?php
include("footer.php");
?>
</body>
</html>
