<?php
require_once '../inc/connection.php';
$product_id = $_REQUEST["product_id"];

$sql = "UPDATE `products` SET `status` = '0' WHERE `id`= '$product_id'";
$res = mysqli_query( $con , $sql) ;

if ($res) {
    echo  1;
} else {
    echo  0;
}
?>