<?php

require_once('connector.php');

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $model_name = $_POST['ModelName'];
    $model_description = $_POST['description'];
    $model_SRP = $_POST['sRp'];
    
    $query = "INSERT INTO `productmodel`(`modelName`, `modelDescription`, `SRP`) VALUES (`$model_name`,`$model_description`,`$model_SRP`)";
    
    $result = mysqli_query($con,$query);
}

header("location: ./public/ProductAdd.html");
