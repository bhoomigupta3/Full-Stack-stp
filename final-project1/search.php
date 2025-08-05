<?php 
$val = $_GET['pid'];
$users = ["Amit","Sumit","Ravi","Aman","Rohan","Ankit","Rajat","Santosh","Sachin","Sohan"];
if($val == ""){
    echo "";
}
else {
    for($i =0;$i<count($users);$i++){
        if(str_starts_with($users[$i],$val)){
            echo $users[$i]."<br>";
        }
    }
}
?>