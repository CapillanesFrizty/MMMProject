<?php

require_once('connector.php');

$model_num = $_GET['model_num'];
$query= "DELETE FROM `productmodel` WHERE `modelid` = $model_num";

$result =mysqli_query($con, $query);

header("location: ./public/ProductAdd.php");