<?php
require_once '../inc/connection.php';

$shnm = $_REQUEST["shnm"];
$ownm = $_REQUEST["ownm"];
$mobile = $_REQUEST["mobile"];
$address = $_REQUEST["address"];
$email = $_REQUEST["email"];
$gst = $_REQUEST["gst"];

$id = $_REQUEST["vid"];

if(empty($shnm) || empty($ownm) || empty($mobile) || empty($address) || empty($email) || empty($gst)) {
    echo "please fill all filds";
    exit;
}

$sql = "UPDATE `vendor` SET `shop_name` = '$shnm' , `owner_name` = '$ownm' , `mobile` = '$mobile' , `address` = '$address' , `email` = '$email' , `gst` = '$gst' WHERE `id` = '$id'";

$res = mysqli_query($con , $sql);

if($res){
    echo  1;

} else {
    echo 0;
}

?>