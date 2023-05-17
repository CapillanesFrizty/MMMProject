<?php 
require_once('connector.php');
if(isset($_POST['placeorder'])){
    header("location:  ./public/AdminMainPage.php");
    $allid =$_POST['itemid'];
    $extractid = implode(',',$allid);
    echo ($extractid);
}
?>