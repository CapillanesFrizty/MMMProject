<?php
$uname = $_POST['username'];
$pass = $_POST['pass'];
require_once('connector.php');

$query = "SELECT * FROM `customer`";

$result = mysqli_query($con, $query);

if ($result) {
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        if ($row[3] === $uname && $row[4]=== $pass) {
            header("location: ./public/registeredcustomerpage.php?uid=$row[0]");
        } else {
            header("location: ./public/login.html");
        }

    }
}
?>