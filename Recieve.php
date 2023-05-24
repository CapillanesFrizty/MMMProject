<?php
require_once('connector.php');
$userID=$_GET['uid'];
$ordernum = $_GET['order-Num'];
$query= "UPDATE `orders` SET `Status`='DONE' WHERE `cusID` = $userID AND `orderNum` = $ordernum";

mysqli_query($con, $query);

header("location: ./public/purchasehistory.php?uid=$userID");
?>