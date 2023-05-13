<?php
require_once('connector.php');
    $uid=$_GET['user_id'];
    $mID=$_GET['Model_id'];

    $query= "INSERT INTO `cart`(`model_id`, `cus_id`, `quantity`, `price`) VALUE ('$mID', '$uid', 3, 200)";
    
    mysqli_query($con,$query);

?>