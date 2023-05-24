<?php
require_once('connector.php');
$userID=$_GET['uid'];
$query= "UPDATE `orders` SET`Status`='New Orders' WHERE `cusID` = $userID";

mysqli_query($con, $query);

header("location: ./public/registeredcustomerpage.php?uid=$userID");
?>