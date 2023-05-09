<?php

require_once('connector.php');

$model_no = $_GET['model-Num'];
$model_name = $_POST['ModelName'];
$model_description = $_POST['description'];
$model_SRP = $_POST['sRp'];
$query = "UPDATE `productmodel` SET `modelName`='$model_name',`modelDescription`='$model_description',`SRP`='$model_SRP' WHERE `modelID` = 2";

$result = mysqli_query($con, $query);

header("location: public\ProductAdd.html");

?>