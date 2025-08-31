<?php
require_once '../inc/connection.php';

$pname = $_REQUEST["pname"];
$pcode = $_REQUEST["pcode"];
$pdetails = $_REQUEST["pdetails"];
$sp = $_REQUEST["sp"];
$fp = $_REQUEST["fp"];

$pimage = $_REQUEST["pimage"];

if (empty($pname) || empty($pcode) || empty($pimage) || empty($pdetails) || empty($sp) || empty($fp)) {
    echo "please fill all filds";
    exit;
}
$sql = "INSERT INTO `products`(`name` , `code` , `image` , `details` , `sale_price` , `fake_price` , `cost_price` , `stock` , `status`) VALUES ('$pname' , '$pcode' , '$pimage' , '$pdetails' , '$sp' , '$fp' , '0' , '0' , '1')";

$res = mysqli_query( $con , $sql );

if ( $res ) {
    echo '1' ;
} else{
    echo '0' ;
}
?>