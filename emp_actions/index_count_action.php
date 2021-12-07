<?php

include 'connection.php';

$sql = "SELECT * from tbl_employee";

if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    

 }




 ?>