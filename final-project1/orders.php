<?php
include('adminpanel.php');
$conn = mysqli_connect("localhost", "root", "", "florifydb");
$qry = "SELECT o.*, u.name FROM orders o JOIN users u ON o.user_id = u.user_id";
$result = mysqli_query($conn, $qry);
?>
<h2 class="text-center" style="font-weight: bold;color:#e91e63;"><u>All Orders</u></h2>
<table class="table table-bordered" style="font-weight: 600;">
    <thead>
        <tr>
            <th>Order ID</th><th>User</th><th>Product ID</th><th>Amount</th>
            <th>Payment Mode</th><th>Status</th><th>Address</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['order_id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['product_id'] ?></td>
            <td>₹<?= $row['order_amount'] ?></td>
            <td><?= $row['payment_mode'] ?></td>
            <td><?= $row['order_status'] ?></td>
            <td><?= $row['Address'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
