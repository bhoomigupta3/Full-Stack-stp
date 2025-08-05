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
        <style>
.box{
    box-shadow: 0px 0px 4px #e91e63 ;
    border-radius: 10px;
    margin-top: 15px;
}
.box img{
    width: 100%;
    object-fit: cover;
    border-radius: 10px;
}
 h4,h2 {
        padding-left: 20px;
        }
        .box:hover{
            transform: scale(1.02);
        }
    </style>
     <script>
        function Search(){
            t1 = document.getElementById("search").value;
            obj = new XMLHttpRequest();
            obj.open("get","search.php?data="+val,true);
            obj.send();
            obj.onreadystatechange = function(){
                if(obj.status == 200 && obj.ready == 4){
                    document.getElementById("d1").innerHTML = obj.responeText;
                }
            }
        }
    </script>
</head>
<body> <?php
    include("header.php");
    ?>
<div class="container-fluid">
     <div class="row" style="margin: 20px;">
            <div class="col-sm-4"></div>
             <div class="col-sm-4">
                <input type="text" placeholder="Enter Text To Search" class="form-control">
             </div>
              <div class="col-sm-4"></div>
        </div>
        <?php
        include("dbconfig.php");
        $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
        $qry = "select * from products where product_type='anniversary'";
        $resultset = mysqli_query($conn, $qry);
        if (mysqli_num_rows($resultset) > 0) {
            $count = 0;
            while ($row = mysqli_fetch_assoc($resultset)) {
                if ($count == 0)
                    echo "<div class='row'>";
                echo "<div class='col-sm-3'>";
                 echo "<a href='desc.php?pid=$row[product_id]'style='color:#e91e63;'>";
                echo "<div class='box'>";
                echo "<div class='row'><div class='col-sm-12'>";
                echo "<img class='img-responsive' src='$row[product_image]'/>";
                echo "</div></div>";
                echo "<div class='row'><div class='col-sm-12'>";
                echo "<h4>$row[product_name]</h4>";
                echo "</div></div>";
                echo "<div class='row'><div class='col-sm-12'>";
                echo "<h2>&#8377;$row[product_price]</h2>";
                echo "</div></div>";
                echo "</div>";
                 echo "</a>";
                echo "</div>";
                
                $count++;
                if ($count == 4) {
                    echo "</div>";
                    $count = 0;
                }
            }
        } else {
            echo "<h2 class='text-center text-danger'>No product Found!</h2>";
        }
        mysqli_close($conn);
        ?>
    </div>


    <?php
include("footer.php");
?>

</body>
</html>