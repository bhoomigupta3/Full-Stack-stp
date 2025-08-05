<?php
$msg = "";
if (isset($_POST['btnadd'])) {
    $conn = mysqli_connect("localhost", "root", "", "florifydb");
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $desc = $_POST['product_description'];
    $type = $_POST['product_type'];
    
    $image = $_FILES['product_image']['name'];
    $tmp = $_FILES['product_image']['tmp_name'];
    move_uploaded_file($tmp, "$image");

    $sql = "INSERT INTO products(product_name, product_price, product_description, product_image, product_type)
            VALUES('$name', '$price', '$desc', '$image', '$type')";

    if (mysqli_query($conn, $sql)) {
        $msg = "<div class='alert alert-success'>Product Added Successfully</div>";
    } else {
        $msg = "<div class='alert alert-danger'>Failed to Add Product</div>";
    }
}
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
  <style>
    .card {
      text-align: center;
      width: 100%;
      max-width: 400px;
      margin: auto;
      border-width: 5px;
      border-color: #e91e63;
      border-style: double;
      box-shadow: -1em 0 0.4em #ff99ff;
      margin-top: 50px;
      padding: 20px;

    }

    .card p {
      font-weight: bold;
      padding: 9px;

    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #e85184ff;
      color: white;
      border: none;
    }

    input,
    select,
    textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      box-sizing: border-box;
      border-width: 1px;
      border-color: #e91e63;
      border-style: ridge;
      margin: 10px;
    }
  </style>
</head>

<body>
  <?php
  include("adminpanel.php");
  ?>
  <div class="card">
    <h3 style="font-weight:bold; margin:25px;"><u>Add New Product</u></h3>
    <form method="post"  enctype="multipart/form-data">
      <p>Product Name : <input type="text" name="product_name" value="" required></p>
      <p>Prouct Type : <select name="product_type">
          <option value="">Select</option>
          <option value="birthday">Birthday</option>
          <option value="anniversary">Anniversary</option>
        </select> </p>
      <p>Product Price : <input type="number" name="product_price" required></p>
      <p>Product Description : <textarea name="product_description" required></textarea></p>
      <p>Product Image : <input type="file" name="product_image"  required></p>
      <button type="submit" name="btnadd" class="btn-register">Add Product</button>
      <?php echo "$msg"; ?>
    </form>
  </div>
</body>

</html>