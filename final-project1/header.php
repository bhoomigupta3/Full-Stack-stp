
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style1.css">


</head>

<body>
    <header>
        <div class="container">
            <div class="logo">🌸BG Florify</div>
            <nav>
                <a href="index.php">Index</a>
                <div class="dropdown">
                    <button class="dropbtn">Occasion</button>
                    <div class="dropdown-content">
                        <a href="anniversary.php">Anniversary</a>
                        <a href="birthday.php">Birthday</a>
                    </div>
                </div>

                <a href="contact.php">Contact</a>

                <div class="dropdown">
                    <button class="dropbtn"><?php 
                    if(isset($_SESSION['name']))
                        echo $_SESSION['name'];
                    else
                        echo "My Account";
                    ?></button>
                    <div class="dropdown-content">
                        <a href="login.php">Login</a>
                        <a href="register.php">Register</a>
                        <a href="view-orders.php">View Orders</a>
                        <a href="logout.php">Logout</a>
                    </div>
                    
                </div>

                <a href="mycart.php">🛒 MyCart</a>
            </nav>
        </div>
    </header>



</body>

</html>