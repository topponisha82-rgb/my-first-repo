<?php
require_once '../inc/connection.php';

$shname = $_REQUEST["shname"];
$owname = $_REQUEST["owname"];
$mobile = $_REQUEST["mobile"];
$email = $_REQUEST["email"];
$address = $_REQUEST["address"];
$gst = $_REQUEST["gst"];

if(empty($shname) || empty($owname) || empty($mobile) || empty($address) || empty($email)|| empty($gst)) {
    echo " fill_error ";
    exit;
}

$sql = "INSERT INTO `vendor` (`shop_name` , `owner_name` , `mobile` , `email` , `address` , `gst` , `status`) VALUES ( '$shname' , '$owname' , '$mobile' , '$email' , '$address' , '$gst' , '1' ) " ;

$res = mysqli_query( $con , $sql );

if ( $res ) {
    echo "1";

} else {
    echo '0';
}
?>