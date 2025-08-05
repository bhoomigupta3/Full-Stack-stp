<?php
if (!isset($_GET['pid'])) {
    header("location:index.php");
} else {
    $pid = $_GET['pid'];
    include('dbconfig.php');
    $con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    $qry = "select * from products where product_id=$pid";
    $result = mysqli_query($con, $qry);
    $row = mysqli_fetch_array($result);
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
        .row img {
            margin: 20px;
            border-radius: 40px;
            border-style: solid;
            border-width: 2px;
            border-color: #e91e63;
            width: 100%;
            max-width: 300px;
        }

        .row img:hover {
            transform: scale(1.02);
        }

        .row h3 {
            font-weight: bold;
            font-family: 'Times New Roman';
            color: #db4879ff;
        }

        .row h4 {
            font-weight: bolder;
            font-style: italic;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .row .button {
            background-color: #e91e63;
            font-weight: bold;
            margin-top: 8px;

        }
    </style>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <img src="<?php echo $row[4]; ?>">
            </div>
            <div class="col-sm-4">
                <h3><?php echo $row[1]; ?></h3>
                <h3>&#8377;<?php echo $row[2]; ?></h3>
                <h4><u>Description :</u></h4>
                <p><?php echo $row[3]; ?></p>
                <a href="cart.php?pid=<?php echo $row[0] ?>" class="btn btn-warning button">Add To Cart</a>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>