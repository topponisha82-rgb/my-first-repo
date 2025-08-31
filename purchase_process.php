<?php
require_once '../inc/connection.php';

$invno = $_REQUEST["invno"];
$vid = $_REQUEST["vid"];
$pid = $_REQUEST["pid"];
$cp = $_REQUEST["cp"];
$qty = $_REQUEST["qty"];

$sql = "INSERT INTO `purchase` WHERE (`invno` , `vid` , `pid` , `cp` , `qty`) VALUE ('$invno' , '$vid' , '$pid' , '$cp' , '$qty')";

$res = mysqli_query($con , $sql);

$sql = "SELECT `stock` FROM `products` WHERE `id` = '$pid' ";
$res = mysqli_query($con , $sql);

$row = mysqli_fetch($res);
$stock = $row["stock"];
$new_stock = $qty + $stock;

$sql = "UPDATE `products` SET `cost_price` = '$cp' , `stock` = '$stock' WHERE `id` = '$pid`";

$res = mysqli_query($con , $sql);

if($res) {
    echo 1;

} else {
    echo 0;
}

?>