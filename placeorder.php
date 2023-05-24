<?php
require_once("connector.php");
session_start();
$id = $_GET['uid'];
$items = $_POST['itemid'];

foreach ($items as $item) { 
    $query = "INSERT INTO `orders`(`cusID`, `prodID`,`orderDate`, `quantity`)(SELECT `cus_id`,`model_id`,now(),`quantity`
    FROM cart
    WHERE `cartNum` = $item)";
    mysqli_query($con, $query);

    $query2 = "DELETE FROM `cart` WHERE `cartNum` = $item";
    mysqli_query($con, $query2);

    header("location: ./public/orderreciept.php?uid=$id&cartid= $item");
}

?>