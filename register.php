<?php

require_once('connector.php');

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$username =$_POST['username'];
$emailAdd =$_POST['emailAdd'];
$passWord =$_POST['passWord'];
$Ucontact =$_POST['contact'];
$Uaddress =$_POST['address'];


$query = "INSERT INTO `customer`(`first_name`, `last_name`, `username`, `password`, `email`, `contact`, `address`) VALUES
 ('$fname','$lname','$username','$passWord','$emailAdd','$Ucontact','$Uaddress')";

mysqli_query($con,$query);


header("location: ./public\loginpage.html");
?>