<?php
require_once '../inc/connection.php';

$vendor_id = $_REQUEST["vendor_id"];

$sql = "UPDATE `vendor` SET `status` = '0' WHERE `id` = '$vendor_id'";
$res = mysqli_query( $con , $sql );

if( $res ) {
    echo 1;

} else {
    echo  0;
}

?>