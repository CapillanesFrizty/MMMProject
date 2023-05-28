<?php
require_once('connector.php');
$uid = $_GET['uid'];
$mID = $_GET['Model_id'];
$quantity = $_POST['quant'];
$price = $_POST['price'];

if (isset($_POST['add-to-cart'])) {
    foreach ($quantity as $numberofProd) {

        $query = "INSERT INTO `cart`(`model_id`, `cus_id`, `quantity`, `price`) VALUE ('$mID', '$uid', '$numberofProd', $price)";

        mysqli_query($con, $query);

        header("location: ./public/registeredcustomerpage.php?uid=" . $uid);
    }
} elseif (isset($_POST['buy-item'])) {
    foreach ($quantity as $numberofProd) {

        $query = "INSERT INTO `orders`(`cusID`, `prodID`, `orderDate`, `quantity`) VALUES ('$uid','$mID',now(),'$numberofProd')";

        mysqli_query($con, $query);

        header("location: ./public/registeredcustomerpage.php?uid=" . $uid);
    }
}
