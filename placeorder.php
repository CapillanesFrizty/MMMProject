<?php
require_once("connector.php");
$id = $_GET['uid'];
$items = $_POST['itemid'];

foreach ($items as $item) {
    $query = "INSERT INTO `orders`(`cusID`, `prodID`, `orderDate`) VALUES ($id,$item,now())";
    mysqli_query($con, $query);
    header("location: ./public/registeredcustomerpage.php?uid=$id");
}

?>