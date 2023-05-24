<?php
require_once('../connector.php');

$query = "SELECT productmodel.modelName, COUNT(productmodel.modelName)
    FROM orders JOIN productmodel ON orders.prodID=productmodel.modelID
    GROUP BY productmodel.modelName";
$res = mysqli_query($con, $query);
$items = array();
if ($res) {
    while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
        array_push(
            $items,
            array(
                'modelname' => $row[0],
                'modelsales' => $row[1]
            )
        );
    }
}
echo json_encode($items);
?>