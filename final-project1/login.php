
<?php
session_start();
$msg = "";
if (isset($_POST['btn-login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    include("dbconfig.php");
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    $qry = " select * from users where emailed='$username'and password='$password' and role='client'";
    $resultset = mysqli_query($conn, $qry);
    if (mysqli_num_rows($resultset)>0) {
        $row = mysqli_fetch_array($resultset);
        $_SESSION['uid']= $row[0];
         $_SESSION['name']= $row[1];
        header("location:index.php");
    } else {
        $msg = "Invalid Username & Password!!";
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <style>
        .login-card {
            width: 100%;
            max-width: 390px;
            padding: 70px;
            box-shadow:-1em 0 0.4em #ff99ff;
            border-radius: 22px;
            text-align: center;
            margin: auto;
            margin-top: 20px;
            border-width: 5px;
            border-color: #e91e63;
            border-style: double;
        }

        .login-card:hover {
            transform: scale(1.05);
        }


        .form-control {
            margin-bottom: 20px;
        }

        .btn-register {
            background-color: pink;
            color: black;
            padding: 10px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div class="login-card">
        <h3 style=" 
            font-family: 'Times New Roman';
            font-weight: bold; "><U>Login</U></h3>

        <form method="post">
            <input type="email" name="username" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <input type="checkbox" name="box" required>Remember me.
            <button type="submit" name="btn-login" class="btn-register">Login
            <a href="register.php" style="color: black;"><button type="submit" class="btn-register">Create New Account</a>
        </form>
    </div>
    <h3 class="text-center style='color:#e91e63;font-weight:bold;'"><?php echo $msg; ?></h3>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>