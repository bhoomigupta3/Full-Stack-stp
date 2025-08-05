<?php
session_start();
?>
<?php
$msg = "";
if (isset($_POST['btn-register'])) {
  $name = $_POST['name'];
  $email = $_POST['emailed'];
  $pwd = $_POST['password'];
  $phone = $_POST['phoneno'];
  $conn = @mysqli_connect("localhost", "root", "", "florifydb");
  if ($conn == null) {
    $msg = "<h4><font color ='red'>Connection Failure!!</font><h4>";
  } else {
    $qry = "insert into users(name,emailed,password,phoneno,role) values('$name','$email','$pwd',$phone,'client')";
    mysqli_query($conn, $qry);
    if (mysqli_affected_rows($conn) > 0)
      $msg = "<h4 ><font color='black'>Account Created Succesfully !!</font><h4>";
    else
      $msg = "<h4><font color='black'>Error in creating the account(Try Again) !!</font><h4>" . mysqli_error($conn);
    mysqli_close($conn);
  }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="script.js"></script>
  <style>
    .card {
      text-align: center;
      width: 100%;
      max-width: 400px;
      padding: 30px;
      margin: auto;
      margin-top: 20px;
      border-width: 5px;
      border-color: #e91e63;
      border-style: double;
     
      box-shadow: -1em 0 0.4em #ff99ff;
    }

    .card h3 {
      font-family: 'Times New Roman';
      margin: 50px;
      font-weight: bold;
      font-size: 25px;
      padding-bottom: 50px;

    }

    button {
      width: 100%;
      margin-top: 20px;
      padding: 10px;
      background-color: #e85184ff;
      color: white;
      border: none;
      font-size: 16px;
    }

    button:hover {
      background-color: #e74882ff;
    }

    form p {
      text-align: left;
      margin: 10px 0;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      box-sizing: border-box;
      border-width: 1px;
      border-color: #e91e63;
      border-style: ridge;
    }
  </style>
</head>

<body>
  <?php
  include("header.php");
  ?>
  <div class="card">
    <h3 style=" font-family: 'Times New Roman';
            margin: 20px;
            font-weight: bold;  
           font-size: 25px;
          "><u>Create New Account</u></h3>
    <form method="Post" onsubmit="return validate()">
      <p>Name : <input type="text" name="name" value="" required></p>
      <p>Email : <input type="email" name="emailed" value="" required></p>
      <p>Password : <input type="password" name="password" value="" required></p>
      <p>Confirm Password : <input type="password" name="confirm-password" value="" required></p>
      <p>Phone : <input type="tel" name="phoneno" value="" required></p>
      <button type="submit" name="btn-register" class="btn-register">Register</button>

      <?php echo "$msg"; ?>
    </form>
  </div>
  <?php
  include("footer.php");
  ?>
</body>

</html>