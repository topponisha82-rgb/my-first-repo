<?php
session_start();
require_once '../inc/connection.php';

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

if ( $username == '' || $password == '') {
    // echo $username;
    // echo $password;
    header('location:../index.php?msg=Please enter username or password');

} else {

    $sql = "SELECT * FROM `users` WHERE `username`='$username'";
$res = mysqli_query($con , $sql);

if (mysqli_num_rows($res) > 0) {

    $row = mysqli_fetch_assoc($res);

    // $dbpassword = $row["password"];
    // $type = $row["type"];
    // $status = $row["status"];
    if ( $row["user_type"] == 1 ) {

        if ( $row["status"] == 1 ) {

            if ( $password == $row["password"] ) {
                $_SESSION["login_status"] = 1 ;
                $_SESSION["id"] = $row["id"] ;
                $_SESSION["name"] = $row["name"];
                header('location:../home.php');

            } else {
                header('location:../index.php?msg=Wrong password');
                die();
            }

        } else {
            header('location:../index.php?msg=Username Blocked');
            die();
        }

    } else {
        header('location:../index.php?msg=Unothorised User');
        die();
    }

} else {
    header('location:../index.php?msg=Inviled username');
    die();
}

}


?>