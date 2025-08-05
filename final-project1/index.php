<?php
session_start();
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
    <link rel="stylesheet" href="style1.css">
    <style>
        .card {
            background: white;
            border-radius: 15px;
            margin-bottom: 30px;
            margin-top: 40px;
            text-align: center;
            margin: 20px;
            box-shadow: 4px 4px 8px rgb(212, 76, 210);
          
        } 
        .card:hover{
            transition : all 3s ease-in-out;
            border-radius: 20%;
        }
        
        .card img   {
            width: 70%;
            height: 350px;
            object-fit: cover; 
        }
        .card a {
            font-size: 1.5em;
            color: rgb(150, 43, 226);
        }
        .hero{
            align-items: center;
        }
      
    </style>
</head>

<body>
   <?php
   include("header.php");
   ?>

    <div class="banner" style="background-color: #fce4ec;padding: 20px ;">
        <h1 class="text-center"  style="color: rgb(241, 73, 101); font-size: 30px;font-weight:bold;">Beautiful Blooms for Every Occasion</h1>
        <p class="text-center" style=" margin-top: 10px; font-size: medium;">Fresh, vibrant, and delivered with love !</p>
    </div>
    <div class="row">
        <h1 class="text-center" style="font-weight: bold;color: rgb(215, 89, 146);">Latest Occasion</h1>
        <div class="col-sm-6">
            <div class="card">
                <img src="https://freshknots.in/wp-content/uploads/2022/12/FreshKnots-Pinks-2-540x540.jpg">
                <h3>Birthday_Flower's</h3>
                <p>
                    <a href="birthday.php">Explore More+</a></p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <img src="https://landgflowers.com/cdn/shop/files/LG0052S_Image_1679160824044.jpg?v=1739746613&width=1946">
                <h3>Anniversary_Flower's</h3>
                <p>
                    <a href="anniversary.php">Explore More+</a></p>
            </div>
        </div>
    </div>
<?php
include("footer.php");
?>
</body>

</html>
