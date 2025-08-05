<?php
include("dbconfig.php");
$conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM orders WHERE order_id = '$id'");
}

header("Location: admin_orders.php");
exit();
?>
