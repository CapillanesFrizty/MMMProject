<?php 
require_once('connector.php');
$ordernum=$_GET['ordernum'];
$query= "UPDATE `orders` SET`Status`='Failed' WHERE `orderNum` = $ordernum";

mysqli_query($con, $query);

header("Location: ./public/PlaceOrderManagement.php");
?>