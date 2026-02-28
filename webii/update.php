<?php
$conn = mysqli_connect("localhost", "ashwin", "ramesh", "webtechiifor12");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE newtable 
        SET lastname='lastnames nair akdixu' 
        WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>