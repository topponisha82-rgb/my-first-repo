<?php
require_once '../inc/connection.php' ;

$sql = "SELECT * FROM `products` WHERE `status` = '1' " ;
$res = mysqli_query( $con , $sql );

if ( mysqli_num_rows($res) > 0 ) {
    echo '
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Code</th>
                <th scope="col">Description</th>
                <th scope="col">Sale price</th>
                <th scope="col">Fake price</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody> ';

    while ( $row = mysqli_fetch_assoc($res) ) {
        echo '
            <tr>
            <th> ' . $row["id"] . ' </th>
            <td> ' . $row["image"] . ' </td>
            <td> ' . $row["name"] . ' </td>
            <td> ' . $row["code"] . ' </td>
            <td> ' . $row["details"] . ' </td>
            <td> ' . $row["sale_price"] . ' </td>
            <td> ' . $row["fake_price"] . ' </td>
            <td>
                <button class="btn btn-warning"> <i class="bi bi-pen-fill"></i> </button>
                <button class="btn btn-danger" onclick="delete_product(' . $row["id"] . ')"> <i class="bi bi-trash-fill"></i>  </button>
            </td>
            </tr>
        ';
    }

    echo '
            </tbody>
        </table>
    ' ;

} else {
    echo '<div class="alert alert-warning"> No product found !!! </div>' ;
}
?>