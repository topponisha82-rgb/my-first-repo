<?php
require_once '../inc/connection.php';

$sql = "SELECT * FROM `vendor` WHERE `status` = '1'";
$res = mysqli_query( $con , $sql );

if(mysqli_num_rows($res) > 0 ) {
    echo '
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Shop name</th>
      <th scope="col">Owner name</th>
      <th scope="col">Mobile</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">Gst</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>';
  while ($row = mysqli_fetch_assoc($res) ) {
    echo '
    
    <tr>
      <th>' . $row ["id"] . '</th>
      <td>' . $row["shop_name"] . '</td>
      <td>' . $row["owner_name"] . '</td>
      <td>' . $row["mobile"] . '</td>
      <td>' . $row["email"] . '</td>
      <td>' . $row["address"] . '</td>
      <td>' . $row["gst"] . '</td>
      <td>
      <a class=" btn btn-warning" href="edit_vendor.php?id=' . $row["id"] .'"><i class="bi bi-pen"></i></a>
      <button class="btn btn-danger" onclick="delete_vendor(' . $row["id"] . ')"><i class="bi bi-trash3"></i></button>
      </td>
    </tr>
    ';
  }

  echo '
           </tbody>
      </table> 
';
 
} else {
   echo '<div class=" alert alert-warning">No product found !!!</div>';
}
?>