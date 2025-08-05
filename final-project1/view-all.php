<?php
include('adminpanel.php'); // This should contain your header/navbar

$conn = mysqli_connect("localhost", "root", "", "florifydb");


if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $del_qry = "DELETE FROM products WHERE product_id = $id";
    mysqli_query($conn, $del_qry);
    header("Location:view-all.php"); 
    exit();
}

$qry = "SELECT * FROM products";
$result = mysqli_query($conn, $qry);
?>
<h2 class="text-center" style="font-weight: bold;color:#e91e63;">All Products</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th><th>Name</th><th>Price</th><th>Type</th><th>Image</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['product_id'] ?></td>
            <td><?= $row['product_name'] ?></td>
            <td>₹<?= $row['product_price'] ?></td>
            <td><?= $row['product_type'] ?></td>
            <td><img src="../product_images/<?= $row['product_image'] ?>" height="50"></td>
            <td>
                <a href="view-all.php?delete_id=<?= $row['product_id'] ?>"  
                   onclick="return confirm('Are you sure you want to delete this product?');">
                  ❌
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

