<?php
require_once('connector.php');

$query ="SELECT * FROM `productmodel`";

$data=array();

$result = mysqli_query($con, $query);

if ($result) {
    while ($row=mysqli_fetch_array($result,MYSQLI_NUM)) {
        array_push($data,array(
       'id'=>$row[0], 
       'model_name'=>$row[1],
       'model_description'=>$row[2],
       'model_SRP'=>$row[3],
       'model_img'=>$row[4]
        ));
    }
}
echo json_encode($data);
?>