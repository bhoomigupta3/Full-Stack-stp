
 <?php
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
         .card {
          text-align: center;
          width: 100%;
          max-width: 500px;
          
          border-width: 5px;
          border-color: #e91e63;
          border-style: double;
          box-shadow: -1em 0 0.4em #ff99ff;
          margin: auto;
          margin-top: 30px;
          padding: 40px;
      }
      
   
      
      .card p {
          font-weight: bold;
          padding-right: 5px;
      }
      
      button {
          margin: 10px;
          margin-bottom: 30px;
          padding: 10px;
          background-color: #e85184ff;
          color: white;
          font-size: 16px;
      }
      
      input {
          margin: 10px;
          border-width: 1px;
          border-color: #e91e63;
          border-style: ridge;
      }
      
      select {
          margin: 10px;
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
        <h1 style="font-weight:bold; margin:40px;"><u>Admin Login</u></h1>
        <form  method="post">
           <p>Username : <input type="text" name="username" value="" required></p>
            <p>Password : <input type="password" name="password" value=""  required></p>
            <p> <input type="checkbox" name="txtcheckbox" value=""  required > Remember Me</p>
            <button style="color: black;">Login</button>
            <button ><a href="create-new-acc.php" style="color: black;">Create New Account</a></button>
        </form>
         <h3 class="text-center style='color:#e91e63;font-weight:bold;'"><?php echo $msg; ?></h3>
       </div>
</body>
</html>