<?php
require_once('connector.php');
$uid = $_GET['uid'];
$mID = $_GET['Model_id'];
$quantity = $_POST['quant'];

foreach ($quantity as $numberofProd) {

    $query = "INSERT INTO `cart`(`model_id`, `cus_id`, `quantity`, `price`) VALUE ('$mID', '$uid', '$numberofProd', 200)";

    mysqli_query($con, $query);

    header("location: ./public/registeredcustomerpage.php?uid=" . $uid);
}
?>