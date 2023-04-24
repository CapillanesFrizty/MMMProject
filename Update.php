<?php
require_once('connector.php');

$model_num = $_GET['model-Num'];
$query = "SELECT * FROM `model` WHERE `model_Num` = $model_num";
$data=array();
$result = mysqli_query($con,$query);

if ($result) {
    while ($row=mysqli_fetch_array($result,MYSQLI_NUM)) {
        array_push($data,array(
       'id'=>$row[0],
       'model_name'=>$row[1],
       'model_description'=>$row[2],
       'model_SRP'=>$row[3]
        ));
    }
}
echo json_encode($data);
?>