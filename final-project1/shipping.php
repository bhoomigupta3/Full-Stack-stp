<?php
session_start();
if(!isset($_SESSION['name'])){
    header("location:login.php");
}
?>
<?php
$msg = "";
    if(isset($_POST['btnorder'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $no = $_POST['phone'];
        $add = $_POST['address'];
        $address = "$name, $add, $email, $no";
        $paymethod = $_POST['payment_method'];
        include("dbconfig.php");
        $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
        $qry = "insert into orders(user_id, product_id, address, order_amount, payment_mode, order_status) values($_SESSION[uid], '$_COOKIE[cart]', '$address', $_SESSION[total], '$paymethod', 'Pending')";
        mysqli_query($conn, $qry);
        if(mysqli_affected_rows($conn)>0)
           $msg = "
<div class='alert alert-success text-center' role='alert' style='font-size: 18px; margin:20px;color:#e91e63;background-color:pink;'>
  <strong>✔ Order Placed Successfully!</strong> Thank you for shopping with us.
</div>";

        else
            $msg ="<div class='alert alert-success text-center' role='alert' style='font-size: 18px; margin:20px;color:#e91e63;background-color:pink;'>
  <strong>Error in placing the order.</strong>Try Again !!
</div>";
        mysqli_close($conn);
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
            margin-top: 30px;
        }

        .card p {
            font-weight: bold;
            padding: 5px;
        }

        button {
            margin: 10px;
            margin-bottom: 30px;
            padding: 10px;
            background-color: #e85184ff;
            color: white;
            font-size: 16px;
        }

        input,
        select,
        button,
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
    include("header.php");
    ?>
     <?php echo "$msg"; ?>
    <div class="card">
        <h3 style=" font-family: 'Times New Roman';
            margin: 30px;
            font-weight: bold;  
           font-size: 25px;
          "><u>Shipping Details : </u></h3>
        
        <form method="Post">
            <p>Name : <input type="text" name="name" value="" required></p>
            <p>Email : <input type="email" name="email" value="" required></p>
            <p>Phone: <input type="tel" name="phone" value="" required></p>
            <p>Address : <textarea name="address" required></textarea></p>
            <p>Pincode : <input type="tel" name="no" value="" required></p>
            <p>Payment Method : <select name="payment_method">
                    <option>Cash on delivery</option>
                    <option>Online</option>
                </select></p>
            <button type="submit" name="btnorder" class="btn-register">Place Order</button>
             
        </form>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>