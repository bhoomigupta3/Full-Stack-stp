
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
  <style>
    .card {
      text-align: center;
      width: 100%;
      max-width: 400px;
      padding: 30px;
      border-width: 5px;
      border-color: #e91e63;
      border-style: double;
     
      box-shadow: -1em 0 0.4em #ff99ff;
      margin: auto;
      margin-top: 70px;
    }

    h3 {
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

    form p {
      text-align: left;
      margin: 10px 0;
      font-weight: bold;
    }

    input,
    select {
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
  include("adminpanel.php");
  ?>

  <div class="card">
    <h3 style="font-weight:bold;font-family:'Times New Roman';"><u>Create New Account</u></h3>
    <form method="post">
      <p>Name : <input type="text" name="name" value="" required></p>
      <p>Email : <input type="email" name="emailed" value="" required></p>
      <p>Password : <input type="password" name="password" value="" required></p>
      <p>Confirm Password : <input type="password" name="password" value="" required></p>
      <p>Phone No. : <input type="tel" name="phoneno" value="" required></p>
      <p>Role : <select name="role">
          <option>Client</option>
          <option>Admin</option>
        </select></p>
     <button type="submit" name="btn-register" class="btn-register">Create New Account</button>
 <?php echo "$msg";?>
    </form>
  </div>
  

</body>

</html>